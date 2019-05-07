<?php
session_start()
?>
<?php
require('controllers/ArticleController.php');
require('controllers/UserController.php');

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

else if ($page === 'admin') {
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['password'] = $_POST['password'];

  $userController = new UserController();
  $userController->connect();
}

else if ($page === 'logout') {
  	unset($_SESSION['login']);
    unset($_SESSION['password']);
        require_once('./Login.php');

}

else if ($page ==='addArticle'){	
	$_SESSION['titre'] = $_POST['titre'];
	$_SESSION['content'] = $_POST['content'];

  $articleController = new ArticleController();
  $articleController->addArticle();
}

else if ($page ==='detail'){
    $_SESSION['id'] = $_GET['id'];	

  $articleController = new ArticleController();
  $articleController ->getDetail();
}
