<?php

	try{
		$pdo = new PDO("mysql: host=127.0.0.;dbname=bd_site","root","");
	} catch(PDOException $e){
		echo "ERROR: " .$e->getMessage();
	}

?>