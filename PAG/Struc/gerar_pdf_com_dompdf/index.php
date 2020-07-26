<?php

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html('

	<title>Eating Helper</title>


		<style type="text/css">
			.txt-titulo{
				font-family:Arial; 
				text-align: center; 
				color:black;
			}
			table {
			  border-collapse: collapse;
			  width: 100%;
			  font-family:DejaVuSan-Bold, sans-serif;
			}
			td, th {
			  border: 2px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}
			p{
				font-size:20pt;
				font-family:DejaVuSan-Bold;
				font-weight:bold;
			}
		</style>

			<h1 class="txt-titulo">Cardapio Semanal para Crianças</h1>

			<p>Segunda-Feira</p>
			<table>
			  <tr>
			    <th>Café da Manhã</th>
			    <th>Almoço</th> 
			    <th>Jantar</th>
			  </tr>
			  <tr>
			    <td>
			    	1 xícara de leite integral; <br>
        			½ sanduíche de pão branco rico em fibras com purê de banana (banana amassada sem açúcar).
        		</td>
        		 <td>2 colheres de sopa de arroz;<br>
			        2 colheres de sopa de feijão ;<br>
			        2 colheres de sopa de lagarto desfiado com cenouras em cubinhos;<br>
			        Salada de alface e tomates cereja;<br>
			        <b>Sobremesa:</b> Uvas sem sementes.
               </td> 
			    <td>Macarrão com legumes e frango assado; <br>
			        Sobremesa: ½ pera com casca.
			    </td>
			  </tr>
			  <tr>
			    <th>Lanche da Manhã</th>
			    <th>Lanche da Terde</th> 
			    <th>Ceia</th>
			  </tr>
			  <tr>
			    <td>
			    	4 fatias de mingau duro de amido de milho com ameixas secas.
			    </td>
			     <td>1 pote de iogurte com 5 morangos frescos picados; <br>
			        2 bolachas de água e sal.
			    </td>
			    <td>
			      ½ xícara de chá de leite.
			    </td>

			  </tr>
			</table>

			<p>Terça-Feira</p>
			<table>
			  <tr>
			    <th>Café da Manhã</th>
			    <th>Almoço</th> 
			    <th>Jantar</th>
			  </tr>
			  <tr>
			    <td> 1 xícara de leite integral batido com mamão e mel (o mel está liberado somente para crianças acima de 1 ano de idade);<br>1 fatia pequena de bolo caseiro de laranja.
			 	 </td>
			    <td>2 colheres de sopa de arroz;<br>
		            2 colheres de sopa de feijão;<br>
		            1 hamburguer caseiro assado;<br>
		            Salada de agrião e beterraba com molho de manga (manga, azeite, salsa, alho, cebola e sal); <br>
		           <b>Sobremesa:</b>  1 kiwi.
		        </td> 
			    <td>Purê de batatas e couve-flor com ovos de codorna cozidos e molho de tomates frescos; <br>
			        Couve refogada com abóbora cozida ao dente e ralada; <br>
			        Sobremesa: salada de frutas.
			    </td>
			  </tr>
			  <tr>
			    <th>Lanche da Manhã</th>
			    <th>Lanche da Terde</th> 
			    <th>Ceia</th>
			  </tr>
			  <tr>
			    <td>½ carambola cortada em estrelas;<br>
		            2 torradas com queijo fresco.
		        </td>
			    <td>½ copo de leite;  <br>
		            5 biscoitos de polvilho; <br>
		            ½ goiaba.
		        </td> 
			    <td>½ xícara de chá de leite.</td>
			  </tr>
			</table>

			
			<p>Quarta-Feira</p>
			<table>
			  <tr>
			    <th>Café da Manhã</th>
			    <th>Almoço</th> 
			    <th>Jantar</th>
			  </tr>
			  <tr>
			    <td> 1 copo de frapê de mamão.<br>
                     <i>(Frapê: Leite adicionado à um único tipo de fruta, em uma mistura homogênea.)</i>
                </td>
			    <td>2 colheres de sopa de arroz com ervilhas e cenoura;<br>
			        Iscas de frango grelhadas;<br>
			        Brócolis no vapor;<br>
			        <b>Sobremesa:</b> Laranja.
			    </td> 
			    <td>Panqueca de carne moída com escarola salada de tomate e mandioquinha;<br>
			        <b>Sobremesa:</b> Maçã.
			    </td>
			  </tr>
			  <tr>
			    <th>Lanche da Manhã</th>
			    <th>Lanche da Terde</th> 
			    <th>Ceia</th>
			  </tr>
			  <tr>
			    <td>Queijo fresco picado com melão, tomates cereja e croutons de pão integral torrado.</td>
			    <td>½ copo de suco de abacaxi natural;<br>
		            1 torrada com queijo mussarela derretido e orégano.
		        </td> 
			    <td>½ xícara de chá de leite.</td>
			  </tr>
			</table>

			<p>Quinta-Feira</p>
			<table>
			  <tr>
			    <th>Café da Manhã</th>
			    <th>Almoço</th> 
			    <th>Jantar</th>
			  </tr>
			  <tr>
			    <td>1 prato de mingau de maisena com banana e canela.</td>
			    <td>Macarronada a bolonhesa;<br>
		            Legumes em cubos cozidos no vapor;<br>
		            <b> Sobremesa:</b> Manga picada.
		        </td> 
			    <td>Sopa cremosa de legumes com carne;<br>
		            <b>Sobremesa:</b> Ameixa vermelha fresca.
		        </td>
			  </tr>
			  <tr>
			    <th>Lanche da Manhã</th>
			    <th>Lanche da Terde</th> 
			    <th>Ceia</th>
			  </tr>
			  <tr>
			    <td>½ copo de suco de laranja;<br>
			        2 torradas com ricota temperada com azeite, orégano e cenoura triturada.</p>
			    </td>
			    <td>2 mini pães de queijo caseiros;<br>
		            4 espetinhos de abacaxi e queijo fresco.
		        </td> 
			    <td> ½ xícara de chá de leite.</td>
			  </tr>
			</table>

<br><br><br>
			<p>Sexta-Feira</p>
			<table>
			  <tr>
			    <th>Café da Manhã</th>
			    <th>Almoço</th> 
			    <th>Jantar</th>
			  </tr>
			  <tr>
			    <td>1 copo de leite;<br>
			        ½ sanduíche de pão rico em fibras com creme de amendoim caseiro;<br>
			        morangos cortados ao meio para petiscar.
			    </td>
			    <td>2 colheres de sopa de arroz;<br>
			        ½ filé de pescada cozido no vapor com cenouras baby e vagens ao alho e óleo;<br>
			        Legumes cozidos;<br>
			        <b>Sobremesa:</b> ½ pera.
			    </td> 
			    <td>Caldo de feijão com mandioca, legumes e couve;<br>
		            <b>Sobremesa:</b> 1 caqui.
		        </td>
			  </tr>
			  <tr>
			    <th>Lanche da Manhã</th>
			    <th>Lanche da Terde</th> 
			    <th>Ceia</th>
			  </tr>
			  <tr>
			    <td>½ copo de suco de tangerina natural;<br>
		            ½ sanduíche de queijo.
		        </td>
			    <td>½ copo de suco de maracujá natural;<br>
		            ½ sanduíche de patê de fígado com tomate.
		        </td> 
			    <td> 1 xícara de chá de leite.</td>
			  </tr>
			</table>

		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
