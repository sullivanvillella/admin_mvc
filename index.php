<?php

   session_start();
   // if(isset($_SESSION['login'])){
   // echo'vous êtes connecter';
   //}else
   //{
   //echo'pas connecter';
   //}
   require_once 'src/connexion.php';
   require_once 'src/presentation.php';
   meteo_temperature();
   meteo_humidite();
   meteo_precipitation();
   meteo_vent();
   require_once 'src/listePages.php';
   require_once 'src/views/view_accueil.php';
   require_once 'src/views/view_ajouter_actualite.php';
   require_once 'src/views/view_supprimer_actualite.php';
   require_once 'src/views/view_conference.php';
   require_once 'src/class/class_users.php';
   require_once 'src/class/class_news.php';
   require_once 'src/class/class_profs.php';
   require_once 'lib/autoload.php';
   require_once 'lib/twitteroauth/twitteroauth.php';
   //require_once 'lib/src/twitteroauth.php';


   entete();

   $db=connect();

   if($db!=NULL){
      $contenu=getPage();
      $contenu($db);
      }






?>
