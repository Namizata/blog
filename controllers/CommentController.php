<?php

//require('./models/CommentRepository.php');

class CommentController {
	
	function listComments() {
		
		//Communiquer avec la BD
		$commentRepo = new CommentRepository();
		$comments = $commentRepo->getComments();
		
		//Charger la vue
		require('./views/detail.php');
		
	}
	
	function addComment() {
		
		$commentRepo = new CommentRepository();
		$commentRepo->addComment();
		
		$comments = $commentRepo->getComments();

		$articleRepo = new ArticleRepository();
		$article = $articleRepo->getArticle();
		
		require('./views/detail.php');
		
	}

	
	
}
