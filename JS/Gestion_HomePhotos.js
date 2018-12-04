function AddToFavorites(photoId)
{
    var valeurPhoto = photoId;
    var home = 1;
    
    $.ajax({
        url : "index.php",
        type : "POST",
        data : {id_photo:valeurPhoto,home:home},
        success : function(outputUrl){
            $("#liste_des_photos_et_favoris").html(outputUrl);
        }
    });
}

function RunVue()
{
    var homeVue = 1;
    
    $.ajax({
        url : "index.php",
        type : "POST",
        data : {homeVue:homeVue},
        success : function(outputUrl){
            $("#liste_des_photos_et_favoris").html(outputUrl);
        }
    });
}

RunVue();