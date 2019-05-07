<?php
require('Repository.php');
require('Article.php');

class CommentRepository extends Connect {
	
	function getComment()
	{
		//Accéder à la BD
		$db = $this->getDb();

		//Préparer la requête
		$req = $db->prepare('SELECT * FROM comment LIMIT 0, 2');
		
		//Exécuter la requête
		$req->execute();
		
		//Créer un tableau vide
		$comments = [];
		
		//Pour chaque enregistrement en BD, on ajoute un élément au tableau
		while($data = $req-> fetch()) {
			
			//Version objet
			$comment = new Comment($data['content'], $data['publishedDate'], $data['author'], $data['postID']);
			$comments[] = $comment;
			
		}
		
		//Arrêter l'accès à la BD
		$req->closeCursor();

		//On retourne le tableau à CommentController
		return $comments;
	}


	
	/* 
	function addUser() 
	{
		$db = $this->getDb();

		$req = $db->prepare('INSERT INTO users(username, password) VALUES(:username, :password)');
		$req->bindParam(':username', $_SESSION['username'], \PDO::PARAM_STR);
		$req->bindParam(':password', $_SESSION['password'], \PDO::PARAM_STR);
		$req->execute();
		
	}
	*/ 
}

