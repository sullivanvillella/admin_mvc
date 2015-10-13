<?php

	function getPage(){

		$lesPages['accueil'] = "viewAccueil";
		$lesPages['ajouter_actualite'] = "viewAjoutActualite";
		$lesPages['supprimer_actualite'] = "viewSuppimerActualite";
		$lesPages['view_conference'] = "viewConference";
		if(isset($_GET['page'])){

			$page=$_GET['page'];

		}else{

			$page="accueil";

		}

		if(isset($lesPages[$page])){

			$contenu=$lesPages[$page];

		}else{

			$contenu=$lesPages['accueil'];

		}

		return $contenu;
	}

?>
