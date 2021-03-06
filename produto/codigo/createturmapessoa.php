<?php
include "config/config.php";
include "header.php";
?>
<a href="turmasalunos.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
<?php
if(isset($_POST['bts'])):
  if($_POST['tm']!=null && $_POST['al']!=null ){
    // INSERT INTO "nome da tabela" e os registro que deseja salvar no banco, "?" responsavel por cada registro que o usuario digitou
   $stmt = $mysqli->prepare("INSERT INTO turmapessoa(IdTurma, IdPessoa) VALUES (?,?)");
     //cada 's' representa um registro que sera gravado no banco
   $stmt->bind_param('ss', $tm, $al);

   $al = $_POST['al'];
   $tm = $_POST['tm'];

   if($stmt->execute()):
    ?>

  <p>
  </p>
  <div class="container">

   <p>
   </p>
   <!--cria tabela-->
   <div class="panel panel-default">
     <div class="panel-body">

      <p></p>
      <!--Alerta-->
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <strong>Success!</strong> Indicates a successful or positive action. <a href="turmasalunos.php">Home</a>.
      </div>
      <?php
      else:
        ?>
      <p></p>
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <strong>Info!</strong> Indicates a neutral informative change or action.<?php echo $stmt->error; ?>
      </div>
      <?php
      endif;
    } else{
      ?>
      <p></p>
      <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <strong>Warning!</strong> Indicates a warning that might need attention.
      </div>
      <?php
    }
    endif;
    ?>

    <p>
    </p>
    <div class="panel panel-default">
     <div class="panel-body">

      <form role="form" method="post">
        <!-- Cada div representa um campo na tela-->
       <div class="form-group">
         <label for="al">Aluno</label>
         <select class="form-control" name="al" name="al" id="al" required="required">
          <option value="">Selecione o Aluno...</option>
          <!--menu de seleção-->
          <?php
          $pega_aluno = mysql_query("SELECT * FROM pessoa");
          if(mysql_num_rows($pega_aluno) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_aluno)){
              echo '<option value="'.$linha['IdPessoa'].'"> '.$linha['NomePessoa'].'</option>';
            }
          }
          ?>
        </select><br>
      </div>

       <div class="form-group">
         <label for="tm">Turma</label>
         <select class="form-control" name="tm" name="tm" id="tm" required="required">
          <option value="">Selecione o Turma...</option>
          <!--menu de seleção-->
          <?php
          $pega_turma = mysql_query("SELECT * FROM turma");
          if(mysql_num_rows($pega_turma) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_turma)){
              echo '<option value="'.$linha['IdTurma'].'"> '.$linha['NomeTurma'].'</option>';
            }
          }
          ?>
        </select><br>
      </div>

      <button type="submit" name="bts" class="btn btn-default">Submit</button>
    </form>
    <?php
    include "footer.php";
    ?>