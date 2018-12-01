<?php
    require('MainMenu.php');
    include 'SessionValide.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="jquery-ui.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="CSS/Design.css">
        <title>Importer une image</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->
    </head>
    
    <body>                   
        <div class="pure-g">
            <div class="pure-u-1-6 pure-u-md-1-6 pure-u-lg-1-6">
            </div>
            <div class="pure-u-2-5 pure-u-md-2-5 pure-u-lg-2-5 form-box"> <!-- pour centrer -->
                <h1>Importer une image sur le site</h1>       
                <form class="pure-form pure-form-aligned" id="mon_formulaire" method="Post" action="index.php?action=UploadPhoto" type="actionForm" enctype="multipart/form-data">
                <fieldset>
                <div class="pure-control-group">
                    <select name="categorie" id="categorie" >	
                                <?php while ($donnees = $resultatCategorie->fetch()) {    
                                ?>
                                <option value="<?php echo $donnees['id_categorie']?>"><?php echo $donnees['nom']?>
                                </option>
                                <?php
                                }
                            $resultatCategorie->closeCursor();
                            ?>
                    </select>
                </div>
                </fieldset> 
               <fieldset>
                <div class="pure-control-group">
                    <select name="pays" id="pays" >	
                                <?php while ($donnees = $resultatPays->fetch()) {    
                                ?>
                                <option value="<?php echo $donnees['id_pays']?>"><?php echo $donnees['nom']?>
                                </option>
                                <?php
                                }
                            $resultatPays->closeCursor();
                            ?>
                    </select>
                </div>
                </fieldset> 
               <fieldset class="pure-group">
                    <textarea class="pure-input-1" id="description" name="description" placeholder="Description de la photo"></textarea>
                </fieldset>
                <fieldset>
                   <div class="pure-control-group">       
                        <input type="file" name="fichier" id="fichier" />
                    </div>

                    <div class="pure-controls">
                        <input class="submit pure-button pure-button-primary" type="submit" value="Envoyer"/>
                    </div>
                   </fieldset>
                </form>  
            </div>
        </div>
    </body>
</html>