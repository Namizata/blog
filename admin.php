<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jean Forteroche - ADMINISTRATION</title>

  <!-- Bootstrap core CSS -->
  <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- polices -->
  <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- feuille de style css-->
  <link href="./css/clean-blog.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="./index.php?page=logout">DECONNEXION</a>
    </div>
  </nav>



  <header class="masthead">
    <div class="overlay"></div>
      <div class="container">
         <div class="site-heading">
              <h1>PANNEAU D'ADMINISTRATION - BLOG J.F</h1>
         </div>
      </div>
  </header>

 <section class="content-section text-center" id="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
        			<h2>ARTICLES PUBLIÉS</h2>
              <?php foreach ($articles as $article) { ?>
            <div class="post-preview">
              <h1 class="post-title"> <?= $article-> getTitle(); ?> 
              </h1>
              <p class="post-meta">Rédigé par <?= $article-> getAuthor(); ?> le
               <?= $article-> getPublishedDate(); ?> </p>
              <!--<h3 class="post-subtitle"> <?= $article-> getContent(); ?> 
              </h3> -->
              <h5 class="post-meta"> <?= $article-> getSummary() ; ?> 
              </h5>
              <a href="post.html"> Lire la suite</a>
              <br>
              <br>
            </div>
        <?php } ?>
          </div>
          <div>
            <h2> Ajouter un article</h2>
            <form class="" method="post" action="index.php?page=addArticle" >
                <div class="form-group">
                  <label for="text">Titre</label>
                  <input type="text" name="titre" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="text">Contenu</label>
                  <textarea rows="10" cols="50"> </textarea>
                </div>
                <input type="submit" name="content" value="ajouter article">
            </form>
          </div>
        </div>
      </div>
 </section>
 <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
 <script>tinymce.init({selector:'textarea'});</script>



</body>