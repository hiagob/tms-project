<?php
include "header.php";
?>
<?php
if(isset($_POST['bts'])):
  if($_POST['IdTurma']!=null && $_POST['IdPessoa']!=null ){
    // INSERT INTO "nome da tabela" e os registro que deseja salvar no banco, "?" responsavel por cada registro que o usuario digitou
   $stmt = $mysqli->prepare (mysqli_query("INSERT INTO turmaaluno(IdTurma, IdPessoa) VALUES (?,?)"));
     //cada 's' representa um registro que sera gravado no banco
   $stmt->bind_param('ss', $IdTurma, $IdPessoa);

$IdTurma = $_POST['IdTurma']; 
$IdPessoa = $_POST['IdPessoa'] ;

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

<form action="turmasalunos.php" method="POST">
  <div class="form-group">
   <select class="form-control" name="IdTurma" >
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

Selecione os Alunos: Utilize (Ctrl) para selecionar.
<div class="form-group">
  <select class="form-control" name="IdPessoa[]"  multiple="multiple">
    <option value="">Selecione o Alunos...</option>
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
  <button type="submit" name="bts" class="btn btn-default">Submit</button>
</div>
</form>

<?php
include "footer.php";
?>