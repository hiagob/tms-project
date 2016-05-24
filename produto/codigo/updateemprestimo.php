<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
 if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
  $stmt = $mysqli->prepare("UPDATE emprestimo SET IdPessoa=?, IdPatrimonio=?, IdInstrumento=?, DataEmp=?, IdMarca=?, emp=? WHERE IdEmprestimo=?");
          //cada 's' representa um registro que sera gravado no banco
$stmt->bind_param('sssssss', $nm, $pt, $ii, $de, $ma, $em, $id);

$nm = $_POST['nm'];
$pt = $_POST['pt'];
$ii = $_POST['ii'];
$de = $_POST['de'];
$ma = $_POST['ma'];
$em = $_POST['em'];
$id = $_POST['id'];

if($stmt->execute()):
 echo "<script>location.href='emprestimo.php'</script>";
else:
 echo "<script>alert('".$stmt->error."')</script>";
endif;
endif;
     // responsavel por atualzar a lista que sera exibido
$res = $mysqli->query("SELECT * FROM emprestimo e, instrumento i, marca m, pessoa p, patrimonio pt WHERE e.IdInstrumento=i.IdInstrumento && e.IdPatrimonio=pt.IdPatrimonio && e.IdMarca=m.IdMarca && e.IdPessoa=p.IdPessoa && e.IdEmprestimo=".$_GET['u']);
$row = $res->fetch_assoc();
?>

<p>
</p>
<div class="container">

 <p>
 </p>
 <!--cria tabela-->
 <div class="panel panel-default">
   <div class="panel-body">

     <p>
     </p>
     <div class="panel panel-default">
       <div class="panel-body">

        <form role="form" method="post">
          <input type="hidden" value="<?php echo $row['IdEmprestimo'] ?>" name="id"/>
          <!-- Cada div representa um campo na tela-->
          <div class="form-group">
           <label for="nm">Aluno</label>
           <select class="form-control" name="nm" id="nm" required="required" value="<?php echo $row['NomePessoa'] ?>">
            <!--menu de seleção-->
            <?php
            $pega_alunno = mysql_query("SELECT * FROM pessoa");
            if(mysql_num_rows($pega_alunno) ==0 ){
              echo '<option value=""> Não foram encontrados</option>';
            }else{
              while ($linha = mysql_fetch_array($pega_alunno)){
                echo '<option value="'.$linha['IdPessoa'].'"> '.$linha['NomePessoa'].'</option>';
              }
            }
            ?>
          </select><br>
        </div>

        <div class="form-group">
         <label for="pt">Patrimonio</label>
         <select class="form-control" name="pt" id="pt" required="required" value="<?php echo $row['NumPatri'] ?>">
          <!--menu de seleção-->
          <?php
          $pega_patrimonio = mysql_query("SELECT * FROM patrimonio");
          if(mysql_num_rows($pega_patrimonio) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_patrimonio)){
              echo '<option value="'.$linha['IdPatrimonio'].'"> '.$linha['NumPatri'].'</option>';
            }
          }
          ?>
        </select><br>
      </div>

      <div class="form-group">
        <label for="ii">Instrumento</label>
        <!--menu de seleção-->
        <select class="form-control" id="ii" name="ii" required="required" value="<?php echo $row['NomeInstrumento'] ?>">
          <!--menu de seleção-->
          <?php
          $pega_instrumento = mysql_query("SELECT * FROM instrumento");
          if(mysql_num_rows($pega_instrumento) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_instrumento)){
              echo '<option value="'.$linha['IdInstrumento'].'"> '.$linha['NomeInstrumento'].'</option>';
            }
          }
          ?>
        </select>
      </div>

      <div class="form-group">
       <label for="de">Data Emprestimo</label>                                   
       <input type="date" class="form-control" name="de" id="de" required="required" value="<?php echo $row['DataEmp'] ?>">                                    
     </div>

     <div class="form-group">
       <label for="ma">Marca</label>
       <select class="form-control" name="ma" id="ma" required="required" value="<?php echo $row['NomeMarca'] ?>">
        <!--menu de seleção-->
        <?php
        $pega_marca = mysql_query("SELECT * FROM marca");
        if(mysql_num_rows($pega_marca) ==0 ){
          echo '<option value=""> Não foram encontrados</option>';
        }else{
          while ($linha = mysql_fetch_array($pega_marca)){
            echo '<option value="'.$linha['IdMarca'].'"> '.$linha['NomeMarca'].'</option>';
          }
        }
        ?>
      </select><br>
    </div>

    <div class="form-group">
      <label for="em">Stato</label>
      <!--menu de seleção-->
      <select class="form-control" id="em" name="em">
        <option>Emprestar</option>
        <option>Manutenção</option>
      </select>
    </div>
    
    

    <button type="submit" name="bts" class="btn btn-default">Submit</button>
  </form>
  <?php
  endif;
  include "footer.php";
  ?>