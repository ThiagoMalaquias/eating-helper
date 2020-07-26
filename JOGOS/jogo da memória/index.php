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
    <link rel="stylesheet" type="text/css" href="/NUTRI_TCC/CSS/Paginatan.css">
    <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
    <link rel='stylesheet' type="text/css" href='http://fonts.googleapis.com/css?family=Lato:300,400,700' >

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>JOGO DA MEMÓRIA</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<?php 
		include("../MENU1.php");
	?>

	<div class="container-fluid titulo-alimenta" style="font-family: 'Sofia', cursive; font-weight: bold; ">
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
			<br>
			<h1 id="AS" style="font-size: 30pt;">JOGO DA MEMÓRIA</h1>
			<hr style="background-color: wheat;">
			<br>
		</div>
	</div>

	<div class="container-fluid titulo-alimenta1" style="font-family: 'Arial', cursive;">
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
			<br><br>
			<p>Agora que você estudou tudo sobre as frutas, verduras e legumes, testaremos seus conhecimentos para ver seu nivel de aprendizado.</p>
		</div>
	</div>

	<div id="game">
		<div class="card" id="card0">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card1">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card2">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card3">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card4">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card5">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card6">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card7">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card8">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card9">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card10">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card11">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card12">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card13">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card14"> 
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		<div class="card" id="card15">
			<div class="face back"></div>
			<div class="face front"></div>
		</div>
		
		<img id="match" src="img/match.png" />
		
		<div id="gameOver">
		<img id="imgGameOver" src="img/gameover1.gif" />
	</div>
	</div>
	
<?php include("../footer.php") ?>

	<script src="js/script.js"></script>
	<script src="/NUTRI_TCC/Bootstrap/node_modules/jquery/dist/jquery.js"></script>
	<script src="/NUTRI_TCC/Bootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="/NUTRI_TCC/Bootstrap/node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="/NUTRI_TCC/Bootstrap/node_modules/bootstrap/js/modernizr-2.6.2.min.js"></script>
</body>
</html>
