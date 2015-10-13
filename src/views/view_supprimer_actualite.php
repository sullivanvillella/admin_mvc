<?php
	function viewSuppimerActualite($db){
		menu();
		$news=new News($db);
		$result=$news->selectAll();
		echo'
		 <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Les actualités
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Outils<i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Imprimer</a></li>
                                      <li><a href="#">Sauvegarder en tant que PDF</a></li>
                                      <li><a href="#">Exporter vers Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="space15"></div>
                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <thead>
                              <tr>
                                  <th>Nom de l\'actualité</th>
                                  <th>Sous titre</th>
                                  <th>Texte</th>
                                  <th>Image</th>
                                  <th>Editer</th>
                                  <th>Supprimer</th>
                              </tr>
                              </thead>
                              ';
                                  foreach($result as $unResult){
                                  	echo'
									<tbody>
                              			<tr class="">
                                  			<td>';
												echo $unResult['titreNews'];
										echo'</td>
											 <td>';
											 	echo $unResult['soustitreNews'];
											 echo'</td>
											  <td>';
											 	echo $unResult['contenuNews'];
											 echo'</td>
											  <td>';
											 	echo $unResult['imgNews'];
											 echo'</td>
											 <td><a class="edit" href="javascript:;">Editer</a></td>
                                  <td><a class="delete" href="javascript:;">Supprimer</a></td>
                              </tr>
											 ';
								  }
                                  echo'
                              </tbody>
                          </table>
                      </div>
                  </div>
              </section>
              <!-- page end-->
          </section>
      </section>
		';
	}
?>
