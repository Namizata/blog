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
      <a class="navbar-brand" href="#">DECONEXION</a>
    </div>
  </nav>

  <?php

    if ($_POST['login'] == "pmaster" AND  $_POST['password'] ==  "papagayo" ) // Si le login et mot de passe sont bons
    {
   
    ?>
  <?php 
    }
    else // Sinon, on redirige vers la page d'administration
    {
        echo '<p>Mot de passe incorrect</p>';
    }
  ?>


  <header class="masthead" >
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
          </div>
        </div>
      </div>
 </section>




</body>