<?php

require('./models/ArticleRepository.php');

class ArticleController {
	
	function listArticles() {
		
		//Communiquer avec la BD
		$articleRepo = new ArticleRepository();
		$articles = $articleRepo->getArticles();
		
		//Charger la vue
		require('./views/home.php');
		
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
