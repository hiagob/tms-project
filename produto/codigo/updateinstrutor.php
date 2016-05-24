<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
     if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
          $stmt = $mysqli->prepare("UPDATE instrutor SET NomeInstrutor=? WHERE IdInstrutor=?");
          //cada 's' representa um registro que sera gravado no banco
          $stmt->bind_param('ss', $nm, $id);
 
          $nm = $_POST['nm'];
          $id = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>location.href='instrutor.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     // responsavel por atualzar a lista que sera exibido
     $res = $mysqli->query("SELECT * FROM instrutor WHERE IdInstrutor=".$_GET['u']);
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
    <input type="hidden" value="<?php echo $row['IdInstrutor'] ?>" name="id"/>
    <!-- Cada div representa um campo na tela-->
    <div class="form-group">
      <label for="nm">Name</label>
      <input type="text" class="form-control" name="nm" id="nm" value="<?php echo $row['NomeInstrutor'] ?>">
    </div>
    <button type="submit" name="bts" class="btn btn-default">Submit</button>
  </form>
<?php
endif;
include "footer.php";
?>