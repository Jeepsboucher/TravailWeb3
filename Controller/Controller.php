<?php
	require ('Model/ManagerLike.php');

    function donne_nom()
    {
        return date("Y-m-d H-i-s");
    }

    function ChargerLesChampsAjoutPhoto()
    {
        $ManagerLike = new ManagerLike;
        $resultatCategorie = $ManagerLike->ObtenirCategoriePhoto();
        $resultatPays = $ManagerLike->ObtenirListePays();
        require('View/AjouterPhoto.php');
    } 

	function UploadPhoto()
	{
		require 'View/upload.php';
	}

	function Connexion()
    {	
        require 'View/Connexion.php';
    }

    function Deconnexion()
    {
        require 'View/Connexion.php';
    }

    function Authentification()
    {
        require 'View/Home.php';
    }

    function EchecInscription()
    {
         require 'View/Connexion.php';
    }

    function AfficherMenuPrincipal(){	
		require 'View/Home.php';
	}

    function AfficherRenseignements()
    {
        require 'View/Renseignements.php';
    }

    function AfficherFavoris()
    {
        require 'View/Favoris.php';
    }

    function AfficherExplorer()
    {
        $ManagerCategorie = new ManagerLike;
        $resultatCategorie = $ManagerCategorie->ObtenirCategoriePhoto();
        require 'View/Explorer.php';
    }

    function AfficherFAQ()
    {
        require 'View/FAQ.php';
    }

   function ValiderInformations($nomUtilisateur,$motDePasse){
        if (!empty($nomUtilisateur) and (!empty($motDePasse))){
            $ManagerLike = new ManagerLike;
            $resultatConnexion = $ManagerLike->checkIfUserCanConnect($nomUtilisateur,$motDePasse);
            
            $donnees = $resultatConnexion->fetchAll(); 
            $usagerExistant = ($donnees[0]['MyCount'] == 1);
            if ($usagerExistant)
            {
                $_SESSION['nomUtilisateur'] = $nomUtilisateur;
                $_SESSION['etat'] = 'connecte';
                Authentification();  
            }
            
            
            /*if ($resultatConnexion->columnCount() == 1)
            {
                Authentification();  			  
            }*/
            else
            {
                Connexion();
            } 
        }      
    }

    function ValiderInscription($nomComplet,$nomUtilisateur,$motDePasse,$courriel){
        if ( !empty($nomComplet) and (!empty($nomUtilisateur)) and (!empty($motDePasse)) and (!empty($courriel)) ){
            $ManagerLike = new ManagerLike;
            $resultatConnexion = $ManagerLike->checkIfUsernameExist($nomUtilisateur);
            
             /*while ($donnees = $resultatConnexion->fetch()) {
                 if( $donnees['username'] == $nomUtilisateur){
                     Echecinscription();
                     break;
                 }
                 else{
                     Inscription($nomComplet,$nomUtilisateur,$motDePasse,$courriel);
                     break;
                 } 
             }*/
            
            $donnees = $resultatConnexion->fetchAll(); 
            $usagerExistant = $donnees[0]['username'];
            if ($usagerExistant)
            {
                Echecinscription();
            }
            else
            {
                Inscription($nomComplet,$nomUtilisateur,$motDePasse,$courriel);
            } 
        }      
    }

    function Inscription($nomComplet,$nomUtilisateur,$motDePasse,$courriel){
        $ManagerInscription = new ManagerLike;
        $resultatInscription = $ManagerInscription->createUser($nomComplet,$nomUtilisateur,$motDePasse,$courriel);
        Authentification();
    }

    function EnregistrerPhoto(){
        $ManagerLike = new ManagerLike;
		if(isset($_SESSION['path'])){
			if(isset($_SESSION['categorie'])){
				if(isset($_SESSION['pays'])){
					if(isset($_SESSION['description'])){
						$path = $_SESSION['path'];
						$idCategorie = $_SESSION['categorie'];
						$idPays = $_SESSION['pays'];
						$description = $_SESSION['description'];
					    $ManagerLike->addPicture("1",$idCategorie,$idPays,$description,$path);
					}
				}
			}
		}
    }
?>   