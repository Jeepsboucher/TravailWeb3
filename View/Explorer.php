<?php
    include 'SessionValide.php';
    require("MainMenu.php");
    $titre = 'Explorer'; 
    $lien_ajax='type="text/JavaScript" src="jquery-3.3.1.min.js"';
    $gestion_ajax='type="text/JavaScript" src="JS/Gestion_ExplorerPhotos.js"';
?>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<?php ob_start(); ?>

<form name="Contenu" class="pure-form pure-form-aligned">
    <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
        <h1>Photos autour de vous</h1>
    </div>
    <br>

    <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
        <div class="pure-control-group">
           <label for="categorie">Selectionnez une catégorie:</label>
            <select name="categorie" id="categorie">	
               <option value="0"> </option>
                <?php 
                    while ($donnees = $resultatCategorie->fetch()) { 
                ?>
                        <option value="<?php echo $donnees['id_categorie']?>"><?php echo $donnees['nom']?></option>
                <?php 
                    }
                    $resultatCategorie->closeCursor();
                ?>
            </select>
        </div>
    </div>
    <br>
    <br>

    <div name="content" id="photos" style="background-color:#f2f2f2;">
        <br>
        <div id="liste_des_photos"></div>
        <br>
    </div>
    
    <div id="modal01" class="modal" onclick="this.style.display='none'">
         <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <div class="modal-content" style="text-align:center">
                <img id="img01" style="max-width:99%">
                <br><br>
                <label id="label01" style="color:white;" ></label>
            </div>
        </div>
        <script>
        function modal(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("label01").textContent = element.title;
        document.getElementById("modal01").style.display = "block";
        }
        </script>
</form>
        
<?php $contenu = ob_get_clean(); ?>

<?php require 'Gabarit.php'; ?>