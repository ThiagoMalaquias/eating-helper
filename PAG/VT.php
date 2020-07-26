<div class="container-fluid titulo-VT">
	<div class="container wow slideInLeft" data-wow-duration="1s" data-wow-delay=".8s">
		<br>
		<h1 id="AS">Veja Também</h1>
		<br>
	</div>
</div>
<div class="container-fluid" >
	<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">  
		<br>
		<div class="container-fluid" style=" padding-top: 40px; padding-right: 26%;padding-left: 10%;">
			<?php 
			$img = ["fvl", "cardapio", "mv", "pma", "jogo"];
			$imgnutri = ["Sophie", "claudia-lobo", "EH", "hed", "EH"];
			$nutri = [
				"<b>Sophie Derman</b> <br><i>Doutora pelo departamento de Endocrinologia da Faculdade de Medicina da Universidade de São Paulo (FMUSP)</i>", 
				"<b>Claudia Lobo</b> <br><i>Nutricionista especializada em Educação Infantil</i>",
				 "<b>Eating Helper</b><br><i>Grupo de pesquisa do TCC</i>", 
				 "<b>Hoje em Dia</b><br><i>Site de saude e bem-estar</i>",
				  "<b>Eating Helper</b><br><i>Grupo de pesquisa do TCC</i>"];

			$ass = ["Familia", "Alimentação", "Duvidas", "Doenças", "Divertimento"];
			$text = [
				"Conhece bem frutas, verduras e legumes?",
				"Cardapios sensacionais para sua alimentação.",
				"Mito ou Verdade? Saiba TUDO sobre sua saúde.",
				"9 doenças causada pela má alimentação.", 
				"Resolva nossos pequenos desafios sobre alimentação saudavél."
			];
			$link = [
				"/Nutri_TCC/pag/As.php", 
				"/Nutri_TCC/pag/Cardapio.php", 
				"/Nutri_TCC/pag/MV.php?page=1", 
				"/Nutri_TCC/pag/PMA.php",
				"#jogos"
			];
			 
			for ($i=0; $i < 5; $i++) { 
			 	echo "
			 		<br>
					<div class='row'style='margin-bottom: -3%;'>
						<div class='col-md-6 col-sm-12 col-xs-12'>
							<img src='../Img/$img[$i].jpg' class='card-img' alt='...' style='float-right; height: 93%;' size='(min-width: 991px) 428px, (max-width: 360px) 360px, (max-width: 230px) 230px, (max-width: 165px) 165px, '>
						</div>

						<div class='col-md-6 col-sm-12 col-xs-12'>
						    <p class='card-text p-VT'>$ass[$i]</p>
						    <a href='$link[$i]' class='card-text text-all' data-toggle='modal' data-target='$link[$i]'>$text[$i]</a><br><br>
							<ion-icon name='logo-youtube' id='icon-social1'></ion-icon>
				            <ion-icon name='logo-twitter' id='icon-social1'></ion-icon>
				            <ion-icon name='logo-github' id='icon-social1'></ion-icon>
				            <ion-icon name='logo-game-controller-b' id='icon-social1'></ion-icon>
				            <ion-icon name='logo-pinterest' id='icon-social1'></ion-icon>

				            <div class='row' style='margin-top: 20px;'>
								<div class='col-md-2 col-sm-12 col-xs-12'>
									<img src='../Img/$imgnutri[$i].jpg' class='img-nutri'>
								</div>
								<div class='col-md-10 col-sm-12 col-xs-12'>
									<p class='card-text' class='p-nutri'>$nutri[$i]</p>
								</div>
							</div>

						</div>
					</div>
					<br>
					<hr>
			 	";
			}	
			?> 

		</div>
	  </div>
	</div>
	<br><br>
</div>
