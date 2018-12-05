<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $titre ?></title>
        <link href="jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/Design.css">
        <link rel="stylesheet" type="text/css" href="CSS/ImageModal.css">
        <link rel="stylesheet" type="text/css" href="CSS/ImageModal.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
        <div id="modal01" class="modal" onclick="this.style.display='none'">
        <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <div class="modal-content" style="text-align:center">
            <img id="img01" style="max-width:99%">
            <br><br>
            <label id="label01" style="color:white;" ></label>
            <br>
            <label id="label02" style="color:white;" ></label>
        </div>
    </div>
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
        <script>
        function modal(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("label01").textContent = 'Description : ' + element.title;
        document.getElementById("label02").textContent = 'Pays : ' + element.alt;
        document.getElementById("modal01").style.display = "block";
        }
    </script>

    </body>
</html>