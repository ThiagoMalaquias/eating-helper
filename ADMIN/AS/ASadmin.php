<?php 

session_start();
if(!isset($_SESSION['id_adm']))
{
  header("location: /nutri_tcc/admin/");
  exit;
}

include("../Struc/head.php"); 
include("../Struc/Menu_admin.php");
require_once 'class-AS.php';
require_once '../class-logar.php';

$p = new ASadmin("bd_site","localhost","root","");

if (isset($_POST['nome'])) 
{
  $nome = addslashes($_POST['nome']);
  $assunto = addslashes($_POST['assunto']);
  $familiaAlim = addslashes($_POST['familia']);if($familiaAlim == "0"){ $familiaAlim = ""; }
  $cor = addslashes($_POST['cor']);
  if($_FILES['img']['type'] == 'image/png')
  {
    $img_nome = addslashes($_FILES['img']['name']);
    if (isset($_FILES['img']))
    {

      move_uploaded_file($_FILES['img']['tmp_name'], 'imagensAS/'.$img_nome);
      $img = addslashes('imagensAS/'.$_FILES['img']['name']);
    }

  }
  else if($_FILES['img']['type'] == 'image/jpeg')
  {
    $img_nome = addslashes($_FILES['img']['name']);
    if (isset($_FILES['img']))
    {

      move_uploaded_file($_FILES['img']['tmp_name'], 'imagensAS/'.$img_nome);
      $img = addslashes('imagensAS/'.$_FILES['img']['name']);
    }

  }
  else
  {
    echo "<script>
    window.alert('Apanas IMAGENS pode ser cadastradas!!!');
    window.location.href='/nutri_tcc/admin/AS/ASadmin.php';
    </script>";
  }


  if (!empty($nome) && !empty($cor) && !empty($assunto) && !empty($img) && !empty($familiaAlim))
  {
    if(!$p->cadastrarPessoa($nome, $assunto, $img, $familiaAlim, $cor))
    {
      echo ("<script>
        window.alert('Esse cadastro já existe!!!');
        window.location.href='/nutri_tcc/admin/AS/ASadmin.php';     
        </script>"
      ); 
    }
  }
  else
  {
    echo ("<script>
      window.alert('Preencha todos os campos!!!'); 
      window.location.href='/nutri_tcc/admin/AS/ASadmin.php';    
      </script>"
    ); 
  }
  echo "<script>
  window.location.href='/nutri_tcc/admin/AS/ASadmin.php';     
  </script>";
}
?>

<div class="container-fluid titulo-alimenta" style="font-family: 'Sofia', cursive; font-weight: bold;">
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
    <br>
    <h1 id="AS">Alimentos Saudaveis</h1>
    <br>
  </div>
</div>

<div class="container-fluid">
  <br>
  <div class="tabpanel">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="nav-item">
        <a href="#adm" class="nav-link active" style="font-size:15pt;color: #797777;" aria-controls="adm" data-toggle="tab" role="tab">Alimentos</a> 
      </li>
      <li role="presentation" class="nav-item">
        <a href="#normalUser" class="nav-link" style="font-size:15pt;color: #797777;" aria-controls="normalUser" data-toggle="tab" role="tab">Cadastrar</a>
      </li>
    </ul>
    <div class="tab-content">
      <div role="tab-panel" class="tab-pane active container" id="adm">
        <br><br>
        <div class="mv">
          <?php $dados = $p->buscarDados();?>
          <?php foreach ($dados as $alimentos) :?>

            <img src="<?= $alimentos["img"]; ?>" class="img-flv" data-toggle="modal" data-target="#AS<?= $alimentos["id_Alimentos"];?>">

            <!-- Modal -->
            <div class="modal fade" id="AS<?= $alimentos["id_Alimentos"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header" style="background: <?= $alimentos["cor"]; ?>; color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $alimentos["nome"]; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-justify p-MV2">
                    <?= $alimentos["assunto"];?>
                    <hr>
                    <b>Categoria:</b> <?= $alimentos["familiaAlim"];?>
                    <hr>
                    <b>Cor:</b> <?= $alimentos["cor"];?>
                  </div>
                  <div class="modal-footer">

                    <a href="/nutri_tcc/admin/AS/edit.php?id_up=<?= $alimentos["id_Alimentos"]; ?>" class="btn btn-warning">
                      Editar
                    </a>
                    <a href="/nutri_tcc/admin/AS/ASadmin.php?id=<?= $alimentos["id_Alimentos"]; ?>" class="btn btn-danger">
                      Excluir
                    </a>

                  </div>  
                </div>
              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>

      <div role="tab-panel" class="tab-pane container" id="normalUser">
        <br><br>
        <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" >
          </div>
          <div class="form-group">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control"  >
          </div>
          <div class="form-group">
            <label>Assunto</label>
            <input type="text" name="assunto" class="form-control">
          </div>
          <div class="form-gorup">
            <label >Imagem</label>
            <input type="file" name="img" class="form-control" >
          </div>
          <br>
          <div class="form-group">
            <label>TipoAlimento</label>
            <select class="custom-select" name="familia">
              <option value="0">---Selecionar---</option>
              <option value="Fruta">Frutas</option>
              <option value="Verdura">Verduras</option>
              <option value="Legume">Legumes</option>
            </select>
          </div>
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
  window.location.href='/nutri_tcc/admin/AS/ASadmin.php';     
  </script>";
}

?>

