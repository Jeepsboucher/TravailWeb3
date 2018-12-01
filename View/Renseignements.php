<?php
    include 'SessionValide.php';
?>

<!DOCTYPE html>
<head>
    <script lang="Javascript">
    </script>
</head>

<html>
    <head>
        <meta charset="utf-8">
        <title>Renseignements</title>
        <link href="jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/Design.css">
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
       <form name="Renseignements" method="POST" action="">
            <?php  
                require("MainMenu.php")
            ?>
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
                    <img class="pure-img" src="Images/yellowish.jpg">
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-1 pure-u-lg-1 form-box" style="left:100px;position:fixed;">
                <div class="pure-u-1 pure-u-md-14-24 pure-u-lg-14-24" style="background-color:#f2f2f2;height:500px;">
                    <p>GAHGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG</p>
                </div>
                <div class="pure-u-1 pure-u-md-1-24 pure-u-lg-1-24">
                </div>
                <div class="pure-u-1 pure-u-md-6-24 pure-u-lg-6-24" style="background-color:#dbad5f;height:300px;">
                    <p>GAHGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG</p>
                </div>
            </div>
        </form>
    </body>
</html>
