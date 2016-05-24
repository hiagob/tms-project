<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
     if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
          $stmt = $mysqli->prepare("UPDATE turma SET NomeTurma=?, IdInstrutor=? WHERE IdTurma=?");
          //cada 's' representa um registro que sera gravado no banco
          $stmt->bind_param('sss', $nm, $it, $id);
 
          $nm = $_POST['nm'];
          $it = $_POST['it'];
          $id = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>location.href='turmas.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     // responsavel por atualzar a lista que sera exibido
     $res = $mysqli->query("SELECT * FROM turma t, instrutor i WHERE t.IdInstrutor=i.IdInstrutor && t.IdTurma=".$_GET['u']);
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
    <input type="hidden" value="<?php echo $row['IdTurma'] ?>" name="id"/>
    <!-- Cada div representa um campo na tela-->
    <div class="form-group">
      <label for="nm">Name</label>
      <input type="text" class="form-control" name="nm" id="nm" required name=nome value="<?php echo $row['NomeTurma'] ?>">
    </div>   
    <div class="form-group">
      <label for="it">Instrutor</label>
      <!--menu de seleção-->
      <select class="form-control" id="it" name="it" required="required" value="<?php echo $row['NomeInstrutor'] ?>" >
        <!--menu de seleção-->
          <?php
          $pega_instrutor = mysql_query("SELECT * FROM turma t, instrutor i WHERE t.IdInstrutor=i.IdInstrutor");
          if(mysql_num_rows($pega_instrutor) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_instrutor)){
              echo '<option value="'.$linha['IdInstrutor'].'"> '.$linha['NomeInstrutor'].'</option>';
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