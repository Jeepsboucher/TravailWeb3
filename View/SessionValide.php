<?php
    session_start(); 
    if( isset($_SESSION['utilisateur']) ){
        if( !empty($_SESSION['utilisateur']) ){
            if( $_SESSION['etat'] != 'connecte' ){
                header('Location: Connexion.php');
            }
        }
        else {
            header('Location: Connexion.php');
        }
    }
    else {
        header('Location: Connexion.php');
    }
?>
