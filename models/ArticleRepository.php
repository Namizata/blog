<?php
require('Repository.php');
require('Article.php');

class ArticleRepository extends Connect {
	
	function getArticles()
	{
		//Accéder à la BD
		$db = $this->getDb();

		//Préparer la requête
		$req = $db->prepare('SELECT * FROM post LIMIT 0, 2');
		
		//Exécuter la requête
		$req->execute();
		
		//Créer un tableau vide
		$articles = [];
		
		//Pour chaque enregistrement en BD, on ajoute un élément au tableau
		while($data = $req-> fetch()) {
			
			//Version objet
			$article = new Article($data['title'], $data['content'], $data['publishedDate'], $data['author']);
			$articles[] = $article;
			
		}
		
		//Arrêter l'accès à la BD
		$req->closeCursor();

		//On retourne le tableau à UserController
		return $articles;
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

