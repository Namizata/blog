<?php


class UserRepository extends Connect {
	
	function connect()
	{
		//Accéder à la BD
		$db = $this->getDb();

		//Préparer la requête
		$req = $db->prepare('SELECT COUNT(*) FROM user WHERE username=:username AND password=:password');
		$req->bindParam(':username', $_SESSION['login'], \PDO::PARAM_STR);
		$req->bindParam(':password', $_SESSION['password'], \PDO::PARAM_STR);
		$req->execute();//Exécuter la requête
		
		$userExists=$req-> fetch();
		
		//Arrêter l'accès à la BD
		$req->closeCursor();

		//On retourne les données à UserController
		return $userExists;
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