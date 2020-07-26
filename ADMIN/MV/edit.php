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
  require_once 'class-MV.php';

  $p = new MV("bd_site","localhost","root","");
?>

<br><br>

 <?php

  if (isset($_POST['Assunto']))
  {

    if(isset($_GET['id_up']) && !empty($_GET['id_up']))
    {
        $id_upd = addslashes($_GET['id_up']);
        $assunto = addslashes($_POST['Assunto']);
        $mito_vdd = addslashes($_POST['Mito_Vdd']);
        $contexto = addslashes($_POST['Contexto']);
        if (!empty($assunto) && !empty($mito_vdd) && !empty($contexto))
        {
            $p->atualizarDados($id_upd, $assunto, $mito_vdd, $contexto);
                
        }
        else
        {
            echo ("<script>
                      window.alert('Preencha todos os campos!!!');
                      window.location.href='/Nutri_Tcc/admin/MV/MVadmin.php';     
                    </script>"
                  ); 
        } 
            echo "<script>
                    window.location.href='/Nutri_Tcc/admin/MV/MVadmin.php';     
                  </script>";
    }

  }




if (isset($_GET['id_up']))//Se a pessoa clicou no botão editar
  {
    $id_update = addslashes($_GET['id_up']);
    $res = $p->buscarDadosPessoa($id_update); 
  }
?>

<div class="container-fluid">
  <h1 style="padding-left: 35px;">Editar Mito ou Verdades</h1>
  <hr>
  <div class="container">
    <form method="post">
      <div class="form-group">
          <label>Assunto</label>
          <input type="text" name="Assunto" class="form-control" value="<?php if(isset($res)){echo $res['Assunto'];} ?>">
        </div>
        <div class="form-group">
          <label>Mito ou Verdade?</label>
          <input type="text" name="Mito_Vdd" class="form-control" value="<?php if(isset($res)){echo $res['Mito_Vdd'];} ?>">
        </div>
        <div class="form-group">
          <label>Contexto</label>
          <textarea class="form-control" name="Contexto"><?php if(isset($res)){echo $res['Contexto'];} ?></textarea>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Editar">
         <a href="/Nutri_Tcc/admin/MV/MVadmin.php"  class="btn btn-primary">Cancelar</a>
    </form>
  </div>
</div>

<br><br><br><br><br>
 <?php include("../Struc/FOOTER.php") ?>
  <?php include("../Struc/script.php") ?>
