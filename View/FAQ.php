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
        <title>FAQ</title>
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
               <div class="pure-u-1 pure-u-md-1 pure-u-lg-1 form-box" style="left:100px;position:fixed;">
                    <div class="pure-u-1 pure-u-md-16-24 pure-u-lg-16-24">
                        <h1>FAQ</h1>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-1 pure-u-lg-1 form-box" style="left:100px;top:75px;position:fixed;">
                    <div class="pure-u-1 pure-u-md-18-24 pure-u-lg-18-24">
                        <img class="pure-img" src="Images/castle1.jpg" title="Plat national du Mexique!" style="width:200px;height:auto;">
                    </div>
                </div>
           </div>
        </form>
    </body>
</html>
