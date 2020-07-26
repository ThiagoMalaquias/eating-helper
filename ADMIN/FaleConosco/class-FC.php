<?php

Class FC{

	private $pdo;
	//6 funcoes
	//CONEXAO COM O BANCO DE DADOS
	public function __construct($dbname, $host, $user, $senha)
	{
		try
		{
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha,array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
		PDO::ATTR_PERSISTENT => false,
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	));
		}
		catch (PDOException $e) {
			echo "Erro com banco de dados".$e->getMessage();
			exit();
		}
		catch(Exception $e){
			echo "Erro generico".$e->getMessage();
			exit();
		}
	}

	//FUNCAO DE COMNETARIOS NO BANCO DE DADOS
	public function cadastrarComentario($nome, $email, $assunto, $comentario)
	{
		$cmd = $this->pdo->prepare("INSERT INTO tbfaleconosco (nome, email, assunto, comentario) VALUES (:n, :e, :s, :i)");
		$cmd->bindValue(":n",$nome);
		$cmd->bindValue(":e",$email);
		$cmd->bindValue(":s",$assunto);
		$cmd->bindValue(":i",$comentario);
		$cmd->execute();
		return true;	
	}

	//FUNCAO PARA BUSCAR OS DADOS 
	public function buscarDados()
	{
		$res = array();
		$cmd = $this->pdo->query("SELECT * FROM tbfaleconosco ORDER BY id_fale Desc");
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}

	//FUNCAO EXCLUIR COMENTARIOS DO BANCO DE DADOS
	public function excluirPessoa($id)
	{
		$cmd = $this->pdo->prepare("DELETE FROM tbfaleconosco WHERE id_fale = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();
	}

	

}


?>