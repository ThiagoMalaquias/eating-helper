<?php 
  require_once 'admin/class-logar.php';
  require_once 'admin/FaleConosco/class-FC.php';

  $p = new FC("bd_site","localhost","root","");

  if (isset($_POST['nome'])){
      $nome = addslashes($_POST['nome']);
      $email = addslashes($_POST['email']);
      $assunto = addslashes($_POST['assunto']);
      $comentario = addslashes($_POST['comentario']);

      $p->cadastrarComentario($nome, $email, $assunto, $comentario);
      
      if (empty($nome) && empty($email) && empty($assunto) && empty($comentario)){
         echo ("<script>
                window.alert('Preencha todos os campos!!!');
                window.location.href='/nutri_tcc/';     
                 </script>"
              ); 
      }
     
      echo "<script>
              window.alert('A equipe do Eating Helper agradece seu comentario');
              window.location.href='/nutri_tcc/';     
            </script>";             
  }

?>

<div class="container-fluid fale-conosco">
  <div class="cont-VT3 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">  
    <div class="container">
      <br><br>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="wow bounceInDown" data-wow-duration="1s" data-wow-delay=".4s">
              <p id="FC" style="font-weight: bold; font-size: 15pt; color: #000">FALE CONOSCO</p>
              <hr style="background-color: #000">
            </div>
            <div class="wow fadeIn" style="color:black;">
              <form method="post">
                <div class="form-group" >
                  <label for="exampleInputPassword1">Nome</label>
                  <input type="text" class="form-control form-footer" name="nome" id="exampleInputPassword1" placeholder="Ex: Carlos Alberto">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control form-footer" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: carlinhos02@gmail.com">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Assunto</label>
                  <input type="text" class="form-control form-footer" name="assunto" id="exampleInputPassword1" placeholder="...">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Comentario</label>
                  <textarea class="form-control form-footer" name="comentario" id="exampleFormControlTextarea1" rows="3" placeholder="..."></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark">Enviar</button>
              </form>
            </div>
            <br><br>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12" style="color: #000; margin: 0 0 0 0;">
          <div class="parceria" style="margin-bottom: 5%;">
             <p style="font-weight: bold; font-size: 15pt; ">NOSSAS PARCERIAS</p>
             <hr style="background-color: #000">
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-2 col-sm-12 col-xs-12">
                  <img src="Img/Aiko.jpg" class="img-nutri2">
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <p class="card-text" class="p-nutri"><b>Aiko</b><br><i>Nutricionista especializada em Educação Infantil graduada na Faculdade de Ciências da Saude São Camilo</i></p>
                </div>
              </div>
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-2 col-sm-12 col-xs-12">
                  <img src="Img/paloma.jpg" class="img-nutri2">
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <p class="card-text" class="p-nutri"><b>Paloma Nascimento</b> <br><i>Estudante de nutrição pela Faculdade Metropolitana Unida (FMU)</i></p>
                </div>
              </div>
          </div>
            <div class="text-footer">
              <p style="font-weight: bold; font-size: 15pt; ">NOSSA LOCALIZAÇÃO</p>
              <hr style="background-color: #000">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1828.7095832469624!2d-46.600109627821574!3d-23.553384486164024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5935e6d7f161%3A0xe1e8049a33dc964b!2sETEC+Professor+Camargo+Aranha!5e0!3m2!1spt-BR!2sbr!4v1558541328372!5m2!1spt-BR!2sbr" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid footer" style="background-color: #5a5151; text-align: center; color: #fff; "> 
  <div class="container-fluid footer2">
    <div class="container" style="padding: 15px 10px;">
      <ion-icon name="logo-youtube" id="icon-social"></ion-icon>
      <ion-icon name="logo-twitter" id="icon-social"></ion-icon>
      <ion-icon name="logo-github" id="icon-social"></ion-icon>
      <ion-icon name="logo-game-controller-b" id="icon-social"></ion-icon>
      <ion-icon name="logo-pinterest" id="icon-social"></ion-icon>
      <br>
     © 2019 Eating Helper | Site sobre bons hábitos e cuidados para a Saúde de Crianças 
      <br>
        <p style="font-size: 10pt;">
        <i>Este conteúdo tem caráter informativo e nunca deve ser usado para definir diagnósticos <br>ou substituir a opinião de um profissional. Recomendamos que você consulte um especialista de confiança.</i></p>
    </div>
  </div>
</div>