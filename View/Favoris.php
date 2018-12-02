<?php
    include 'SessionValide.php';
    require("MainMenu.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Favoris</title>
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

    <body>
        <div class="pure-g">
           <div class="pure-u-1-24 pure-u-md-1-12 pure-u-lg-1-12">
                &nbsp;
            </div>
            <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
                <form name="Renseignements" method="POST" action="">
                    <div class="pure-u-21-24 pure-u-md-21-24 pure-u-lg-21-24 form-box">
                        <h1>Vos favoris</h1>
                    </div>
                    <br>
                    
                    <div name="content" id="photos" style="background-color:#f2f2f2;">
                       <br>
                        <div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-6" id="1">
                           <center>
                                <img class="pure-img" src="Images/waterfall1.jpg" title="" style="width:100px;height:auto;">
                                <div onclick="AddToFavorites('img1')">
                                    <i id="img1" class="material-icons" style="cursor:pointer;">favorite_border</i>
                                </div>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
