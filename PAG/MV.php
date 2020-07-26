<?php
include('../admin/MV/class-MV.php');

$p = new MV("bd_site","localhost","root","");

include("Struc/head.php");
include("Struc/MENU_pag.php");
include("Struc/class-pagination.php");
?>

<div class="container-fluid titulo-MV">
	<div class="container wow fadeIn " data-wow-duration="1s" data-wow-delay=".3s">
		<br>
		<h1 id="MV">Mito ou Verdade</h1>
		<br>
	</div>
</div>

<div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
	<div class="container">
		<br><br>
		<p class="text-justify txt-sa">Nesta seção, respondemos algumas dúvidas frequentes sobre determinados alimentos e hábitos de consumo, além de desvendar algumas crenças populares existentes em torno desses assuntos.</p>

		<div class="mv">

		<?php
		   $dados = $p->buscarDados();

			//PAGINATION
            $i = 1;
            $cmd_pg = $pdo->query("SELECT * FROM tbmv");
            $count = $cmd_pg->rowCount();
            $calculate = ceil(($count/100)*10);
            
         ?>

		<?php foreach ($dados as $mv) :?>

            <div class="card card-MV wow fadeIn mv1"style="text-align: center;"  data-wow-duration="1s" data-wow-delay="0.6s"> 
            <div class="card-body">  
              <h5 class="card-title">Mito ou Verdade</h5>    
              <p class="card-text"><?= $mv["Assunto"];?></p>  
              <div class="bnt-card-mv">
                <a href="" class="btn btn-MV" data-toggle="modal" data-target="#M<?= $mv["id_MitoVdd"];?>">Mito</a>
                <a href="" class="btn btn-MV" data-toggle="modal" data-target="#V<?= $mv["id_MitoVdd"];?>">Verdade</a>
              </div>
            </div>
          </div>
        

        <!-- Modal MITO -->
        <div class="modal fade" id="M<?= $mv["id_MitoVdd"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <?php if ($mv["Mito_Vdd"] == "Mito"):?>
                <div class="modal-header" style="background: #ca3034; color: #fff;">
                  <h5 class="modal-title" id="exampleModalLabel"><?= $mv["Mito_Vdd"];?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-justify p-MV2"><?= $mv["Contexto"];?></div> 
                <div class="modal-footer animated bounceInDown" data-wow-duration="1s" data-wow-delay="2s" style="text-align: center;display: block; font-size: 16pt; color:rgb(0, 57, 90); ">
                  <p>Parabens!!!! Você <strong>ACERTOU</strong></p>
                </div>
                <?php else: ?>
                  <div class="modal-header" style="background: rgb(0, 57, 90); color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel">Verdade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-justify p-MV2"><?= $mv["Contexto"];?></div> 
                  <div class="modal-footer animated bounceInDown" data-wow-duration="1s" data-wow-delay=".8s" style="text-align: center;display: block; font-size: 16pt;color:#ca3034;">
                    <p>Xiiiiiiiiii!!!! Você <strong>ERROU</strong></p>
                  </div>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <!-- Modal VERDADE -->
        <div class="modal fade" id="V<?= $mv["id_MitoVdd"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <?php if ($mv["Mito_Vdd"] == "Mito"):?>
                <div class="modal-header" style="background: #ca3034; color: #fff;">
                  <h5 class="modal-title" id="exampleModalLabel"><?= $mv["Mito_Vdd"];?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-justify p-MV2"><?= $mv["Contexto"];?></div> 
                <div class="modal-footer animated bounceInDown" data-wow-duration="1s" data-wow-delay=".8s" style="text-align: center;display: block; font-size: 16pt;color:#ca3034;">
                  <p>Xiiiiiiiiii!!!! Você <strong>ERROU</strong></p>
                </div>
                <?php else: ?>
                  <div class="modal-header" style="background: rgb(0, 57, 90); color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel">Verdade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-justify p-MV2"><?= $mv["Contexto"];?></div> 
                  <div class="modal-footer animated bounceInDown" data-wow-duration="1s" data-wow-delay=".8s" style="text-align: center;display: block; font-size: 16pt; color:rgb(0, 57, 90);">
                    <p>Parabens!!!! Você <strong>ACERTOU</strong></p>
                  </div>
              <?php endif; ?>
            </div>
          </div>
        </div>   
      <?php endforeach; ?>	
		</div>

		<nav aria-label="Page navigation example">
			<ul class="pagination">
		    <?php  
              $page_back = $_GET['page'] - 1;
              $page_go = $_GET['page'] + 1;

             echo "<li class='page-item'>  ";   
	              if(@$_GET['page'] != 0 && @$_GET['page'] != 1 ){
	                 echo "<a class='page-link' href='?page=$page_back' aria-label='Previous'>
				        <span aria-hidden='true'>&laquo;</span>
				      </a>";
	              }
			 echo "</li>";


              while ($i <= $calculate) {
              	 echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
                  $i++;
               }

              echo "<li class='page-item'>  ";   
	              if($_GET['page'] < $calculate){
	                 echo "<a class='page-link' href='?page=$page_go' aria-label='Next'>
				        <span aria-hidden='true'>&raquo;</span>
				      </a>";
	              }
			  echo "</li>";
            ?>
			  
				  </ul>
				</nav>

	</div>
	<br><br>
</div>
	<br><br>

<?php
include("VT.php");
include("Struc/FOOTER.php");
include("Struc/script.php");
?>  