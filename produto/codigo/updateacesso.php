<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):
     if(isset($_POST['bts'])):
          // UPDATE "nome da tabela" e os registro que deseja alterar no banco
          $stmt = $mysqli->prepare("UPDATE login SET Usuario=?, Senha=? WHERE IdLogin=?");
          //cada 's' representa um registro que sera gravado no banco
          $stmt->bind_param('sss', $nm, $sh, $id);
 
          $nm = $_POST['nm'];
          $sh = $_POST['sh'];
          $id = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>location.href='acesso.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     // responsavel por atualzar a lista que sera exibido
     $res = $mysqli->query("SELECT * FROM login WHERE IdLogin=".$_GET['u']);
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
    <input type="hidden" value="<?php echo $row['IdLogin'] ?>" name="id"/>
    <!-- Cada div representa um campo na tela-->
    <div class="form-group">
      <label for="nm">Name</label>
      <input type="text" class="form-control" name="nm" id="nm" value="<?php echo $row['Usuario'] ?>">
    </div>
    <div class="form-group">
      <label for="sh">Senha</label>
      <input type="password" class="form-control" name="sh" id="sh" value="<?php echo $row['Senha'] ?>">
    </div>

    <button type="submit" name="bts" class="btn btn-default">Submit</button>
  </form>
<?php
endif;
include "footer.php";
?>