<?php

Class ASadmin{

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

	
	//FUNCAO PARA BUSCAR OS DADOS E COLOCAR NO CANTO DIREITO 
	public function buscarDados()
	{
		$res = array();
		$cmd = $this->pdo->query("SELECT * FROM tbalimentos");
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}


	//FUNCAO DE CADASTRAR PESSOA NO BANCO DE DADOS
	public function cadastrarPessoa($nome, $assunto, $img, $familiaAlim, $cor)
	{
		//ANTES DE CADASTRAR VERIFICAR SE JA TEM O EMAIL CADASTRADO
		$cmd = $this->pdo->prepare("SELECT id_Alimentos FROM tbalimentos WHERE nome = :n");
		$cmd->bindValue(":n",$nome);
		$cmd->execute();
		if ($cmd->rowCount() > 0)//Se for maior que 0, email já existe 
		{
			return false;
		}else//não foi encontrado o email
		{
			$cmd = $this->pdo->prepare("INSERT INTO tbalimentos (nome, assunto, img, familiaAlim, cor) VALUES (:n, :a, :i, :f, :c)");
			$cmd->bindValue(":n",$nome);
			$cmd->bindValue(":a",$assunto);
			$cmd->bindValue(":i",$img);
			$cmd->bindValue(":f",$familiaAlim);
			$cmd->bindValue(":c",$cor);
			$cmd->execute();
			return true;
		}
	}

	//FUNCAO EXCLUIR Alimentos DO BANCO DE DADOS
	public function excluirPessoa($id)
	{
		$cmd = $this->pdo->prepare("DELETE FROM tbalimentos WHERE id_Alimentos = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();
	}

	//BUSCAR DADOS DE UMA PESSOA
	public function buscarDadosPessoa($id)
	{
		$res = array();
		$cmd = $this->pdo->prepare("SELECT * FROM tbalimentos WHERE id_Alimentos = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}

	//ATUALIZAR DADOS NO BANCO DE DADOS
	public function atualizarDados($id_Alimentos, $nome, $assunto, $img, $familiaAlim, $cor)
	{
		$cmd = $this->pdo->prepare("UPDATE tbalimentos SET nome = :n, assunto = :a, img = :i, familiaAlim = :f, cor = :c WHERE id_Alimentos = :id");
		$cmd->bindValue(":n",$nome);
		$cmd->bindValue(":a",$assunto);
		$cmd->bindValue(":i",$img);
		$cmd->bindValue(":f",$familiaAlim);
		$cmd->bindValue(":c",$cor);
		$cmd->bindValue(":id",$id_Alimentos);
		$cmd->execute();
		
	}

	
}


?>