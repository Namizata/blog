<?php

require('./models/ArticleRepository.php');
require('./models/CommentRepository.php');

class ArticleController {
	
	function listArticles() {
		
		//Communiquer avec la BD
		$articleRepo = new ArticleRepository();
		$articles = $articleRepo->getArticles();
		
		//Charger la vue
		require('./views/home.php');
		
	}
	
	function addArticle() {
		
		$articleRepo = new ArticleRepository();
		$articleRepo->addArticle();
		$articles = $articleRepo->getArticles();
		
		require('./views/home.php');
		
	}

	function getDetail() {
		$articleRepo = new ArticleRepository();
		$article = $articleRepo->getArticle();

		$commentRepo = new CommentRepository();
		$comments = $commentRepo->getComments();

		require('./views/detail.php');
	}
}

