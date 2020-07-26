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
  require_once 'class-Adms.php';

  $p = new admin("bd_site","localhost","root","");
   
?>

  <div class="container-fluid titulo-adm" style="font-family: 'Sofia', cursive; font-weight: bold;">
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
      <br>
      <h1 id="AS">Administradores</h1>
      <br>
    </div>
  </div>
  <div class="container-fluid">
    <br>
    <div class="tabpanel">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="nav-item">
          <a href="#adm" class="nav-link active" style="font-size:15pt;color: #797777;" aria-controls="adm" data-toggle="tab" role="tab">Adms</a> 
        </li>
        <li role="presentation" class="nav-item">
          <a href="#normalUser" class="nav-link" style="font-size:15pt;color: #797777;" aria-controls="normalUser" data-toggle="tab" role="tab">Cadastrar</a>
        </li>
      </ul>
      <div class="tab-content">
        <div role="tab-panel" class="tab-pane active container" id="adm">
          <br><br>
          <table class="table">
            <thead class="thead" style="color: #fff; background-color: #4a3980; border-color: #4a3980;">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col" colspan="2">Email</th>
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
                        if($k != "id_adm" && $k != "senha")
                        {
                          echo "<td>".$v."</td>";
                        }
                      }
            ?>
                          <td> 
                          <a href="/nutri_tcc/admin/Adms/edit.php?id_up=<?php echo $dados[$i]['id_adm']; ?>" class="btn btn-warning">Editar</a>
                          <a href="/nutri_tcc/admin/Adms/ADMs.php?id=<?php echo $dados[$i]['id_adm']; ?>" class="btn btn-danger">Excluir</a>
                          </td>
                          <?php
                          echo "</tr>";
                  }  
                }
                else//O BANCO DE DADOS ESTA VAZIO
                {    
                  echo "Ainda não há Adms!";                
                    
                }
                ?>

            </tbody>
          </table>
        </div>

          <?php 

          if (isset($_POST['nome'])) 
          {
              $nome = addslashes($_POST['nome']);
              $email = addslashes($_POST['email']);
              $senha = addslashes($_POST['senha']);
              if (!empty($nome) && !empty($email) && !empty($senha))
              {
                if(!$p->cadastrarPessoa($nome, $email, $senha))
                {
                  echo ("<script>
                        window.alert('Esse cadastro já existe!!!');
                        window.location.href='/nutri_tcc/admin/Adms/ADMs.php';     
                         </script>"

                       ); 
                }
              }
              else
              {
                echo ("<script>
                        window.alert('Preencha todos os campos!!!');
                        window.location.href='/nutri_tcc/admin/Adms/ADMs.php';     
                         </script>"
                      ); 
              } 
              echo "<script>
            window.location.href='/nutri_tcc/admin/Adms/ADMs.php';     
          </script>";             
          }


          ?>

         <div role="tab-panel" class="tab-pane container" id="normalUser">
          <br><br>
         <form method="post">
        <div class="form-group" action="edit.php">
          <label>Nome</label>
          <input type="text" name="nome" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input type="password" name="senha" class="form-control">
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
      </form>
        </div>
      </div>
    </div>
  </div>
  <br> <br> <br><br><br>
  
<?php
  include("../Struc/FOOTER.php"); 
  include("../Struc/script.php");

//Excluir
  if (isset($_GET['id']))
  {
    $id_pessoa = addslashes($_GET['id']);
    $p->excluirPessoa($id_pessoa);
    echo "<script>
            window.location.href='/nutri_tcc/admin/Adms/ADMs.php';     
          </script>";
  }

?>

