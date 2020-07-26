<?php   
  session_start();
  if(!isset($_SESSION['id_adm']))
  {
      header("location: /nutri_tcc/admin/");
      exit;
  }

  include("../Struc/head.php"); 
  include("../Struc/Menu_admin.php");
  require_once '../class-logar.php';
  require_once 'class-PMA.php';

  $p = new PMA("bd_site","localhost","root","");

  if (isset($_POST['nome'])){
    if(isset($_GET['id_up']) && !empty($_GET['id_up'])){
      $id_upd = addslashes($_GET['id_up']);
      $nome = addslashes($_POST['nome']);
      $contexto = addslashes($_POST['contexto']);
      $texto = addslashes($_POST['texto']);
      if (!empty($nome) && !empty($contexto) && !empty($texto)){
           $p->atualizarDados($id_upd, $nome, $contexto, $texto); 
      }
      else{
        echo ("<script>
                window.alert('Preencha todos os campos!!!');
                window.location.href='/nutri_tc/admin/PMA/PMAadmin.php';     
              </script>"
              ); 
      } 
      echo "<script>
              window.location.href='/nutri_tcc/admin/PMA/PMAadmin.php';     
            </script>";          
    }
  }

  if (isset($_GET['id_up'])){//Se a pessoa clicou no botão editar
    $id_update = addslashes($_GET['id_up']);
    $res = $p->buscarDadosPessoa($id_update); 
  }
?>

<br><br>

<div class="container-fluid">
  <h1 style="padding-left: 35px;">Editar Problemas da Má Alimentação</h1>
  <hr>
  <?php if(!empty($message)): ?>
    <div class="alert alert-success">
      <?= $message; ?>
    </div>
  <?php endif; ?>
  <div class="container">
    <form method="post">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php if(isset($res)){echo $res['nome'];} ?>">
      </div>
      <div class="form-group">
        <label>Contexto</label>
        <textarea class="form-control" name="contexto"><?php if(isset($res)){echo $res['contexto'];}?></textarea>
      </div>
      <div class="form-group">
        <label>Texto</label>
        <textarea class="form-control" name="texto"><?php if(isset($res)){echo $res['texto'];}  ?></textarea>
      </div>
      <br>
      <input type="submit" value="Editar" class="btn btn-success">
      <a href="/nutri_tcc/admin/PMA/PMAadmin.php"  class="btn btn-primary">Cancelar</a>
    </form>
  </div>
</div>

<br><br><br><br><br>

  <?php include("../Struc/FOOTER.php") ?>
  <?php include("../Struc/script.php") ?>
