<?php
//require('Repository.php');
require('Comment.php');

class CommentRepository extends Connect {
	
	function getComments()
	{
		//Accéder à la BD
		$db = $this->getDb();

		//Préparer la requête
		$req = $db->prepare('SELECT * FROM comment WHERE postId=:postId and isValid=1');
		$req->bindParam(':postId', $_SESSION['id'], \PDO::PARAM_STR);

		
		//Exécuter la requête
		$req->execute();
		
		//Créer un tableau vide
		$comments = [];
		
		//Pour chaque enregistrement en BD, on ajoute un élément au tableau
		while($data = $req-> fetch()) {
			
			//Version objet
			$comment = new Comment($data['author'], $data['publishedDate'], $data['content'], $data['postId']);
			$comments[] = $comment;
			
		}
		
		//Arrêter l'accès à la BD
		$req->closeCursor();

		//On retourne le tableau à CommentController
		return $comments;
	}
	
	
	function addComment() 
	{
		$db = $this->getDb();
		$req = $db->prepare('INSERT INTO comment(content, publishedDate, author, postId) VALUES(:content, now(), :author, :postId)');
		$req->bindParam(':content', $_SESSION['commentArea'], \PDO::PARAM_STR);
		$req->bindParam(':author', $_SESSION['commentAuthorPseudo'], \PDO::PARAM_STR);
		$req->bindParam(':postId', $_SESSION['id'], \PDO::PARAM_STR);
		$req->execute();
		
	}
	 
}

