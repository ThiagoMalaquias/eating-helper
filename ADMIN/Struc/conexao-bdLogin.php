<?php
	//http://php.net/manual/pt_BR/book.pdo.php

	//CONEXÃO COM BANCO DE DADOS
	$servidor = "localhost";
	$usuario= "root";
	$senha= "";
	$banco= "bd_site";
	
	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha,array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
		PDO::ATTR_PERSISTENT => false,
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	));
?>