<?php

Class PMA{

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
		$cmd = $this->pdo->query("SELECT * FROM tbdoencas ORDER BY id_doenca DESC");
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}


	public function cadastrarPessoa($nome, $contexto, $texto)
	{
		//ANTES DE CADASTRAR VERIFICAR SE JA TEM O EMAIL CADASTRADO
		$cmd = $this->pdo->prepare("SELECT id_doenca FROM tbdoencas WHERE nome = :n");
		$cmd->bindValue(":n",$nome);
		$cmd->execute();
		if ($cmd->rowCount() > 0)//Se for maior que 0, email já existe 
		{
			return false;
		}else//não foi encontrado o email
		{
			$cmd = $this->pdo->prepare("INSERT INTO tbdoencas (nome, contexto, texto) VALUES (:n, :c, :i)");
			$cmd->bindValue(":n",$nome);
			$cmd->bindValue(":c",$contexto);
			$cmd->bindValue(":i",$texto);
			$cmd->execute();
			return true;
		}
	}

	//FUNCAO EXCLUIR problemas na má alimentaçao DO BANCO DE DADOS
	public function excluirPessoa($id)
	{
		$cmd = $this->pdo->prepare("DELETE FROM tbdoencas WHERE id_doenca = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();
	}

	//BUSCAR DADOS DE UM problema
	public function buscarDadosPessoa($id)
	{
		$res = array();
		$cmd = $this->pdo->prepare("SELECT * FROM tbdoencas WHERE id_doenca = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}

	//ATUALIZAR DADOS NO BANCO DE DADOS
	public function atualizarDados($id_doenca, $nome, $contexto, $texto)
	{
		$cmd = $this->pdo->prepare("UPDATE tbdoencas SET nome = :n, contexto = :c, texto = :i WHERE id_doenca = :id");
		$cmd->bindValue(":n",$nome);
		$cmd->bindValue(":c",$contexto);
		$cmd->bindValue(":i",$texto);
		$cmd->bindValue(":id",$id_doenca);
		$cmd->execute();
		
	}

	

	

}


?>