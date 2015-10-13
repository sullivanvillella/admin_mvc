<?php
	function connect(){
		try{
			$db= new PDO('mysql:host=localhost;dbname=bddSioServices;charset=UTF8','root','root');
		}
		catch(Exception $e){
			echo 'Echec:' .$e->getMessage();
			$db=NULL;
		}
		return $db;
	}
?>
