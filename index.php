<?php
require_once 'Controller/Controller.php';
try {
    if  (!empty($_GET['action'])){
        if ($_GET['action']=="Authentification"){
            Authentification();
        }
        else if ($_GET['action']=="Home"){
            AfficherMenuPrincipal();
        }
        else if ($_GET['action']=="AjouterPhoto"){
            ChargerLesChampsAjoutPhoto();
        }
        else if (isset($_SESSION['path'])){
            EnregistrerPhoto();
        }
        else if ($_GET['action']=="UploadPhoto"){
            UploadPhoto();
        }
        else if ($_GET['action']=="Explorer"){
            AfficherExplorerCategories();
        }
        else if ($_GET['action']=="Favoris"){
            AfficherFavoris();
        }
        else if ($_GET['action']=="Renseignements"){
            AfficherRenseignements();
        }
        else if ($_GET['action']=="FAQ"){
            AfficherFAQ();
        }
        else if ($_GET['action']=="Deconnexion"){
            Deconnexion();
        }
        
    }
    else {     
        if ( !empty($_POST['nomUtilisateur']) && !empty($_POST['motDePasse'])){
            ValiderInformations(htmlentities($_POST['nomUtilisateur']),htmlentities($_POST['motDePasse']));
        }
        else if ( !empty($_POST['nomCompletIns']) && !empty($_POST['nomUtilisateurIns']) && !empty($_POST['motDePasseIns']) && !empty($_POST['motDePasseValidation']) && !empty($_POST['courrielIns']) ){
            ValiderInscription(htmlentities($_POST['nomCompletIns']),htmlentities($_POST['nomUtilisateurIns']),htmlentities($_POST['motDePasseIns']),htmlentities($_POST['motDePasseValidation']),htmlentities($_POST['courrielIns']));
        }
        else if (isset($_POST['id_photo'])){
            if(isset($_POST['id_categorie'])){
                GestionVote(htmlentities($_POST['id_photo']),$_POST['id_categorie']);
            }
            else if(isset($_POST['home'])){
                GestionVoteHome(htmlentities($_POST['id_photo']));
            }
        }
        else if (isset($_POST['id_categorie'])){
                AfficherExplorerPhotos(htmlentities($_POST['id_categorie']));
        }
        else if(isset($_POST['homeVue'])){
                AfficherHomePhotosFavoris();
            }
        else {
            Connexion();
        }
    }
}
catch (PDOException $e) {
  $msgErreur = $e->getMessage();
  require 'view/Connexion.php';

} ?>
