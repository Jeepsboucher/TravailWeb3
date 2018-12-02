<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $titre ?></title>
        <link href="jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/Design.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                <?php echo $contenu ?>
            
            
    
            </div>
        </div>
        
        <script <?php echo $lien_ajax ?>></script>
        <script <?php echo $gestion_ajax ?> ></script>	
    </body>
</html>