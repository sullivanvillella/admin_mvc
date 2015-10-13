<?php

class Users{

	private $selectAll;

	public function __construct($db){

		$this->selectAll=$db->prepare("SELECT * FROM users");


	}

	public function selectAll(){

		$this->selectAll->execute();
		return $this->selectAll->FetchAll();
	}

}

?>
