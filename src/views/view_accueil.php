<?php
function viewAccueil($db){
  menu();
  // Users
  $users = new Users($db);
      $nbUsers = 0;
      $listeUsers = $users->selectAll();

      foreach($listeUsers as $unUser){
      $nbUsers = $nbUsers +1;
      }
  // Fin users

  // Début news
  $news = new News($db);
      $nbNews = 0;
      $listeNews = $news->selectAll();

      foreach($listeNews as $uneNews){
      $nbNews= $nbNews +1;
      }

   // Fin news

   // Début profs
   $profs = new Profs($db);
      $nbProfsABS = 0;
      $listeProfs = $profs->selectAll();

      foreach($listeProfs as $unProf){
      $nbProfsABS = $nbProfsABS +1;
      }

   // Fin profs
echo'
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  ';
                                  echo $nbUsers;
                              echo'</h1>
                              <p>Utilisateurs</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  ';
                               echo $nbNews;
                               echo'
                              </h1>
                              <p>Actualités en ligne</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>Téléchargement de l\'application</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  ';
                                  echo $nbProfsABS;
                                  echo'
                              </h1>
                              <p>Professeurs absents</p>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->


              <div class="row">
                  <div class="col-lg-8">
                      <!--latest product info start-->

                      <!--latest product info end-->
                      <!--twitter feedback start-->
                      <section class="panel post-wrap pro-box">
                          <aside class="post-highlight terques v-align">
                              <div class="panel-body">
                             ';
                              twitter();
                                  echo'
                              </div>
                          </aside>
                          <aside>
                              <div class="post-info">
                                  <span class="arrow-pro left"></span>
                                  <div class="panel-body">
                                      <div class="text-center twite">
                                          <h1>Dernier tweet du Lycée Guy Mollet</h1>
                                      </div>

                                      <footer class="social-footer">
                                          <ul>
                                              <li>
                                                  <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                  </a>
                                              </li>
                                              <li class="active">
                                                  <a href="#">
                                                      <i class="fa fa-twitter"></i>
                                                  </a>
                                              </li>

                                          </ul>
                                      </footer>
                                  </div>
                              </div>
                          </aside>
                      </section>
                      <!--twitter feedback end-->
                  </div>
                  <div class="col-lg-4">

                      <!--weather statement start-->
                      <section class="panel">
                          <div class="weather-bg">
                              <div class="panel-body">
                                  <div class="row">
                                      <div class="col-xs-6">
                                        <i class="fa fa-cloud"></i>
                                          Arras
                                      </div>
                                      <div class="col-xs-6">
                                          <div class="degree">';
                                            echo $_COOKIE["Cookie_Temperature"];

                                          echo'</div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <footer class="weather-category">
                              <ul>
                                  <li class="active">
                                      <h5>humidité</h5>
                                      ';
                                      echo $_COOKIE["Cookie_Humidite"];

                                      echo'%
                                  </li>
                                  <li>
                                      <h5>precipitation</h5>
                                      ';
                                      echo $_COOKIE["Cookie_Precip"];
                                      echo'
                                      %
                                  </li>
                                  <li>
                                      <h5>vent</h5>
                                      ';
                                      echo $_COOKIE["Cookie_Vent"];
                                      echo'
                                  </li>
                              </ul>
                          </footer>

                      </section>
                      <!--weather statement end-->
                  </div>
              </div>

          </section>
      </section>
      <!--main content end-->
  </section>';
}
?>
