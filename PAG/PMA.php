<?php
require('../admin/Struc/conexao-bdLogin.php');
  $sql = "SELECT * FROM tbdoencas ORDER BY rand()";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $doencas = $statement->fetchAll(PDO::FETCH_OBJ);

include("Struc/head.php");
include("Struc/MENU_pag.php");
?>

<div class="container-fluid titulo-PMA">
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
    <br>
    <h1>Problemas da Má Alimentação</h1>
    <br>
  </div>
</div>

<div class="container-fluid">
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
    <br><br>
    <p class="text-justify txt-sa">A má alimentação da criança em desenvolvimento e do adolescente pode provocar doenças que dificultam o seu desenvolvimento físico e mental, além de trazer problemas mais graves para a vida adulta.</p>

    <p class="text-justify txt-sa">Por ainda estar em desenvolvimento, o organismo da criança e do adolescente é mais susceptível a alterações, e a alimentação é a principal forma para potencializar o crescimento saudável e o aprendizado. Por isso, veja a seguir as principais doenças que a alimentação errada pode causar e o que fazer para evitar.</p>

    <div class="pma">

      <?php foreach ($doencas as $doenca):?>
        
          <div class="card card-PMA pma1">
            <div class="card-body">
              <h5 class="card-title" style="text-transform: uppercase;"><?= $doenca->nome; ?></h5>
              <p class="card-text" style=" text-indent: 40px;"><?= $doenca->contexto; ?></p>
              <a href="/Nutri_TCC/pag/Doencas.php?id=<?= $doenca->id_doenca; ?>" class="btn btn-PMA">+</a>
            </div>
          </div>
        
      <?php endforeach; ?>
  		

     </div>
    </div>
  </div>
</div>

<br><br>

<?php
include("VT.php");
include("Struc/FOOTER.php");
include("Struc/script.php");
?>   
