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
  require_once 'class-AS.php';

  $p = new ASadmin("bd_site","localhost","root","");
  
?>
  
<br><br>

<?php

  if (isset($_POST['nome']))
  {

    if(isset($_GET['id_up']) && !empty($_GET['id_up']))
    {
        $id_upd = addslashes($_GET['id_up']);
        $nome = addslashes($_POST['nome']);
        $cor = addslashes($_POST['cor']);
        $assunto = addslashes($_POST['assunto']);
        $familiaAlim = addslashes($_POST['familia']);
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
            $p->atualizarDados($id_upd, $nome, $assunto, $img, $familiaAlim, $cor);
                
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

  }

  if (isset($_GET['id_up']))
  {
    $id_update = addslashes($_GET['id_up']);
    $res = $p->buscarDadosPessoa($id_update);
  }

?>

<div class="container-fluid">
  <h1 style="padding-left: 35px;">Editar Alimentos Saudaveis</h1>
  <hr>
  <?php if(!empty($message)): ?>
    <div class="alert alert-success">
      <?= $message; ?>
    </div>
  <?php endif; ?>
  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label for="InputAssunto">Nome</label>
          <input type="text" name="nome" class="form-control" value="<?php if(isset($res)){echo $res['nome'];} ?>">
        </div>
        <div class="form-group">
          <label for="InputMV">Cor</label>
          <input type="text"  name="cor" class="form-control" value="<?php if(isset($res)){echo $res['cor'];} ?>">
        </div>
        <div class="form-group">
          <label for="TextareaContexto">Assunto</label>
          <input type="text" name="assunto" class="form-control" value="<?php if(isset($res)){echo $res['assunto'];} ?>">
        </div>
        <div class="form-group">
          <label for="InputMV">Imagem</label>
          <input type="file"  name="img" class="form-control" value="<?php if(isset($res)){echo $res['img'];} ?>" lang="pt-br">
        </div>
        <div class="form-group">
          <label>TipoAlimento</label>
          <select class="custom-select" name="familia" value="<?php if(isset($res)){echo$res['txFamilia'];} ?>">
            <option>---Selecionar---</option>
            <option value="Frutas">Frutas</option>
            <option value="Verduras">Verduras</option>
            <option value="Legumes">Legumes</option>
          </select>
        </div>
        <br>
          <input type="submit" value="Editar" class="btn btn-success">
         <a href="/nutri_tcc/admin/AS/ASadmin.php"  class="btn btn-primary">Cancelar</a>
    </form>
  </div>
</div>

<br><br><br><br><br>

  <?php include("../Struc/FOOTER.php") ?>
  <?php include("../Struc/script.php") ?>
