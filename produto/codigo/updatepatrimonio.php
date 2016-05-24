<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
     if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
          $stmt = $mysqli->prepare("UPDATE patrimonio SET NumPatri=?, Tamanho=?, IdMarca=?, IdInstrumento=? WHERE IdPatrimonio=?");
          //cada 's' representa um registro que sera gravado no banco
          $stmt->bind_param('sssss', $nm, $tm, $mr, $ii, $id);
 
          $nm = $_POST['nm'];
          $tm = $_POST['tm'];
          $mr = $_POST['mr'];
          $ii = $_POST['ii'];
          $id = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>location.href='pessoas.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     // responsavel por atualzar a lista que sera exibido
     $res = $mysqli->query("SELECT * FROM patrimonio p, instrumento i, marca m WHERE p.IdInstrumento=i.IdInstrumento && p.IdMarca=m.IdMarca && p.IdPatrimonio=".$_GET['u']);
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
    <input type="hidden" value="<?php echo $row['IdPessoa'] ?>" name="id"/>
    <!-- Cada div representa um campo na tela-->
    <div class="form-group">
      <label for="nm">Patrimonio</label>
      <input type="text" class="form-control" name="nm" id="nm" value="<?php echo $row['NumPatri'] ?>">
    </div>
    <div class="form-group">
      <label for="tm">Tamanho</label>
      <input type="text" class="form-control" name="tm" id="tm" value="<?php echo $row['Tamanho'] ?>">
    </div>
    <div class="form-group">
      <label for="mr">Marca</label>
      <!--menu de seleção-->
      <select class="form-control" id="mr" name="mr"value="<?php echo $row['NomeInstrumento'] ?>" >
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
      </select>
    </div>
    <div class="form-group">
      <label for="ii">Instrumento</label>
      <!--menu de seleção-->
      <select class="form-control" id="ii" name="ii"value="<?php echo $row['NomeInstrumento'] ?>" >
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
    <button type="submit" name="bts" class="btn btn-default">Submit</button>
  </form>
<?php
endif;
include "footer.php";
?>