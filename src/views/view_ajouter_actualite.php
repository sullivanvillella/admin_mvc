<?php
	function viewAjoutActualite($db){
	menu();
	echo'
<section id="main-content">
    <section class="wrapper">
	  <div class="row">';
    if(!isset($_POST['btEnvoyer'])){
     echo' <form method="POST">
                          <div class="col-lg-12">
                              <section class="panel">
                              <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Titre</label>
                                      <div class="col-sm-10">
                                          <input type="text" id="titreNews" name="titreNews" class="form-control">
                                      </div>
                                  </div>
                           </div>
                           <div class="col-lg-12">
                              <section class="panel">
                              <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Descriptif</label>
                                      <div class="col-sm-10">
                                          <input type="text" id="soustitreNews" name="soustitreNews" class="form-control">
                                      </div>
                                  </div>
                           </div>
                           <div class="col-lg-12">
                                  <div class="panel-body">
                                      <div class="form">
                                              <div class="form-group">
                                                  <label class="col-sm-2 control-label col-sm-2">Texte</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" id="contenuNews" name="contenuNews" rows="6"></textarea>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>

                            <div class="row">
                            	<div class="col-lg-12">
                            		<div class="panel-body">
                                  <input type="submit" id="btEnvoyer" name="btEnvoyer" class="btn btn-danger"></input>
                                 </div>
                            	</div>
                            </div>
                             </section>
                          </div>
                          </form>
                      </div>
        </section>
</section>
    ';
  }
    else{
      $titreNews=$_POST['titreNews'];
      $soustitreNews=$_POST['soustitreNews'];
      $contenuNews=$_POST['contenuNews'];
      //var_dump($_POST);
      $titreNews=htmlentities($titreNews,ENT_QUOTES,"UTF-8");
      $soustitreNews=htmlentities($soustitreNews,ENT_QUOTES,"UTF-8");
      $contenuNews=htmlentities($contenuNews,ENT_QUOTES,"UTF-8");
      $news=new News($db);
      $result=$news->addNews($titreNews,$soustitreNews,$contenuNews);
      if($result=!1){

        echo 'Erreur';

      }
      else{

        echo'
        <div class="col-lg-12">
          <button type="button" class="btn btn-success">Ajout effectué avec succès.</button>
          <a href="index.php?page=ajouter_actualite"> Ajouter une autre actualité </a>
        </div>
        ';

      }
    }
	}
?>
