<?php

require_once("model/Connexion.php"); // on pourra utiliser dbConnexion

class ManagerLike extends Connexion
{
	
	public function checkIfUsernameExist($username){
	$sql =  'SELECT username from tbl_participant where username = :username '; 
    $resultat = self::getConnexion()->prepare($sql);
    $resultat->bindParam('username', $username, PDO::PARAM_STR);
    $resultat-> execute();
    return $resultat;
	}
    
    public function checkIfUserCanConnect($username,$password){
	$sql =  'SELECT COUNT(*) AS MyCount from tbl_participant where username = :username and password = :password'; 
    $resultat = self::getConnexion()->prepare($sql);
    $resultat->bindParam('username', $username, PDO::PARAM_STR);
    $resultat->bindParam('password', $password, PDO::PARAM_STR);
    $resultat-> execute();
    return $resultat;
	}
    
    public function createUser($fullname,$username,$password,$email){
    $sql = 'insert into tbl_participant (fullname,username,password,email)
            values (:fullname,:username,:password,:email)';
    $resultat = self::getConnexion()->prepare($sql);
    $resultat->bindParam('fullname', $fullname, PDO::PARAM_STR);
    $resultat->bindParam('username', $username, PDO::PARAM_STR);
    $resultat->bindParam('password', $password, PDO::PARAM_STR);
    $resultat->bindParam('email', $email, PDO::PARAM_STR);
    $resultat-> execute();
    }
    
    public function GetUserId($username){
	$sql =  'SELECT id_participant from tbl_participant where username = :username'; 
    $resultat = self::getConnexion()->prepare($sql);
    $resultat->bindParam('username', $username, PDO::PARAM_STR);
    $resultat-> execute();
    return $resultat;
	}
    
    public function addPicture($id_participant,$id_categorie,$id_pays,$description,$path){
    $sql = "insert into tbl_photo (path,description,id_participant,id_pays,id_categorie)
    values (:path,:description,:id_participant,:id_pays,:id_categorie)";
    $resultat = self::getConnexion()->prepare($sql);
    $resultat->bindParam('path', $path, PDO::PARAM_STR);
    $resultat->bindParam('description', $description, PDO::PARAM_STR);
    $resultat->bindParam('id_participant', $id_participant, PDO::PARAM_INT);
    $resultat->bindParam('id_pays', $id_pays, PDO::PARAM_INT);
    $resultat->bindParam('id_categorie', $id_categorie, PDO::PARAM_INT);
    $resultat-> execute();
    }
    
    public function addVote($id_participant, $id_photo){
    $date = date("Y-m-d H:i:s", strtotime($date));
    $sql = 'insert into tbl_vote_photo (date_vote,id_participant,id_photo)
            values (:date,:id_participant,:id_photo)';
    $resultat = self::getConnexion()->prepare($sql);
    $resultat->bindParam('date', $date, PDO::PARAM_STR);
    $resultat->bindParam('id_participant', $id_participant, PDO::PARAM_INT);
    $resultat->bindParam('password', $id_photo, PDO::PARAM_INT);
    $resultat-> execute();
    }
    
    public function deleteVote($id_participant, $id_photo){
    $sql = 'delete from tbl_vote_photo where id_participant = :id_participant and id_photo = :id_photo';
    $resultat = self::getConnexion()->prepare($sql);
    $resultat->bindParam('id_participant', $id_participant, PDO::PARAM_INT);
    $resultat->bindParam('password', $id_photo, PDO::PARAM_INT);
    $resultat-> execute();
    }
    
    public function ObtenirCategoriePhoto()
    {
        $sql = 'select * from tbl_categorie';
        $resultat = self::getConnexion()->prepare($sql);
        $resultat->execute();
        return $resultat;
    }

    public function ObtenirListePays()
    {
        $sql = 'select * from tbl_pays';
        $resultat = self::getConnexion()->prepare($sql);
        $resultat->execute();
        return $resultat;
    }
}

?>