$(document).ready(function(){
/* vérifie si on a sélectionné la liste déroulante. Appelle la fonction */	
    $("#categorie").change(ChoisirCategorie);
}); 
	
/*si la liste a été sélectionné*/
function ChoisirCategorie()
{
    var valeurCategorie = $("#categorie option:selected");
    $.ajax({
        url : "index.php",
        type : "POST",
        data : {id_categorie:valeurCategorie.val()},
        success : function(outputUrl){
            $("#liste_des_photos").html(outputUrl);
        }
    });
}

ChoisirCategorie();

function AddToFavorites(photoId)
{
    var valeurPhoto = photoId;
    
    var select = document.getElementById("categorie");
    var valeurCategorie = select.options[select.selectedIndex].value;
    
    $.ajax({
        url : "index.php",
        type : "POST",
        data : {id_photo:valeurPhoto,id_categorie:valeurCategorie},
        success : function(outputUrl){
            $("#liste_des_photos").html(outputUrl);
        }
    });
}