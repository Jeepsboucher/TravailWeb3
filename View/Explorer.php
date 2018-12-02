<?php
    include 'SessionValide.php';
    require("MainMenu.php");
    $titre = 'Explorer'; 
    $lien_ajax='type="text/JavaScript" src="jquery-3.3.1.min.js"';
    $gestion_ajax='type="text/JavaScript" src="Gestion_ExplorerPhotos.js"';
?>

<?php ob_start(); ?>

<form name="Contenu">
    <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
        <h1>Photos autour de vous</h1>
    </div>
    <br>

    <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
        <label for="categorie">Selectionnez une catégorie:</label>
        <select name="categorie" id="categorie">	
            <?php 
                while ($donnees = $resultatCategorie->fetch()) { 
            ?>
                    <option value="<?php echo $donnees['id_categorie']?>"><?php echo $donnees['nom']?>
                    </option>
            <?php 
                }
                $resultatCategorie->closeCursor();
            ?>
        </select>
    </div>
    <br>
    <br>

    <!-- AFFICHER LES PHOTOS EN ORDRE DE J'AIME,  SELON UNE CATÉGORIE SI DÉSIRÉ -->
    <!-- Pour retourner le code généré par Ajax --> 
    <div name="content" id="photos" style="background-color:#f2f2f2;">
        <br>
        <div id="liste_des_photos"></div>
        <br>
    </div>
</form>
        
<?php $contenu = ob_get_clean(); ?>

<?php require 'Gabarit.php'; ?>