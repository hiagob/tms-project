<?php
include "config/config.php";
include "header.php";
?>
<a href="notas.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
<?php
if(isset($_POST['bts'])):
  if($_POST['nm']!=null && $_POST['at']!=null && $_POST['tm']!=null && $_POST['no']!=null ){
    // INSERT INTO "nome da tabela" e os registro que deseja salvar no banco, "?" responsavel por cada registro que o usuario digitou
   $stmt = $mysqli->prepare("INSERT INTO notaaluno(IdAluno, IdAtividade, IdTurma, NotaObt) VALUES (?,?,?,?)");
     //cada 's' representa um registro que sera gravado no banco
   $stmt->bind_param('ssss', $nm, $at, $tm, $no);

   $nm = $_POST['nm'];
   $at = $_POST['at'];
   $tm = $_POST['tm'];
   $no = $_POST['no'];

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
        <strong>Success!</strong> Indicates a successful or positive action. <a href="notas.php">Home</a>.
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
         <label for="nm">Aluno</label>
         <select class="form-control" name="nm" name="nm" id="nm" required="required">
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

    <div class="form-group">
     <label for="at">Atividade</label>
     <select class="form-control" name="at" name="at" id="at" required="required">
      <option value="">Selecione o Atividade...</option>
      <!--menu de seleção-->
      <?php
      $pega_atividade = mysql_query("SELECT * FROM atividade");
      if(mysql_num_rows($pega_atividade) ==0 ){
        echo '<option value=""> Não foram encontrados</option>';
      }else{
        while ($linha = mysql_fetch_array($pega_atividade)){
          echo '<option value="'.$linha['IdAtividade'].'"> '.$linha['NomeAtividade'].' | '.$linha['ValorAtividade'].'</option>';
        }
      }
      ?>
    </select><br>
  </div>

  <div class="form-group">
   <label for="no">Nota obtida</label>                                   
   <input type="text" class="form-control" name="no" id="no" required="required">                                    
 </div>

 <button type="submit" name="bts" class="btn btn-default">Submit</button>
</form>
<?php
include "footer.php";
?>