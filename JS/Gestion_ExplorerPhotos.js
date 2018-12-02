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