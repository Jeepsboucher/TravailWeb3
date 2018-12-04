<?php
	require ('Model/ManagerLike.php');

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
        if(session_status() == PHP_SESSION_ACTIVE) {
            session_destroy(); 
            session_unset(); 
        }
        require 'View/Connexion.php';
    }

    function EchecInscription()
    {
         require 'View/Connexion.php';
    }

    function AfficherMenuPrincipal()
    {	
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $id_participant = $_SESSION['id'];
        $ManagerMenuPrincipal = new ManagerLike;
        $resultatLesPlusAimees = $ManagerMenuPrincipal->ObtenirListeDesPlusAimees($id_participant);
		require 'View/Home.php';
        AfficherHomePhotosFavoris();
	}

    function AfficherRenseignements()
    {
        require 'View/Renseignements.php';
    }

    function AfficherFavoris()
    {
        require 'View/Favoris.php';
    }

    function AfficherHomePhotosFavoris()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $id_participant = $_SESSION['id'];
        $ManagerPhotos = new ManagerLike();
        $resultatLesPlusAimees = $ManagerPhotos->ObtenirListeDesPlusAimees($id_participant);
        $resultatFavoris = $ManagerPhotos->ObtenirTroisDerniersFavoris($id_participant);
        require 'View/Vue_HomePhotosFavoris.php';
    }

    function GestionVoteHome($id_photo)
    {
        session_start();
        $id_participant = $_SESSION['id'];
        FaireUnVoteHome($id_participant,$id_photo);
    }

    function FaireUnVoteHome($id_participant,$id_photo)
    {
        $ManagerVote = new ManagerLike;
        $resultatRecherche = $ManagerVote->findVote($id_participant, $id_photo);
        if ($resultatRecherche){
            $resultatVote = $ManagerVote->deleteVote($id_participant, $id_photo);
        }
        else {
            $resultatVote = $ManagerVote->addVote($id_participant, $id_photo);
        } 
        AfficherHomePhotosFavoris();
        
    }

    function AfficherExplorerCategories()
    {
        $ManagerCategorie = new ManagerLike;
        $resultatCategorie = $ManagerCategorie->ObtenirCategoriePhoto();
        require 'View/Explorer.php';
    }

    function AfficherExplorerPhotos($categorie)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $id_participant = $_SESSION['id'];
        $ManagerPhotos = new ManagerLike();
        if ($categorie == 0){
            $resultatPhotosTriees = $ManagerPhotos->ObtenirPhotos($id_participant);
        }
        else {
            $resultatPhotosTriees = $ManagerPhotos->ObtenirPhotosSelonCategories($categorie,$id_participant);
        }
        require 'View/Vue_ExplorerPhotos.php';
    }

    function GestionVote($id_photo,$categorie)
    {
        session_start();
        $id_participant = $_SESSION['id'];
        FaireUnVote($id_participant,$id_photo,$categorie);
    }

    function FaireUnVote($id_participant,$id_photo,$categorie)
    {
        $ManagerVote = new ManagerLike;
        $resultatRecherche = $ManagerVote->findVote($id_participant, $id_photo);
        if ($resultatRecherche){
            $resultatVote = $ManagerVote->deleteVote($id_participant, $id_photo);
        }
        else {
            $resultatVote = $ManagerVote->addVote($id_participant, $id_photo);
        } 
        AfficherExplorerPhotos($categorie);
        
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
                $resultat = $ManagerLike->GetUserId($nomUtilisateur);
                $userID = $resultat->fetch();
                session_start();
                $_SESSION['id'] = ($userID['id_participant']);
                $_SESSION['nomUtilisateur'] = $nomUtilisateur;
                $_SESSION['etat'] = 'connecte';
                AfficherMenuPrincipal();
            }
            else
            {
                $_SESSION['echecinscription'] = '3';
                Connexion();
            } 
        }      
    }

    function ValiderInscription($nomComplet,$nomUtilisateur,$motDePasse,$motDePasseVailation,$courriel){
        if ( !empty($nomComplet) and (!empty($nomUtilisateur)) and (!empty($motDePasse)) and (!empty($motDePasseVailation)) and (!empty($courriel)) ){
            if ($motDePasse == $motDePasseVailation){
                $ManagerLike = new ManagerLike;
                $resultatConnexion = $ManagerLike->checkIfUsernameExist($nomUtilisateur);

                $donnees = $resultatConnexion->fetchAll(PDO::FETCH_COLUMN, 0); 
                $usagerExistant = $donnees;
                if ($usagerExistant)
                {
                    $_SESSION['echecinscription'] = '1';
                    Echecinscription();
                }
                else
                {
                    Inscription($nomComplet,$nomUtilisateur,$motDePasse,$courriel);
                } 
            }
            else {
                $_SESSION['echecinscription'] = '2';
                Echecinscription();
            }
        }      
    }

    function Inscription($nomComplet,$nomUtilisateur,$motDePasse,$courriel){
        $ManagerInscription = new ManagerLike;
        $resultatInscription = $ManagerInscription->createUser($nomComplet,$nomUtilisateur,$motDePasse,$courriel);
        
        $resultat = $ManagerInscription->GetUserId($nomUtilisateur);
        $userID = $resultat->fetch();
        session_start();
        $_SESSION['id'] = ($userID['id_participant']);
        $_SESSION['nomUtilisateur'] = $nomUtilisateur;
        $_SESSION['etat'] = 'connecte';
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
					    $ManagerLike->addPicture($_SESSION['id'],$idCategorie,$idPays,$description,$path);
					}
				}
			}
		}
        ChargerLesChampsAjoutPhoto();
    }
?>   