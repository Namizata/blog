<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jean Forteroche - le blog</title>

  <!-- Bootstrap core CSS -->
  <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="./css/clean-blog.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">ACCUEIL</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">BIOGRAPHIE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">ROMANS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">EPISODES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-alaska.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Billet simple pour l'alaska</h1>
            <span class="subheading">Un thriller qui vous plonge dans l'univers trépidant de John 0'Connor.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

            <div class="post-preview">
              <h1 class="post-title"> <?= $article-> getTitle(); ?> 
              </h1>
              <p class="post-meta"> Rédigé par <?= $article-> getAuthor(); ?> le
               <?= $article-> getPublishedDate(); ?> </p>
              <h3 class="post-meta"> <?= $article-> getContent(); ?> 
              </h3>
              <br>
            </div>
            <div>
              <p><b>COMMENTAIRES</b></p>
              <form method="post" action="index.php?page=addComment">
               <div class="form-group">
                <label for="commentAuthorPseudo">Pseudo</label>
                <input type="text" class="form-control" name= "commentAuthorPseudo" id="commentAuthorPseudo" placeholder="Entrez votre pseudo">
               </div>
               <div class="form-group">
                <label for="commentArea">Commentaire</label>
                <textarea class="form-control" name="commentArea" id="commentArea" rows="3" placeholder="saisissez votre commentaire"></textarea>
               </div>
               <button type="submit" class="btn btn-secondary">Soumettre</button>
              </form>
            </div>
              <br>
              <br>
            <div>
              <h4 class="post-subtitle">TOUS LES COMMENTAIRES</h4>
              <?php foreach ($comments as $comment) { ?>
              <p class="post-meta"> Rédigé par <?= $comment-> getAuthor(); ?> le
               <?= $comment-> getPublishedDate(); ?> </p>
              <h3 class="post-subtitle"> <?= $comment-> getContent(); ?> 
              </h3>
              <br>
              <br>
            </div>
            <?php } ?>
              <!--<p class="post-meta"> Rédigé par <?= $comment-> getAuthor(); ?> le
               <?= $comment-> getPublishedDate(); ?> </p>
              <h3 class="post-subtitle"> <?= $comment-> getContent(); ?> 
              </h3> -->

            </div>
            <br>
            <br>

            <!--s
               <form method="post" action="">
                <p>Votre pseudo</p>
                <input type="text" name="author" placeholder="pseudo">
                <br>
                <p>Votre commentaire</p>
                <textarea rows="3" cols="60" name="content" placeholder="saisissez votre commentaire"></textarea>
                <br>
                <input type="submit" value="soumettre" >
               </form> -->
       

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="index.php">Retour à la page d'accueil &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="text-center">
            <a  href="login.php"> ESPACE ADMINISTRATION </a>
          </p>
          <p class="copyright text-muted">Tout droits réservés &copy; Jean Forteroche - le blog 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="./vendor/jquery/jquery.min.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./js/clean-blog.min.js"></script>

</body>

</html>
