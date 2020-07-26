<?php
  require_once 'class-logar.php';
  $u = new Login;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>EH-Gerenciador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../Bootstrap/node_modules/bootstrap/compile/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/node_modules/bootstrap/compile/Estilo1.css">
    <link rel="stylesheet" type="text/css" href="../https://unpkg.com/ionicons@4.5.1/dist/css/ionicons.min.css" >
    <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
    <link rel='stylesheet' type="text/css" href='http://fonts.googleapis.com/css?family=Playfair+Display:900,400|Lato:300,400,700' >
    <link rel="stylesheet" type="text/css" href="../css/home.css"> 
    <link rel="stylesheet" type="text/css" href="../css/geral.css">
    <link rel="stylesheet" type="text/css" href="../bower_components/wow/css/libs/animate.css">
    <link rel="shortcut icon" type="image/x-png" href="../Img/images.png">

    <style type="text/css">
      body{
        background-image: url(../Img/background-login.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 89vh;
      }
      .container{
        margin: 15% auto;
      }
      .text{
        color: #fff;
        font-family: 'Lato';
        font-weight: bold;
      }
      hr{
        background: #fff;
      }

      .form-control{
        background-color: rgba(0,0,0,.4);
        color: white;
      }
    </style>

  </head>
<body>

  <div class="container-fluid">
    <div class="container">
      <h1 class="text">Bem Vindo (Administrador)</h1>
      <hr>

      <form method="post">
        <div class="form-group">
          <label for="exampleInputEmail1" class="text">Email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="text">Senha</label>
          <input type="password" class="form-control" name="senha">
        </div>
           <input type="submit" class="btn btn-danger" name="btn-entrar" value="Entrar">
      </form>
    </div>
  </div>

<?php 
 if(isset($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    if(!empty($email) && !empty($senha)){
      $u->conectar("bd_site","localhost","root","");
      if($u->msgErro == ""){
        if($u->logar($email,$senha)){
          header("location: /nutri_tcc/admin/AS/ASadmin.php");
        }else{
          echo "<script>window.alert('Email ou Senha estão incorretos!');</script>";
        }
      }else {
        echo "Erro: ".$u->msgErro;
      }
    }else{
       echo "<script>window.alert('Preencha todos os campos!!!');</script>";
    }
  }
?>
        
</body>
</html>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../Bootstrap/node_modules/jquery/dist/jquery.js"></script>
<script src="../Bootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../Bootstrap/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../Bootstrap/node_modules/bootstrap/js/modernizr-2.6.2.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.1/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="../slick/slick.js" type="text/javascript" charset="utf-8"></script>

