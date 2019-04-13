<?php
require('controllers/ArticleController.php');


//Analyser l'url
if (isset($_GET['page']) && !empty($_GET['page'])) {
  
  $page = $_GET['page'];  //www.alexandremartin.com?page=listAllPosts
  
} else {
  
  $page = 'home'; //www.alexandremartin.com
  
}

//Rediriger
if ($page === 'home') {
  
  $articleController = new ArticleController();
  $articleController->listArticles();
  
} 
