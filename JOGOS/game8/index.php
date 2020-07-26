<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">

<head>
	<!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-png" href="/NUTRI_TCC/Img/images.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/NUTRI_TCC/Bootstrap/node_modules/bootstrap/compile/bootstrap.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/NUTRI_TCC/CSS/Paginatan.css">
    <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
    <link rel='stylesheet' type="text/css" href='http://fonts.googleapis.com/css?family=Lato:300,400,700' >

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>QUEBRA-CABEÇA</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style type="text/css">
		.form-control{
			background: none;
		    color: #fff;
		}
	</style>
</head>
<body style="background-color: wheat;">

	<?php 
		include("../MENU.php");
	?>

<div class="container-fluid titulo-alimenta" style="font-family: 'Sofia', cursive; font-weight: bold; ">
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
			<br>
			<h1 id="AS" style="font-size: 30pt;">QUEBRA-CABEÇA</h1>
			<hr style="background-color: wheat;">
			<br>
		</div>
	</div>

	<div class="container-fluid titulo-alimenta1" style="font-family: 'Arial', cursive; text-align: center;">
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
			<br><br>
			<p>Agora testaremos sua capacidade de montar nosso Quebra-Cabeça de acordo com a imagem ao lado.</p>
		</div>
	</div>



<div class="container-fluid">
	<div class="row">
		<div class="col" style=" padding-left: 10%;">
			<div id="container" class="panel">
				<div id="n1" class="tile" data-value="1"></div>
				<div id="n2" class="tile" data-value="2"></div>
				<div id="n3" class="tile" data-value="3"></div>
				<div id="n4" class="tile" data-value="4"></div>
				<div id="n5" class="tile" data-value="5"></div>
				<div id="n6" class="tile" data-value="6"></div>
				<div id="n7" class="tile" data-value="7"></div>
				<div id="n8" class="tile" data-value="8"></div>
				
				<div id="startScreen" class="panel modal1"></div>
				<div id="overScreen" class="panel modal1"></div>
			</div>
		</div>
		<div class="col">
			<div class="container img-flv"></div>
		</div>
	</div>
</div>

<br><br>

<?php include("../footer.php") ?>

	<script src="js/script.js"></script>
	<script src="/NUTRI_TCC/Bootstrap/node_modules/jquery/dist/jquery.js"></script>
	<script src="/NUTRI_TCC/Bootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="/NUTRI_TCC/Bootstrap/node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="/NUTRI_TCC/Bootstrap/node_modules/bootstrap/js/modernizr-2.6.2.min.js"></script>
</body>
</html>
