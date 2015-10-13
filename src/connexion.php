<?php 
	function connect(){
		try{
			$db= new PDO('mysql:host=31.170.160.91;dbname=a1567653_lgm;charset=UTF8','a1567653_lgm','btsinfo62');
		}
		catch(Exception $e){
			echo 'Echec:' .$e->getMessage();
			$db=NULL;
		}
		return $db;
	}
?>