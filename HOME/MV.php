<?php
  require('admin/Struc/conexao-bdLogin.php');
  $sql = "SELECT * FROM tbmv";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $mvs = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container-fluid titulo-MV">
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
    <br>
    <h1 id="MV">Mito ou Verdade</h1>
    <hr style="background-color: #fff">
    <br>
  </div>
</div>

<div class="container-fluid cont-MV wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="text-align: center;">
  <div class="cont-MV2">  
    <br><br><br>
    <div class="container">
      <p class="text-justify p-MV">Nesta seção, respondemos algumas dúvidas frequentes sobre determinados alimentos e hábitos de consumo, além de desvendar algumas crenças populares existentes em torno desses assuntos.</p>

      <div class="mv">
        <?php foreach ($mvs as $mv): ?>
        <?php if ($mv->id_MitoVdd <= 9 ):?>
          <div class="card card-MV wow fadeIn mv1"style="text-align: center;"  data-wow-duration="1s" data-wow-delay="0.6s"> 
            <div class="card-body">  
              <h5 class="card-title">Mito ou Verdade</h5>    
              <p class="card-text"><?=  $mv->Assunto;?></p> 
              <div class="bnt-card-mv"> 
                <a href="" class="btn btn-MV" data-toggle="modal" data-target="#M<?= $mv->id_MitoVdd;?>">Mito</a>   
                <a href="" class="btn btn-MV" data-toggle="modal" data-target="#V<?= $mv->id_MitoVdd;?>">Verdade</a>  
              </div> 
            </div>
          </div>
        <?php endif; ?>

        <!-- Modal MITO-->
        <div class="modal fade" id="M<?= $mv->id_MitoVdd;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <?php if ($mv->Mito_Vdd == "Mito"):?>
                <div class="modal-header" style="background: #ca3034; color: #fff;">
                  <h5 class="modal-title" id="exampleModalLabel"><?= $mv->Mito_Vdd;?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-justify p-MV2"><?= $mv->Contexto;?></div> 
                <div class="modal-footer" style="text-align: center;display: block; font-size: 16pt; color:rgb(0, 57, 90); ">
                  <p>Parabens!!!! Você <strong>ACERTOU</strong></p>
                </div> 
                <?php else: ?>
                  <div class="modal-header" style="background: rgb(0, 57, 90); color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel">Verdade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-justify p-MV2"><?= $mv->Contexto;?></div> 
                  <div class="modal-footer" style="text-align: center;display: block; font-size: 16pt;color:#ca3034;">
                    <p>Xiiiiiiiiii!!!! Você <strong>ERROU</strong></p>
                  </div> 
              <?php endif; ?>  
            </div>
          </div>
        </div>

        <!-- Modal VERDADE-->
        <div class="modal fade" id="V<?= $mv->id_MitoVdd;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <?php if ($mv->Mito_Vdd == "Mito"):?>
                <div class="modal-header" style="background: #ca3034; color: #fff;">
                  <h5 class="modal-title" id="exampleModalLabel"><?= $mv->Mito_Vdd;?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-justify p-MV2"><?= $mv->Contexto;?></div> 
                <div class="modal-footer" style="text-align: center;display: block; font-size: 16pt;color:#ca3034;">
                  <p>Xiiiiiiiiii!!!! Você <strong>ERROU</strong></p>
                </div> 
              <?php else: ?>
                  <div class="modal-header" style="background: rgb(0, 57, 90); color: #fff;">
                    <h5 class="modal-title" id="exampleModalLabel">Verdade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-justify p-MV2"><?= $mv->Contexto;?></div> 
                  <div class="modal-footer" style="text-align: center;display: block; font-size: 16pt; color:rgb(0, 57, 90); ">
                    <p>Parabens!!!! Você <strong>ACERTOU</strong></p>
                  </div>
              <?php endif; ?>  
            </div>
          </div>
        </div>
      <?php endforeach; ?>  
      </div>
    </div>    
  </div>

  <div class="container cont-button1" style="text-align:center;">
    <a href="/Nutri_TCC/pag/MV.php?page=1" class="btn btn-MV">Saiba +</a>
  </div>
  <br><br><br>
</div>
</div>
