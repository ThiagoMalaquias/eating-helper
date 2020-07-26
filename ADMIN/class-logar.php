<?php

Class Login{

	private $pdo;
	public $msgErro = "";
	//2 funcoes
	//CONEXAO COM O BANCO DE DADOS
	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		global $msgErro;
		try {

			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha,array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
				PDO::ATTR_PERSISTENT => false,
				PDO::ATTR_EMULATE_PREPARES => false,
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
			));
			
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
		
	}


	public function logar($email, $senha)
	{
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim
		$sql = $pdo->prepare("SELECT id_adm FROM tbadm WHERE email = :e AND senha = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",$senha);
		$sql->execute();
		if ($sql->rowCount() > 0)
		{
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_adm'] = $dado['id_adm'];
			return true; //logado com sucesso
		}
		else
		{
			return false;//não conseguiu loga
		}

		//entrar no sistema(sessao)
	}

}

