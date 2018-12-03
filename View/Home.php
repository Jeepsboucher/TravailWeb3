<?php
    include 'SessionValide.php';
    require("MainMenu.php");
    echo $_SESSION['etat'];
    echo $_SESSION['nomUtilisateur'];
    echo $_SESSION['id'];
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Concours de photographie</title>
        <link href="jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/Design.css">
        <link rel="stylesheet" type="text/css" href="CSS/ImageModal.css">
                <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

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
        
        <!--<style>
            body {background-image: url("images/WhiteWall.jpg");background-repeat:repeat;}
        </style>-->
    </head>


    <body scroll="yes">
        <div class="pure-g">
            <div class="pure-u-1-24 pure-u-md-1-12 pure-u-lg-1-12">
                &nbsp;
            </div>
            <div class="pure-u-7-8 pure-u-md-21-24 pure-u-lg-21-24 form-box">
                <form name="Contenu" method="POST" action="">
                    <div class="pure-u-1-4 pure-u-md-1-4 pure-u-lg-1-4 form-box">
                        <h1>Accueil</h1>
                    </div>
                    <br>

                    <div class="pure-u-18-24 pure-u-md-18-24 pure-u-lg-18-24 form-box">
                        <h2>Coups de coeur:</h2>
                        <br>

                       <!-- 10 PHOTOS LES PLUS AIMÉES, FAIRE APPARAITRE LES DIVS AU DUR ET À MESURE -->
          
                        <div style="background-color:#f2f2f2;">
                           <br>
                           <?php while ($donnees = $resultatLesPlusAimees->fetch()) {    
                                ?>
                                <div class="pure-u-1-4 pure-u-md-1-1 pure-u-lg-1-4" id="1" style="vertical-align:middle;text-align:center;">
                                    <img class="pure-img" src="<?php echo $donnees['path']?>" title="<?php echo $donnees['description']?>" style="width:auto;height:auto;max-width:300px;curso:pointer" onclick="modal(this)"
                                    class="modal-hover-opacity">
                                    
                                     <div onclick="AddToFavorites('img<?php echo $donnees['id_photo']?>')">
                                         <i id="img<?php echo $donnees['id_photo']?>" class="material-icons" style="cursor:pointer;">favorite_border</i>
                                         <label><?php echo $donnees['count']?></label>
                                     </div>
                                </div>
                                <?php
                                }
                            $resultatLesPlusAimees->closeCursor();
                            ?>
                            <br>
                        </div>
                    </div>

                    <div class="pure-u-3-24 pure-u-md-3-24 pure-u-lg-5-24 form-box">
                        <h2>Favoris:</h2>
                        <br>

                       <!-- LES TROIS PLUS RÉCENTS FAVORIS -->
                        <div style="background-color:#dbad5f;">
                           <center>
                               <br>
                                <div class="pure-u-1">
                                    <img class="pure-img" src="Images/beach1.jpg" title="Plat national du Mexique!" style="width:auto;height:auto;max-width:300px;"
                                    onclick="modal(this)">
                                </div>
                                <br>
                                <div style="">
                                    <img class="pure-img" src="Images/castle1.jpg" title="Plat national du Mexique!" style="width:auto;height:auto;max-width:300px;"
                                    onclick="modal(this)">
                                 </div>
                                 <br>
                                <div style="">
                                    <img class="pure-img" src="Images/beach1.jpg" title="Plat national du Québec!" style="width:auto;height:auto;max-width:300px;"
                                    onclick="modal(this)">
                                </div>
                                <br>
                            </center>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
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
        
    </body>
</html>
<?php
$_SESSION['id'] = $_SESSION['id'];
?>

