<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['login'])) {
    $_SESSION['login']="MERDE";
}


?>
<html lang="fr">
  <head>
    <title>LES NANARDS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="png" href="images/theRock.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php">LES<span>NANARDS</span></a>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
	        	<li class="nav-item"><a href="code.php" class="nav-link">Code</a></li>
	        	<li class="nav-item"><a href="competences.php" class="nav-link">Compétences</a></li>
	        	<li class="nav-item"><a href="forum.php" class="nav-link">Forum</a></li>
            <li class='nav-item'><a href='inscrire.php' class='nav-link'>S'inscrire</a></li>
            <li class='nav-item'><a href='connecter.php' class='nav-link'>Se connecter/déconnecter</a></li>
	          <li class="nav-item"><a href="parametre.php" class="nav-link">Panier</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap js-fullheight" style="background-image: url('images/fond.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h1 class="mb-4">Acheter nos codes c'est rigolo c'est les copains.</h1>
            <p><a href="code.php" class="btn btn-primary mr-md-4 py-2 px-4">Acheter<span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>


        <footer class="footer ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
            <h2 class="footer-heading">Les NANARDS</h2>
            <p>Un site fait avec du code <br> qui vend des codes :thinking:</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
              <li class="ftco-animate"><a href="https://twitter.com/enzo_maurand/status/1603336943298813952"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
            <h2 class="footer-heading">Nouveauté</h2>
            <div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(images/home2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Rendre le truc que je fait la</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span>Un jour peut être</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="img mr-4 rounded" style="background-image: url(images/home2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Contrôle de Physique</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Lun. 09, 2022</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
            <h2 class="footer-heading">Liens Rapide</h2>
            <ul class="list-unstyled">
              <li><a href="index.php" class="py-1 d-block">Accueil</a></li>
              <li><a href="code.php" class="py-1 d-block">Code</a></li>
              <li><a href="competences.php" class="py-1 d-block">Compétences</a></li>
              <li><a href="forum.php" class="py-1 d-block">Forum</a></li>
              <li><a href="parametre.php" class="py-1 d-block">Panier</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
            <h2 class="footer-heading">Des Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><a href="https://lyc-les-lombards.monbureaunumerique.fr/"><span class="icon fa fa-map-marker"></span><span class="text">Les Lombards City</span></a></li>
                <li><a href="https://youtu.be/dQw4w9WgXcQ"><span class="icon fa fa-phone"></span><span class="text">0623367566</span></a></li>
                <li><a href="https://mail.google.com/"><span class="icon fa fa-paper-plane"></span><span class="text">admin@admin.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">

            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <!--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>