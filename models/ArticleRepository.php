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
			$article = new Article($data['title'], $data['content'], $data['publishedDate'], $data['author'], $data['id']);
			$articles[] = $article;
			
		}
		
		//Arrêter l'accès à la BD
		$req->closeCursor();

		//On retourne le tableau à UserController
		return $articles;
	}


function getArticle()
	{
		//Accéder à la BD
		$db = $this->getDb();

		//Préparer la requête
		var_dump($_SESSION['id']);
		$req = $db->prepare('SELECT * FROM post WHERE id=:id');
		$req->bindParam(':id', $_SESSION['id'], \PDO::PARAM_STR);
		
		//Exécuter la requête
		$req->execute();
		
			$article;
		
		//Pour chaque enregistrement en BD, on ajoute un élément au tableau
		while($data = $req-> fetch()) {
			
			//Version objet
			$article = new Article($data['title'], $data['content'], $data['publishedDate'], $data['author'], $data['id']);
			
		}
		
		//Arrêter l'accès à la BD
		$req->closeCursor();

		//On retourne le tableau à UserController
		return $article;
	}

	
	function addArticle()

	{
		$db = $this->getDb();

		$req = $db->prepare('INSERT INTO post (title, author, publishedDate, content) VALUES(:title, 1, now(), :content)');
		$req->bindParam(':title', $_SESSION['titre'], \PDO::PARAM_STR);
		$req->bindParam(':content', $_SESSION['content'], \PDO::PARAM_STR);
		$req->execute();
		
	}
	
}

