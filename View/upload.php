<?php
include 'SessionValide.php';
require('fctredimimage.php');

try {
    if(verifierFormulaireEnvoyer()==true){
        if(verifierFichierUploaderServeur()==true){
            if(verifierTailleFichier()==true){
                if(verifierExtensionFichier()==true){
                    uploader_fichier();
                }
            }
        }
    }
} catch(Exception $msgErreur){
    echo 'Exception reçue : '. $msgErreur->getMessage();
}

function verifierFormulaireEnvoyer(){
    if(isset($_FILES["fichier"])){
        return true;
    }else{
        throw new Exception('Post non réussie');
    }
}

function verifierFichierUploaderServeur(){
    if(is_uploaded_file($_FILES['fichier']['tmp_name'])){
        return true;
    }
    else{
        throw new Exception('Pas de fichier uploader au serveur');
    }
}

function verifierTailleFichier(){
    if(filesize($_FILES['fichier']['tmp_name']) < 1000000){
        return true;
    }else{
        throw new Exception('Taille du Fichier trop grosse');
    }
}

function verifierExtensionFichier(){
    $infoDuFichier = pathinfo($_FILES['fichier']['name']);
    $extension = $infoDuFichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'png','JPG', 'JPEG', 'PNG');
    
    if(in_array($extension, $extensions_autorisees)){
        return true;
    }else{
        throw new Exception('Extension de fichier non supporter');
    }
}

function uploader_fichier(){
    
$infoFichier = pathinfo($_FILES['fichier']['name']);
$extension_upload = $infoFichier['extension'];
$resultatNomFichier = donne_nom();

$resultatNomFichier = $resultatNomFichier . '.' . $extension_upload;

move_uploaded_file($_FILES['fichier']['tmp_name'], 'photo/'.$resultatNomFichier);
minimiser_image($resultatNomFichier);
    if(!empty($_POST['description']) && !empty($_POST['categorie']) && !empty($_POST['pays'])){
        $_SESSION['path'] = 'photo/'.$resultatNomFichier;
		$_SESSION['categorie'] = $_POST['categorie'];
		$_SESSION['pays'] = $_POST['pays'];
		$_SESSION['description'] = $_POST['description'];
		require('index.php');
    }
}

function minimiser_image($nomFichier){
    $redimOK = fctredimimage(120,80,'photo_petite/',$nomFichier,'photo/',$nomFichier);
}

function donne_nom()
{
	return date("Y-m-d H-i-s");
}
?>