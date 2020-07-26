<?php
include("Struc/head.php");
include("Struc/MENU_pag.php");
?>


<div class="container-fluid titulo-cardapio" style="">
	<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
		<br>
		<h1>CARDÁPIOS</h1>
		<br>
	</div>
</div>
<br>

<div class="container-fluid width-conAs wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
	<div class="container">	
		<br>

		<p class="text-justify txt-sa"> A rotina com filhos é corrida e você nem sempre consegue garantir uma alimentação balanceada para a família, certo? Para te ajudar a organizar as refeições, preparamos uma sugestão de cardápio para seus filhos ao longo dos dias da semana, que são os mais difíceis de administrar!</p>

		<p style="font-size: 25pt; color:  #1b5839;"><b>Cardápio Semanal</b></p>

		<p class="text-justify txt-sa">Antes de tudo, lembre-se que as sugestões seguir são para crianças de até 4 anos. Após essa idade, duplique as porções de arroz, pão, torradas, biscoitos, farinhas, feijão e outras leguminosas como ervilhas, soja, lentilha, carnes, ovos, castanhas e nozes. Por exemplo: 2 colheres de sopa de arroz, mude para 4 colheres de sopa.</p>

		<p class="text-justify txt-sa">Lembre-se também que as porções mencionadas são apenas sugestões, já que a necessidade real varia conforme o sexo, a idade, peso, altura, maturidade e desenvolvimento fisiológico da criança, além de seu estado físico, hábitos alimentares, culturais e disponibilidade de alimentos. Se tiver dúvidas, consulte um nutricionista e o pediatra de seu filho.</p>
		
		<p style="text-align: center;">
			<a class="btn btn-cardapio active" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample" aria-selected="true">
			    Segunda-Feira
			</a>

			<?php 
				$diasSemana = ["Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira"];

				for ($i=0; $i<=3 ; $i++) { 
					$f = $i + 2;
				 	echo "
				 		 <a class='btn btn-cardapio' data-toggle='collapse' href='#collapseExample$f' role='button' aria-expanded='false' aria-controls='collapseExample'>
						    $diasSemana[$i]
						</a>
				 	";
       			} 
			?>
		</p>
		<?php include("Struc/car_Modal.php"); ?>
<br>
		<p class="text-justify txt-sa"> Gostou dos cardapios? <a href="Struc/gerar_pdf_com_dompdf/" target="_blank"> Click Aqui </a> para imprimir o PDF.</p>
		<br>

	</div>
</div>

<br><br>

<?php
include("VT.php");
include("Struc/FOOTER.php");
include("Struc/script.php");
?>           
