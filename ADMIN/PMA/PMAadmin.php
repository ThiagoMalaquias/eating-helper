<?php 

session_start();
if(!isset($_SESSION['id_adm']))
{
  header("location: /nutri_tcc/admin/");
  exit;
}

include("../Struc/head.php"); 
include("../Struc/Menu_admin.php");
require_once 'class-PMA.php';
require_once '../class-logar.php';


$p = new PMA("bd_site","localhost","root","");

// INSERIR DADOS NO BANCO

if (isset($_POST['nome'])) 
      {
        $nome = addslashes($_POST['nome']);
        $contexto = addslashes($_POST['contexto']);
        $texto = addslashes($_POST['texto']);

        if (!empty($nome) && !empty($contexto) && !empty($texto))
        {
          if(!$p->cadastrarPessoa($nome, $contexto, $texto))
          {
            echo ("<script>
              window.alert('Esse cadastro já existe!!!');
              window.location.href='/nutri_tcc/admin/PMA/PMAadmin.php';     
              </script>"
            ); 
          }
        }
        else
        {
          echo ("<script>
            window.alert('Preencha todos os campos!!!');
            window.location.href='/nutri_tcc/admin/PMA/PMAadmin.php';     
            </script>"
          ); 
        }
        echo "<script>
        window.location.href='/nutri_tcc/admin/PMA/PMAadmin.php';     
        </script>";
      }


?>

<div class="container-fluid titulo-PMA">
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
    <br>
    <h1>Problemas da Má Alimentação</h1>
    <br>
  </div>
</div>

<div class="container-fluid">
  <br>
  <div class="tabpanel">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="nav-item">
        <a href="#as" class="nav-link active" style="font-size:15pt;color: #797777;" aria-controls="adm" data-toggle="tab" role="tab">Doenças</a> 
      </li>
      <li role="presentation" class="nav-item">
        <a href="#cds" class="nav-link" style="font-size:15pt;color: #797777;" aria-controls="normalUser" data-toggle="tab" role="tab">Cadastrar</a>
      </li>
    </ul>
    <div class="tab-content">
      <div role="tab-panel" class="tab-pane active container" id="as">
        <br><br>
        <div class="mv">

          <?php $dados = $p->buscarDados();?>
          <?php foreach ($dados as $doenca) :?>

            <a href="" data-toggle="modal" data-target="#PMA<?= $doenca["id_doenca"];?>">
              <div class="card card-PMA pma1">
                <div class="card-body">
                  <h5 class="card-title" style="text-transform: uppercase;"><?= $doenca["nome"]; ?></h5>
                  <p class="card-text" style=" text-indent: 40px;"><?=$doenca["contexto"]; ?></p>
                </div>
              </div>
            </a> 

            <!-- Modal -->
            <div class="modal fade" id="PMA<?= $doenca["id_doenca"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #0b5a5a; color: #f19005;">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $doenca["nome"]; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <div class="modal-body text-justify p-MV2"><?= $doenca["texto"];?></div>
                    <div class="modal-footer">
                      <a href="/nutri_tcc/admin/PMA/edit.php?id_up=<?= $doenca["id_doenca"] ?>" class="btn btn-warning">
                        Editar
                      </a>
                      <a href="/nutri_tcc/admin/PMA/PMAadmin.php?id=<?= $doenca["id_doenca"]  ?>" class="btn btn-danger">
                        Excluir
                      </a>  
                    </div>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>    
          </div>
        </div>

        <div role="tab-panel" class="tab-pane container" id="cds">
          <br><br>
         <form method="POST">
          <label for="InputNome">Nome</label>
          <input type="text" name="nome" class="form-control">
          <label for="FormControlContexto">Contexto</label>
          <textarea class="form-control" name="contexto"></textarea>
          <label for="FormControltexto">texto</label>
          <textarea class="form-control" name="texto"></textarea>
          <br>
          <input type="submit" value="Cadastrar" class="btn btn-primary">        
        </form>
        </div>

      </div>
    </div>
  </div>

<br> <br> <br><br><br>

<?php
include("../Struc/FOOTER.php"); 
include("../Struc/script.php");

if (isset($_GET['id']))
{
  $id_as = addslashes($_GET['id']);
  $p->excluirPessoa($id_as);
  echo "<script>
  window.location.href='/nutri_tcc/admin/PMA/PMAadmin.php';     
  </script>";
}

?>

