<?php while ($donnees = $resultatPhotosTriees->fetch()) {
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
$resultatPhotosTriees->closeCursor();
?>