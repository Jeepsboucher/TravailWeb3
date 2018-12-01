<?php
require 'Controller/Controller.php';
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
        else if ($_GET['action']=="Explorer"){
            AfficherExplorer();
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
        else if ( !empty($_POST['nomCompletIns']) && !empty($_POST['nomUtilisateurIns']) && !empty($_POST['motDePasseIns']) && !empty($_POST['courrielIns']) ){
            ValiderInscription(htmlentities($_POST['nomCompletIns']),htmlentities($_POST['nomUtilisateurIns']),htmlentities($_POST['motDePasseIns']),htmlentities($_POST['courrielIns']));
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
