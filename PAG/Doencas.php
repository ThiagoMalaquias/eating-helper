<?php

$x= $_GET['id'];

require('../admin/Struc/conexao-bdLogin.php');
  $sql = "SELECT * FROM tbdoencas WHERE id_doenca = $x";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $doencas = $statement->fetchAll(PDO::FETCH_OBJ);

  $sql = "SELECT * FROM tbdoencas ORDER BY rand()";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $todasDoencas = $statement->fetchAll(PDO::FETCH_OBJ);

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

<br><br>
<div class="container-fluid" style="width: 90%;">
	<div class="row">
		<div class="col-md-8 col-sm-12 col-xs-12">
			<?php foreach ($doencas as $doenca):?>
				<div class="titulo-doenca txt-sa" style="text-align:center;">
					<p style="text-transform: uppercase;font-size: 25pt; color: #f19005;font-family: 'Sofia', cursive;"><?= $doenca->nome; ?></p>
					<hr style="background-color:#f19005 ">
				</div>
				<div class="conteudo txt-sa"><?= $doenca->texto; ?></div>
			<?php endforeach; ?>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<br><br><br>
			<?php foreach ($todasDoencas as $unDoenca):?>
				<?php if ($unDoenca->id_doenca <= 5 ):?>
			        <div class="card card-PMA pma1" style="height: auto;">
			          <div class="card-body">
			            <h5 class="card-title" style="text-transform: uppercase;"><?= $unDoenca->nome; ?></h5>
			            <p class="card-text" style=" text-indent: 40px;"><?= $unDoenca->contexto; ?></p>
			            <a href="/Nutri_TCC/pag/Doencas.php?id=<?= $unDoenca->id_doenca; ?>" class="btn btn-PMA">+</a>
			          </div>
			        </div>
			    <?php endif; ?>
		     <?php endforeach; ?>
		</div>
	</div>
</div>

<br><br>
<?php
include("VT.php");
include("Struc/FOOTER.php");
include("Struc/script.php");
?>  