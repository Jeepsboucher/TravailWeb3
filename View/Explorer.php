<?php
    include 'SessionValide.php';
    require("MainMenu.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Explorer</title>
        <link href="jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/Design.css">
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script lang="Javascript">
            function AddToFavorites(iconId)
            {
                if (document.getElementById(iconId).innerHTML == "favorite_border")
                {
                    document.getElementById(iconId).innerHTML = "favorite";
                }
                else
                {
                    document.getElementById(iconId).innerHTML = "favorite_border";
                }   
            }
        </script>
    </head>

    <body scroll="yes">
       <div class="pure-g">
           <div class="pure-u-1-24 pure-u-md-1-12 pure-u-lg-1-12">
                &nbsp;
            </div>
            <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
                <form name="Contenu" method="POST" action="">
                    <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
                        <h1>Photos autour de vous</h1>
                    </div>
                    <br>
                    
                    <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
                        <h3>Choisir selon une catégorie: </h3>
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
                   <div name="content" id="photos" style="background-color:#f2f2f2;">
                        <br>
                            <?php while ($donnees = $resultatPhotos->fetch()) {
                                ?>
                                   <div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-6" id="<?php echo $donnees['id_photo']?>" style="vertical-align:middle;">
                                       <center>
                                        <img class="pure-img" src="<?php echo $donnees['path']?>" title="" style="width:100px;height:auto;">
                                        <div onclick="AddToFavorites('img<?php echo $donnees['id_photo']?>')">
                                            <i id="img<?php echo $donnees['id_photo']?>" class="material-icons" style="cursor:pointer;position:relative;top:2px;">favorite_border</i>
                                            <label style="vertical-align:middle;position:relative;top:-5px;">21</label>
                                        </div>
                                        </center>
                                    </div>
                                <?php
                            }
                            $resultatPhotos->closeCursor();
                            ?>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


