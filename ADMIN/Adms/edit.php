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
  require_once 'class-Adms.php';

  $p = new admin("bd_site","localhost","root","");
?>

 <?php
    if (isset($_POST['nome'])){
      if(isset($_GET['id_up']) && !empty($_GET['id_up'])){
          $id_upd = addslashes($_GET['id_up']);
          $nome = addslashes($_POST['nome']);
          $email = addslashes($_POST['email']);
          $senha = addslashes($_POST['senha']);
          if (!empty($nome) && !empty($email) && !empty($senha)){
              $p->atualizarDados($id_upd, $nome, $email, $senha);
          }
          else{
            echo ("<script>
                    window.alert('Preencha todos os campos!!!');
                    window.location.href='/nutric_tc/admin/Adms/ADMs.php';     
                  </script>"
                  ); 
          } 
          echo "<script>
                  window.location.href='/nutri_tcc/admin/Adms/ADMs.php';     
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
  <h1 style="padding-left: 35px;">Editar Adm</h1>
  <hr>
  <?php if(!empty($message)): ?>
    <div class="alert alert-success">
      <?= $message; ?>
    </div>
  <?php endif; ?>
  <div class="container">
    <form method="post">
      <div class="form-group">
          <label for="InputAssunto">Nome</label>
          <input type="text" name="nome" class="form-control" value="<?php if(isset($res)){echo $res['nome'];} ?>">
        </div>
        <div class="form-group">
          <label for="InputMV">Email</label>
          <input type="text"  name="email" class="form-control" value="<?php if(isset($res)){echo $res['email'];} ?>">
        </div>
        <div class="form-group">
          <label for="TextareaContexto">Senha</label>
          <input type="password" name="senha" class="form-control" value="<?php if(isset($res)){echo $res['senha'];} ?>">
        </div>
        <br>
          <input type="submit" value="Editar" class="btn btn-success">
         <a href="/nutric_tc/admin/Adms/ADMs.php"  class="btn btn-primary">Cancelar</a>
    </form>
  </div>
</div>

<br><br><br><br><br>

  <?php include("../Struc/FOOTER.php") ?>
  <?php include("../Struc/script.php") ?>
