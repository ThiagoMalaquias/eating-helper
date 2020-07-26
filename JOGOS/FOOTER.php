<?php 
  require_once '../../admin/FaleConosco/class-FC.php';

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
              <p style="font-weight: bold; font-size: 15pt; color: #fff">FALE CONOSCO</p>
              <hr style="background-color: #fff">
            </div>
            <div class="wow fadeIn" style="color:white">
              <br>
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
                <button type="submit" class="btn btn-outline-light">Enviar</button>
              </form>
            </div>
            <br><br>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12" style="color: #fff; margin: 0 0 0 0;">
           <div class="text-footer">
              <p style="font-weight: bold; font-size: 15pt; ">SOBRE NÓS</p>
              <hr style="background-color: #fff">
              © 2019 Eating Helper | Site sobre bons hábitos e cuidados para a Saúde de Crianças 
            <br>
              <p style="font-size: 10pt;">
              <i>Este conteúdo tem caráter informativo e nunca deve ser usado para definir diagnósticos ou substituir a opinião de um profissional. Recomendamos que você consulte um especialista de confiança.</i></p>
            </div>
          <div class="parceria" style="margin-bottom: 5%;">
             <p style="font-weight: bold; font-size: 15pt; ">NOSSAS PARCERIAS</p>
             <hr style="background-color: #fff">
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-2 col-sm-12 col-xs-12">
                  <img src="../../Img/Aiko.jpg" class="img-nutri2">
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <p class="card-text" class="p-nutri"><b>Aiko</b><br><i>Nutricionista especializada em Educação Infantil graduada na Faculdade de Ciências da Saude São Camilo</i></p>
                </div>
              </div>

              <div class="row" style="margin-top: 20px;">
                <div class="col-md-2 col-sm-12 col-xs-12">
                  <img src="../../Img/claudia-lobo.jpg" class="img-nutri2">
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <p class="card-text" class="p-nutri"><b>Claudia Lobo</b> <br><i>Nutricionista Especializada em Nutrição Humana e Saúde, em Educação Infantil e autora do livro "Comida de Criança"</i></p>
                </div>
              </div>
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-2 col-sm-12 col-xs-12">
                  <img src="../../Img/paloma.jpg" class="img-nutri2">
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                  <p class="card-text" class="p-nutri"><b>Paloma Nascimento</b> <br><i>Estudante de nutrição pela Faculdade Metropolitana Unida (FMU)</i></p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
