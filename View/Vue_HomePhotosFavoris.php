<div class="pure-u-1-24 pure-u-md-1-24 pure-u-lg-1-24">
    &nbsp;
</div>

<div class="pure-u-16-24 pure-u-md-16-24 pure-u-lg-16-24 form-box">
    <h2>Coups de coeur:</h2>
    <br>

    <div style="background-color:#f2f2f2;">
       <br>
       <?php while ($donnees = $resultatLesPlusAimees->fetch()) {    
            ?>
            <div class="pure-u-1-1 pure-u-md-1-1 pure-u-lg-7-24" id="1" style="vertical-align:middle;text-align:center;">
                <img class="pure-img" src="<?php echo $donnees['path']?>" title="<?php echo $donnees['description']?>" style="width:auto;height:auto;max-width:300px;cursor:pointer" onclick="modal(this)"
                class="modal-hover-opacity">
                 <div>
                     <i id="img<?php echo $donnees['id_photo']?>" class="material-icons" style="cursor:pointer;position:relative;top:2px;" onclick="AddToFavorites('<?php echo $donnees['id_photo']?>')">
                         <?php 
                            if ($donnees['bool_vote'] == 1){
                                echo "favorite";
                            }
                            else {
                                echo "favorite_border";
                            }
                        ?>
                     </i>
                     <label style="vertical-align:middle;position:relative;top:-5px;"><?php echo $donnees['count']?></label>
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
                <img class="pure-img" src="Images/beach1.jpg" title="Plat national du Mexique!" style="width:auto;height:auto;max-width:300px;" onclick="modal(this)">
                <div onclick="AddToFavorites('fav1')">
                    <i id="fav1" class="material-icons" style="cursor:pointer;position:relative;top:2px;">favorite_border</i>
                    <label style="vertical-align:middle;position:relative;top:-5px;">2</label>
                </div>
            </div>
            <br>
            <div style="">
                <img class="pure-img" src="Images/castle1.jpg" title="Plat national du Mexique!" style="width:auto;height:auto;max-width:300px;" onclick="modal(this)">
                <div onclick="AddToFavorites('fav2')">
                    <i id="fav2" class="material-icons" style="cursor:pointer;position:relative;top:2px;">favorite_border</i>
                    <label style="vertical-align:middle;position:relative;top:-5px;">4</label>
                </div>
             </div>
             <br>
            <div style="">
                <img class="pure-img" src="Images/beach1.jpg" title="Plat national du Québec!" style="width:auto;height:auto;max-width:300px;" onclick="modal(this)">
                <div onclick="AddToFavorites('fav3')">
                    <i id="fav3" class="material-icons" style="cursor:pointer;position:relative;top:2px;">favorite_border</i>
                    <label style="vertical-align:middle;position:relative;top:-5px;">17</label>
                </div>
            </div>
            <br>
        </center>
    </div>
</div>