<?php

class Profs{

	private $selectAll;

	public function __construct($db){

		$this->selectAll=$db->prepare("SELECT * FROM profABS");


	}

	public function selectAll(){

		$this->selectAll->execute();
		return $this->selectAll->FetchAll();
	}

}

?>
