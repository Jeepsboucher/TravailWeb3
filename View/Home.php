<?php
    include 'SessionValide.php';
    require("MainMenu.php");
    $titre = 'Accueil'; 
    $lien_ajax='type="text/JavaScript" src="jquery-3.3.1.min.js"';
    $gestion_ajax='type="text/JavaScript" src="JS/Gestion_HomePhotos.js"';
?>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<?php ob_start(); ?>

<form name="Contenu" method="POST" action="">
    <div class="pure-u-1-4 pure-u-md-1-4 pure-u-lg-1-4 form-box">
        <h1>Accueil</h1>
    </div>
    <br>
    <div id="liste_des_photos_et_favoris"></div>
    <br>
</form>


<?php $contenu = ob_get_clean(); ?>

<?php require 'Gabarit.php'; ?>