 
<?php

require('./models/UserRepository.php');

class UserController {
	
	function connect() {
		
		//Communiquer avec la BD
		$userRepo = new UserRepository();
		$userExists = $userRepo->connect();

		$articleRepo = new ArticleRepository();
		$articles = $articleRepo->getArticles();
		
	if ($userExists) {
		require('./admin.php');
	}
	else 
		require('./Login.php');

	
		//Charger la vue
	
		//require('./views/home.php');
		
	}
	/*
	function addUser() {
		
		$userRepo = new UserRepository();
		$userRepo->addUser();
		
		$users = $userRepo->getUsers();
		
		require('../view/home.php');
		
	}
	*/
	
	
}