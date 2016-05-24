<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
     if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
          $stmt = $mysqli->prepare("UPDATE pessoa SET NomePessoa=?, data_nasc=?, Serie=?, IdInstrumento=?, Telefone=?, email=? WHERE IdPessoa=?");
          //cada 's' representa um registro que sera gravado no banco
          $stmt->bind_param('sssssss', $nm, $dn, $sr, $ii, $tl, $em, $id);
 
          $nm = $_POST['nm'];
          $dn = $_POST['dn'];
          $sr = $_POST['sr'];
          $ii = $_POST['ii'];
          $tl = $_POST['tl'];
          $em = $_POST['em'];
          $id = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>location.href='pessoas.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     // responsavel por atualzar a lista que sera exibido
     $res = $mysqli->query("SELECT * FROM pessoa p, instrumento i WHERE p.IdInstrumento=i.IdInstrumento && p.IdPessoa=".$_GET['u']);
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
      <label for="nm">Name</label>
      <input type="text" class="form-control" name="nm" id="nm" required name=nome value="<?php echo $row['NomePessoa'] ?>">
    </div>
    <div class="form-group">
      <label for="dn">Nascimento</label>
      <input type="date" class="form-control" name="dn" id="dn" required="required" value="<?php echo $row['data_nasc'] ?>">
    </div>
    <div class="form-group">
      <label for="sr">Escolaridade</label>
      <input type="text" class="form-control" name="sr" id="sr" required="required" value="<?php echo $row['Serie'] ?>">
    </div>
    <div class="form-group">
      <label for="tl">Telefone (Formato: xx xxxx-xxxx):</label>
      <input type="tel" class="form-control" name="tl" id="tl" pattern="^\d{2} \d{4}-\d{4}$" required value="<?php echo $row['Telefone'] ?>">
    </div>
    <div class="form-group">
      <label for="em">Email (Formato: nome@provedor.com):</label>
      <input type="email" class="form-control" name="em" id="em" required name=email value="<?php echo $row['email'] ?>">
    </div>
    <div class="form-group">
      <label for="ii">Instrumento</label>
      <!--menu de seleção-->
      <select class="form-control" id="ii" name="ii" required="required" value="<?php echo $row['NomeInstrumento'] ?>" >
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