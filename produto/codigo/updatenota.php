<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
     if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
          $stmt = $mysqli->prepare("UPDATE notaaluno SET IdPessoa=?, IdAtividade=?, IdTurma=?, NotaObt=? WHERE IDna=?");
          //cada 's' representa um registro que sera gravado no banco
          $stmt->bind_param('sssss', $nm, $at, $tm, $nt, $id);
 
          $nm = $_POST['nm'];
          $at = $_POST['at'];
          $tm = $_POST['tm'];
          $ii = $_POST['nt'];
          $id = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>location.href='notas.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     // responsavel por atualzar a lista que sera exibido
     $res = $mysqli->query("SELECT * FROM notaaluno na, turmapessoa tp, pessoa p, atividade a, turma t WHERE tp.IdPessoa = p.IdPessoa && tp.IdTurma = t.IdTurma && na.IdTurma=t.IdTurma && na.IdAtividade = a.IdAtividade && na.IdAluno = p.IdPessoa && na.IDna=".$_GET['u']);
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
    <input type="hidden" value="<?php echo $row['IDna'] ?>" name="id"/>
    <!-- Cada div representa um campo na tela-->
    <div class="form-group">
      <label for="nm">Name</label>
      <input type="text" class="form-control" name="nm" id="nm" readonly="readonly" name=nome value="<?php echo $row['IdPessoa'] ?>">
    </div>
    <div class="form-group">
      <label for="tm">Turma</label>
      <input type="text" class="form-control" name="tm" id="tm" readonly="readonly" value="<?php echo $row['IdTurma'] ?>">
    </div>
    <div class="form-group">
      <label for="at">Atividade</label>
      <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['IdAtividade'] ?>">
    </div>

    <div class="form-group">
      <label for="nt">Nota:</label>
      <input type="text" class="form-control" name="nt" id="nt" value="<?php echo $row['NotaObt'] ?>">
    </div>

    <button type="submit" name="bts" class="btn btn-default">Submit</button>
  </form>
<?php
endif;
include "footer.php";
?>