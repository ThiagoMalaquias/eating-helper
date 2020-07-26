<?php

Class MV{

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
		$cmd = $this->pdo->query("SELECT * FROM tbmv ORDER BY id_MitoVdd Desc LIMIT 12");
		if (isset($_GET['page'])) {
                $url = $_GET['page'];
                $mody = $url*12 - 12;
                $cmd = $this->pdo->query("SELECT * FROM tbmv ORDER BY id_MitoVdd Desc LIMIT 12 OFFSET $mody "); 
            }
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}


	//FUNCAO DE CADASTRAR PESSOA NO BANCO DE DADOS
	public function cadastrarPessoa($assunto, $mito_vdd, $contexto)
	{
		//ANTES DE CADASTRAR VERIFICAR SE JA TEM CADASTRADO
		$cmd = $this->pdo->prepare("SELECT id_MitoVdd FROM tbmv WHERE Assunto = :a");
		$cmd->bindValue(":a",$assunto);
		$cmd->execute();
		if ($cmd->rowCount() > 0)//Se for maior que 0, email já existe 
		{
			return false;
		}else//não foi encontrado o email
		{
			$cmd = $this->pdo->prepare("INSERT INTO tbmv (Assunto, Mito_Vdd, Contexto) VALUES (:a, :mv, :c)");
			$cmd->bindValue(":a",$assunto);
			$cmd->bindValue(":mv",$mito_vdd);
			$cmd->bindValue(":c",$contexto);
			$cmd->execute();
			return true;
		}
	}

	//FUNCAO EXCLUIR Alimentos DO BANCO DE DADOS
	public function excluirPessoa($id)
	{
		$cmd = $this->pdo->prepare("DELETE FROM tbmv WHERE id_MitoVdd = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();
	}

	//BUSCAR DADOS DE UMA PESSOA
	public function buscarDadosPessoa($id)
	{
		$res = array();
		$cmd = $this->pdo->prepare("SELECT * FROM tbmv WHERE id_MitoVdd = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();
		$res = $cmd->fetch(PDO::FETCH_ASSOC);
		return $res;
	}

	//ATUALIZAR DADOS NO BANCO DE DADOS
	public function atualizarDados($id_MitoVdd, $assunto, $mito_vdd, $contexto)
	{
		$cmd = $this->pdo->prepare("UPDATE tbmv SET Assunto = :a, Mito_Vdd = :mv, Contexto = :c WHERE id_MitoVdd = :id");
		$cmd->bindValue(":a",$assunto);
		$cmd->bindValue(":mv",$mito_vdd);
		$cmd->bindValue(":c",$contexto);
		$cmd->bindValue(":id",$id_MitoVdd);
		$cmd->execute();
		
	}

	
}


?>