<?php
function entete(){
	echo'
	<!DOCTYPE html>
		<html lang="en">
  			<head>
    			<meta charset="utf-8">
    			<meta name="viewport" content="width=device-width, initial-scale=1.0">
    			<meta name="description" content="">
    			<meta name="author" content="Mosaddek">
    			<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    			<link rel="shortcut icon" href="img/favicon.png">

    			<title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

  			  <!-- Bootstrap core CSS -->
    			<link href="css/bootstrap.min.css" rel="stylesheet">
    			<link href="css/bootstrap-reset.css" rel="stylesheet">
    		  <!--external css-->
    		  <link href="src/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    		  <link href="src/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
   			  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
   			 <!-- Custom styles for this template -->
   				 <link href="css/style.css" rel="stylesheet">
   				 <link href="css/style-responsive.css" rel="stylesheet" />

   	 		<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    			<!--[if lt IE 9]>
      				<script src="js/html5shiv.js"></script>
      				<script src="js/respond.min.js"></script>
    			<![endif]-->

    		<!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="src/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>
    <script type="text/javascript" src="src/assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="src/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $(\'select.styled\').customSelect();
      });

  </script>
  			</head>
	';
}

function menu(){
  echo'<section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo">Lycée<span> Guy Mollet</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">Jhon Doue</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="index.php?page=accueil">
                          <i class="fa fa-dashboard"></i>
                          <span>Accueil</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Actualité</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=ajouter_actualite">Ajouter</a></li>
                          <li><a  href="index.php?page=supprimer_actualite">Editer ou Supprimer</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Professeur absent</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">Ajouter</a></li>
                          <li><a  href="buttons.html">Supprimer</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Galeries</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids.html">Ajouter des photos</a></li>
                          <li><a  href="grids.html">Supprimer des photos</a></li>
                          <li><a  href="calendar.html">Ajouter des vidéos</a></li>
                          <li><a  href="grids.html">Supprimer des vidéos</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Utilisateurs</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">Ajouter</a></li>
                          <li><a  href="buttons.html">Supprimer</a></li>
                          <li><a  href="buttons.html">Gestion des droits</a></li>
                      </ul>
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Conférence</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="index.php?page=view_conference">Lancer le live</a></li>
                          <li><a  href="buttons.html">Planning</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->';
}
function Duree_Cookie(){
  $datetime = date('H');
  $destruction = $datetime-24;
  $seconde = 3600;
  $finale=$destruction*$seconde;
}
function meteo_temperature(){

  // Récuperation du code source d'une page //
  $ch = curl_init();
  curl_setopt ($ch, CURLOPT_URL, 'http://www.meteocity.com/france/arras_v62041/');
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

  $file_contents = curl_exec($ch);
  curl_close($ch);
  // Fin récuperation //

  // découpage du code source en fonction d'un texte //
  $pizza  = $file_contents;
  $pieces = explode("class=\"dataTempCelsius\">", $pizza);

  $resultat = $pieces[1];
  $result = explode("ressentie",$resultat);
  $valeur = $result[0];
  if(!isset($_COOKIE["Cookie_Temperature"])){
  setcookie("Cookie_Temperature", $valeur, time()+3600);
} // Fin découpe + stock du resultat dans $result //
}

function meteo_humidite(){
  // Récuperation du code source d'une page //
  $ch = curl_init();
  curl_setopt ($ch, CURLOPT_URL, 'http://www.meteocity.com/france/arras_v62041/');
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

  $file_contents = curl_exec($ch);
  curl_close($ch);
  // Fin récuperation //

  // découpage du code source en fonction d'un texte //
  $pizza  = $file_contents;
  $pieces = explode("Humidité maximum: <strong>", $pizza);


  $resultat = $pieces[1];
  $result = explode("%",$resultat);
  // Fin découpe + stock du resultat dans $result //
   $valeur_humidite = $result[0];
   if(!isset($_COOKIE["Cookie_Humidite"])){
  setcookie("Cookie_Humidite", $valeur_humidite, time()+3600);
}
}

function meteo_precipitation(){
  // Récuperation du code source d'une page //
  $ch = curl_init();
  curl_setopt ($ch, CURLOPT_URL, 'http://www.meteocity.com/france/arras_v62041/');
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

  $file_contents = curl_exec($ch);
  curl_close($ch);
  // Fin récuperation //

  // découpage du code source en fonction d'un texte //
  $pizza  = $file_contents;
  $pieces = explode("précipitations:", $pizza);


  $resultat = $pieces[1];
  $result = explode("%",$resultat);
  // Fin découpe + stock du resultat dans $result //
   $valeur_precip = $result[0];
   if(!isset($_COOKIE["Cookie_Precip"])){
   setcookie("Cookie_Precip", $valeur_precip, time()+3600);
 }
}

function meteo_vent(){
  // Récuperation du code source d'une page //
  $ch = curl_init();
  curl_setopt ($ch, CURLOPT_URL, 'http://www.meteocity.com/france/arras_v62041/');
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

  $file_contents = curl_exec($ch);
  curl_close($ch);
  // Fin récuperation //

  // découpage du code source en fonction d'un texte //
  $pizza  = $file_contents;
  $pieces = explode("km/h", $pizza);


  $resultat = $pieces[1];
  $result = explode(" ",$resultat);
  // Fin découpe + stock du resultat dans $result //
   $valeur_vent = $result[1];
   if(!isset($_COOKIE["Cookie_Vent"])){
   setcookie("Cookie_Vent", $valeur_vent, time()+3600);
 }
}
function twitter(){

  // On définit les clés privés fournis par Twitter //
  $consumer_key='0mnVuBM5L9RtM97nWry8uSe3N'; //Clé de l'application
  $consumer_secret='9OdPl96t1LjA1RLWxjF6KotbdAGcqxTpW5rXuZdU7KSwUAcddL'; // Clé secrete application
  $oauth_token = '3652666575-ezW5piI8N3T6gwfR70p7yP9IVKK09YLVoyW65zs'; //Token authentication
  $oauth_token_secret = '2CfObptuwU2STrKY3tti01f51UoEDJKlvwOQEnQPVwRKx'; //Token secret

  // Création de la connexion à twitter //
  $connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
  $query = 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=SIO_SERVICES&count=1'; //Requete API Twitter
  $content = $connection->get($query); // execution requete
  if(!empty($content))
    {
      // Pour chaque resultat , affiche text //
      foreach($content as $tweet){
        echo $tweet->text;
      }
    }
}


?>
