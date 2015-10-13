<?php

class News{

	private $selectAll;
	private $addNews;

	public function __construct($db){

		$this->selectAll=$db->prepare("SELECT * FROM news");
		$this->addNews=$db->prepare("INSERT INTO news(titreNews,soustitreNews,contenuNews)values(:titreNews,:soustitreNews,:contenuNews)");

	}

	public function selectAll(){

		$this->selectAll->execute();
		return $this->selectAll->FetchAll();
	}
	public function addNews($titreNews,$soustitreNews,$contenuNews){

		$this->addNews->execute(array(':titreNews'=>$titreNews,'soustitreNews'=>$soustitreNews,'contenuNews'=>$contenuNews));
		return $this->addNews->rowCount();
	}
}

?>
