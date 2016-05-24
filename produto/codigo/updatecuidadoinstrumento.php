<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
     if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
          $stmt = $mysqli->prepare("UPDATE cuidado SET NomeCuidado=?, statu=? WHERE IdCuidado=?");
          //cada 's' representa um registro que sera gravado no banco
          $stmt->bind_param('sss', $nm, $gd, $id);
 
          $nm = $_POST['nm'];
          $gd = $_POST['gd'];
          $id = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>location.href='cuidadoinstrumento.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     // responsavel por atualzar a lista que sera exibido
     $res = $mysqli->query("SELECT * FROM cuidado WHERE IdCuidado=".$_GET['u']);
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
    <input type="hidden" value="<?php echo $row['IdCuidado'] ?>" name="id"/>
    <!-- Cada div representa um campo na tela-->
    <div class="form-group">
      <label for="nm">Observação</label>
      <input type="text" class="form-control" name="nm" id="nm" value="<?php echo $row['NomeCuidado'] ?>">
    </div>
    <div class="form-group">
      <label for="gd">Gender</label>
      <!--menu de seleção-->
      <select class="form-control" id="gd" name="gd">
        <option><?php echo $row['statu'] ?></option>
        <option>Ativo</option>
        <option>Desativado</option>
      </select>
    </div>
    <button type="submit" name="bts" class="btn btn-default">Submit</button>
  </form>
<?php
endif;
include "footer.php";
?>