<?php 

   session_start();
  if(!isset($_SESSION['id_adm']))
  {
      header("location: /nutri_tcc/admin/");
      exit;
  }

  include("../Struc/head.php"); 
  include("../Struc/Menu_admin.php");
  require_once '../class-logar.php';
  require_once 'class-FC.php';

  $p = new FC("bd_site","localhost","root","");
  
?>

<div class="container-fluid titulo-comentario" style="font-family: 'Sofia', cursive; font-weight: bold;">
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
      <br>
      <h1 id="AS">COMENTARIOS</h1>
      <br>
    </div>
  </div>
  <br><br>
  <div class="container-fluid ">
    <div class="container">
      <table class="table">
          <thead class="thead" style="color: #fff; background-color: #1b5839;">
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Assunto</th>
              <th scope="col" colspan="2">Comentario</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $dados = $p->buscarDados();
              if (count($dados) > 0)//Tem Pessoa no banco de daods 
              {
                for ($i=0; $i < count($dados); $i++)
                { 
                  echo "<tr>";
                  foreach ($dados[$i] as $k => $v) 
                  {
                    if($k != "id_fale")
                    {
                      echo "<td>".$v."</td>";
                    }
                  }
                  ?>
                  <td> 
                    <a href="/nutri_tcc/admin/FaleConosco/FC.php?id=<?php echo $dados[$i]['id_fale']; ?>" class="btn btn-danger">Excluir</a>
                  </td>
                  <?php
                  echo "</tr>";
                }
            
                
              }
              else//O BANCO DE DADOS ESTA VAZIO
              {
                ?>
                <div class="aviso">
                  <h4>Ainda não há pessoas cadastradas!</h4>
                </div>
                
                <?php
              }
                ?>
            </tbody>

      </table>
    </div>
  </div>

  <br> <br> <br><br><br><br><br><br>
  
<?php
  include("../Struc/FOOTER.php"); 
  include("../Struc/script.php");

   if (isset($_GET['id']))
  {
    $id_comentario = addslashes($_GET['id']);
    $p->excluirPessoa($id_comentario);
    echo "<script>
            window.location.href='/nutri_tcc/admin/FaleConosco/FC.php';     
          </script>";
  }


?>
