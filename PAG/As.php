<?php

require('../admin/Struc/conexao-bdLogin.php');
  $sql = "SELECT * FROM tbalimentos ORDER BY rand()";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $alimentos = $statement->fetchAll(PDO::FETCH_OBJ);

include("Struc/head.php");
include("Struc/MENU_pag.php");
?>

<div class="container-fluid titulo-alimenta" style="font-family: 'Sofia', cursive; font-weight: bold;">
	<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
		<br>
		<h1 id="AS">Alimentos Saudáveis</h1>
		<br>
	</div>
</div>
<br>

<div class="container-fluid">
	<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"" style="text-align: center; margin-bottom: 10px;">
			<img src="../Img/as1.jpg" class="img-fluid">
		</div>
	<div class="container txt-sa wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">	
		<br>
		<p>Quando se fala em <b>alimentação saudável infantil</b> , as dicas e orientações geralmente se voltam para lanches e pratos nutritivos, ou ainda táticas para fazer a criança comer melhor. Eu mesma já dei aqui no meu blog algumas ideias de lancheiras criativas, gostosas e com comida de qualidade.</p>

		<p>Mas hoje quero chamar sua atenção para a importância dos outros aspectos que determinam a relação da criança com a comida: <b>hábitos, comportamentos, ambiente, interação de pais e filhos… Tudo isso influencia na forma como ela se relaciona com os alimentos.</b></p>

		<p>Isso também muito provavelmente será carregado para a vida adulta, daí a importância de construirmos uma conexão equilibrada com a comida.</p>

		<p>A alimentação saudável infantil vai muito além dos nutrientes. Claro que é importante ampliar a oferta de alimentos de verdade e diminuir o consumo dos ultraprocessados. Mas vamos tentar enxergar um pouco além disso?</p>

		<p class="p-text-alimenta"><b>Alimentação <i>Saudável</i> Infantil</b></p>

		<p>
		É muito importante que mães e pais tentem passar uma visão tranquila com relação ao corpo e à alimentação. Quando são muito obcecados com dietas ou com comidas supostamente “saudáveis”, acabam passando isso para os filhos mesmo que de forma inconsciente.</p>

		<p>Outra coisa importante é falarmos de imagem corporal. Se a criança tem problemas de peso, é pior ficar ressaltando essa insatisfação com o corpo. Mude o foco para algo mais positivo.</p>

		<div class="row" style="margin-bottom: -5%;">
			<div class="col-md-5 col-sm-12 col-xs-12">
				<img src="../Img/caminhada.jpg" height="71%" width="100%" style="float: left;">
			</div>
			<div class="col-md-7 col-sm-12 col-xs-12">
				<p><b>Ao invés de falar para a criança que ela não pode comer alguns alimentos, ofereça opções de coisas gostosas caseiras.</b> No lugar de falar “você precisa se exercitar”, por que não fazer algo que torne a família toda ativa? Caminhada no parque, na rua ou na praia, uma academia em que cada um possa se matricular na atividade ou esporte que mais gosta (natação, esportes em geral, yoga, pilates, etc).</p>
			</div>
		</div>

		<p><b>A partir do momento que todos adotam hábitos saudáveis, como uma alimentação de qualidade e uma vida ativa, a criança também se sente encorajada para fazer parte disso.</b></p>

		<p class="p-text-alimenta"><b><i>Família Unida</i></b></p>

		<p>O hábito de cozinhar é um grande aliado da alimentação saudável infantil, e, consequentemente, uma importante ferramenta de combate à obesidade. E a ciência comprova isso: uma pesquisa feita com mais de 100 mil crianças mostrou que refeições caseiras em família estão associadas a uma menor taxa de excesso de peso infantil.</p>

		<p>Claro que alguns obstáculos impedem que as pessoas cozinhem mais hoje em dia: a falta de tempo é a principal.</p>

		<p>Mas é possível fazer coisas simples, em pouco tempo e sem grandes habilidades culinárias. Uma bela salada, bolos caseiros, um lanche gostoso, um macarrão ou arroz de forno incrementado com legumes diversos.</p>

		<div class="row" style="">
			<div class="col-md-7 col-sm-12 col-xs-12">
				<p>E ainda mais importante do que cozinhar é o hábito de sentar junto à mesa para comer. Ter refeições em família é algo valioso porque reforça os laços e cria uma rotina alimentar – que é um dos principais pilares da alimentação saudável infantil.</p>

				<p>Inclua seus filhos nas decisões, nas escolhas: não adianta proibir alimentos, ele vai achar um jeito de comer. Por exemplo: na hora de montar a lancheira, conversem, façam acordos. Se colocar só o que você gostaria que ele comesse, ele vai acabar trocando comida com o coleguinha na escola ou, ainda, comendo escondido; o que pode ser um primeiro passo para um transtorno alimentar.</p>

			</div>
			<div class="col-md-5 col-sm-12 col-xs-12">
				<img src="../Img/jantar.jpg" height="98%" width="99%" style="float: left;">
			</div>
		</div>

		<p>Então tentem, juntos, equilibrar as opções, sem excessos, mas também sem restrições difíceis de serem seguidas. Sempre respeitando a fome deles.</p>

		<p><b>O segredo não é restrição/dieta, mas procurar comer melhor.</b></p>

		<p class="p-text-alimenta"><b>Sem <i>DIETA!</i></b></p>

		<p>Por fim, a recomendação de ouro: uma <b>alimentação saudável infantil não passa por dietas, remédios, restrições ou pular refeições para perder peso.</b> Crianças estão em fase de crescimento e passar por privações pode comprometer muito a saúde.</p>

		<p>Evite o controle excessivo, dizendo que a criança tem que parar de comer ou, o contrário, tem que “comer tudo”. Os pais podem e devem oferecer variedade e alimentos de qualidade, mas a criança é dona de sua fome. Ela é capaz de decidir a quantidade que quer comer. Confie e respeite!</p>
		<br>
	</div>
</div>

<br><br>

<div class="container-fluid FVL" style="background-color: #849442; color: #fff;">
<br>
	<div class="container wow fadeIn titulo-flv" data-wow-duration="1s" data-wow-delay=".3s" style="font-family: 'Sofia', cursive; font-weight: bold;">
		<br>
		<h1 id="AS">Frutas, Verduras e Legumes</h1>
		<hr style="background-color: #fff;">
		<br>
	</div>
	<div class="container txt-sa" >
		<p>Fruta é um conceito culinário que em geral compreende os frutos e pseudofrutos comestíveis e de sabor adocicado. A maior diferença entre verduras e legumes é a parte comestível da planta. Nas verduras, a parte comestível são as folhas ou flores, enquanto nos legumes a parte comestível são frutos e sementes. Agora, sabe que tipos de vitaminas esses alimentos te fornece? Se a resposta for não, pare tudo que está fazendo agora, chame todos os membros de sua familia e venha aprender de uma forma bem mais divertida.
		<div class="mv">	
			<?php foreach ($alimentos as $alimento):?>
				
		        	<img src="../admin/AS/<?= $alimento->img; ?>" data-toggle="popover" title="<?=utf8_decode( $alimento->familiaAlim); ?>: <?= $alimento->nome; ?>" data-content="<?= $alimento->assunto; ?>" data-trigger="hover" class="img-flv">
		        
		    <?php endforeach; ?>	
		</div>
	</div>
<br><br>
</div>

<?php
include("VT.php");
include("Struc/script.php");
include("Struc/FOOTER.php");
?>      

