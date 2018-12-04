<?php 
include 'SessionValide.php';
while ($donnees = $resultatPhotosTriees->fetch()) {
    ?>
       <div class="pure-u-1 pure-u-md-1-3 pure-u-lg-7-24" id="<?php echo $donnees['id_photo']?>" style="vertical-align:middle;">
           <center>
            <img class="pure-img" src="<?php echo $donnees['path']?>" title="<?php echo $donnees['description']?>" style="width:auto;height:auto;max-width:300px;cursor:pointer" onclick="modal(this)">
            <div>
                <i name="heart" id="img<?php echo $donnees['id_photo']?>" tag="icon" class="material-icons" style="cursor:pointer;position:relative;top:2px;" onclick="AddToFavorites('<?php echo $donnees['id_photo']?>')">
                    <?php 
                        if ($donnees['bool_vote'] == 1){
                            echo "favorite";
                        }
                        else {
                            echo "favorite_border";
                        }
                    ?>
                </i>
                <label style="vertical-align:middle;position:relative;top:-5px;"><?php echo $donnees['nombreFavoris']?></label>
            </div>
            </center>
        </div>
    <?php
}
$resultatPhotosTriees->closeCursor();
?>