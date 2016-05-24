<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
     if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
          $stmt = $mysqli->prepare("UPDATE atividade SET NomeAtividade=?, ValorAtividade=? WHERE IdAtividade=?");
          //cada 's' representa um registro que sera gravado no banco
          $stmt->bind_param('sss', $nm, $vl, $id);
 
          $nm = $_POST['nm'];
          $dn = $_POST['vl'];
          $id = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>location.href='pessoas.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     // responsavel por atualzar a lista que sera exibido
     $res = $mysqli->query("SELECT * FROM atividade WHERE IdAtividade=".$_GET['u']);
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
      <input type="text" class="form-control" name="nm" id="nm" required name=nome value="<?php echo $row['NomeAtividade'] ?>">
    </div>
    <div class="form-group">
      <label for="vl">Nascimento</label>
      <input type="text" class="form-control" name="vl" id="vl" required="required" value="<?php echo $row['ValorAtividade'] ?>">

    <button type="submit" name="bts" class="btn btn-default">Submit</button>
  </form>
<?php
endif;
include "footer.php";
?>