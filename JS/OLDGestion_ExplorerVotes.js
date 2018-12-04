/*function AddToFavorites(photoId)
{
    alert(photoId);
    var valeurPhoto = photoId;
    $.ajax({
        url : "index.php",
        type : "POST",
        data : {id_photo:valeurPhoto.val()},
        success : function(outputUrl){
            $("#liste_des_photos").html(outputUrl);
        }
    });
    alert('passe!!!!');
}*/