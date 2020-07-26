<?php 

session_start();
if(!isset($_SESSION['id_adm']))
{
  header("location: /nutri_tcc/admin/");
  exit;
}

include("../Struc/head.php"); 
include("../Struc/Menu_admin.php");
require_once 'class-pagination.php';
require_once '../class-logar.php';
require_once 'class-MV.php';

$p = new MV("bd_site","localhost","root","");

?>

<div class="container-fluid titulo-MV">
  <div class="container wow fadeIn " data-wow-duration="1s" data-wow-delay=".3s">
    <br>
    <h1 id="MV">Mito ou Verdade</h1>
    <br>
  </div>
</div>
<div class="container-fluid">
  <br>
  <div class="tabpanel">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="nav-item">
        <a href="#as" class="nav-link active" style="font-size:15pt;color: #797777;" aria-controls="adm" data-toggle="tab" role="tab">MV</a> 
      </li>
      <li role="presentation" class="nav-item">
        <a href="#cds" class="nav-link" style="font-size:15pt;color: #797777;" aria-controls="normalUser" data-toggle="tab" role="tab">Cadastrar</a>
      </li>
    </ul>
    <div class="tab-content">
      <div role="tab-panel" class="tab-pane active container" id="as">
        <br><br>
        <div class="mv">

          <?php $dados = $p->buscarDados();?>

           <?php
           //Pagination
            $i = 1;
            $cmd_pg = $pdo->query("SELECT * FROM tbmv");
            $count = $cmd_pg->rowCount();
            $calculate = ceil(($count/100)*10);
            
         ?>

          <?php foreach ($dados as $mv) :?>

            <a href="" data-toggle="modal" data-target="#MV<?= $mv["id_MitoVdd"];?>">
              <div class="card card-MV2 wow fadeIn mv1"style="text-align: center;"  data-wow-duration="1s" data-wow-delay="0.6s"> 
                <div class="card-body">  
                  <h5 class="card-title">Mito ou Verdade</h5>    
                  <p class="card-text"><?= $mv["Assunto"];?></p>    
                </div>
              </div>
            </a>  

            <!-- Modal -->
            <div class="modal fade" id="MV<?= $mv["id_MitoVdd"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <?php if ($mv["Mito_Vdd"] == "Mito"):?>
                    <div class="modal-header" style="background: #ca3034; color: #fff;">
                      <h5 class="modal-title" id="exampleModalLabel"><?= $mv["Mito_Vdd"];?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php else: ?>
                      <div class="modal-header" style="background: rgb(0, 57, 90); color: #fff;">
                        <h5 class="modal-title" id="exampleModalLabel">Verdade</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php endif; ?>
                    <div class="modal-body text-justify p-MV2"><?= $mv["Contexto"];?></div>
                    <div class="modal-footer">
                      <a href="/nutri_tcc/admin/MV/edit.php?id_up=<?=  $mv['id_MitoVdd']; ?>" class="btn btn-warning">
                        Editar
                      </a>
                      <a href="/nutri_tcc/admin/MV/MVadmin.php?id=<?= $mv['id_MitoVdd'];  ?>" class="btn btn-danger">
                        Excluir
                      </a>  
                    </div>  
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
                      echo "
                       <a class='page-link' href='?page=$page_back' aria-label='Previous'>
                         <span aria-hidden='true'>&laquo;</span>
                       </a>
                      ";
                    }
                    echo "</li>";

                    while ($i <= $calculate) {
                      echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
                      $i++;
                    }

                    echo "<li class='page-item'>";   
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


        <?php 

        if (isset($_POST['Assunto'])) 
        {
          $assunto = addslashes($_POST['Assunto']);
          $mito_vdd = addslashes($_POST['Mito_Vdd']);
          $contexto = addslashes($_POST['Contexto']);

          if (!empty($assunto) && !empty($mito_vdd) && !empty($contexto))
          {
            if(!$p->cadastrarPessoa($assunto, $mito_vdd, $contexto))
            {
              echo ("<script>
                window.alert('Esse cadastro já existe!!!');
                window.location.href='/nutri_tcc/admin/MV/MVadmin.php';     
                </script>"

              ); 
            }
          }
          else
          {
            echo ("<script>
              window.alert('Preencha todos os campos!!!');
              window.location.href='/nutri_tcc/admin/MV/MVadmin.php';     
              </script>"
            ); 
          } 
          echo "<script>
          window.location.href='/nutri_tcc/admin/MV/MVadmin.php';     
          </script>";             
        }


        ?>

        <div role="tab-panel" class="tab-pane container" id="cds">
          <br><br>
          <form method="post">
            <div class="form-group">
              <label>Assunto</label>
              <input type="text" name="Assunto" class="form-control">
            </div>
            <div class="form-group">
              <label>Mito ou Verdade?</label>
              <input type="text" name="Mito_Vdd" class="form-control">
            </div>
            <div class="form-group">
              <label >Contexto</label>
              <textarea class="form-control" name="Contexto"></textarea>
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="Cadastrar" >
          </form>
        </div>

      </div>
    </div>
  </div>

  <br><br><br><br><br>

  <?php

  if (isset($_GET['id']))
  {
    $id_pessoa = addslashes($_GET['id']);
    $p->excluirPessoa($id_pessoa);
    echo "<script>
    window.location.href='/nutri_tcc/admin/MV/MVadmin.php';     
    </script>";
  }



  include("../Struc/FOOTER.php"); 
  include("../Struc/script.php");
  ?>
