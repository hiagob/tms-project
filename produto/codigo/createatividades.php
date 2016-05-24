<?php
include "config/config.php";
include "header.php";
?>
<a href="atividades.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
<?php
if(isset($_POST['bts'])):
  if($_POST['nm']!=null && $_POST['vl']!=null){
    // INSERT INTO "nome da tabela" e os registro que deseja salvar no banco, "?" responsavel por cada registro que o usuario digitou
   $stmt = $mysqli->prepare("INSERT INTO atividade(NomeAtividade, ValorAtividade) VALUES (?,?)");
     //cada 's' representa um registro que sera gravado no banco
   $stmt->bind_param('ss', $nm, $vl);

   $nm = $_POST['nm'];
   $vl = $_POST['vl'];

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
        <strong>Success!</strong> Indicates a successful or positive action. <a href="atividades.php">Home</a>.
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
          <label for="nm">Name</label>
          <input type="text" class="form-control" name="nm" id="nm" required name=nome placeholder="Entre Nome">
        </div>
        <div class="form-group">
         <label for="vl">Valor</label>                                   
         <input type="text" class="form-control" name="vl" id="vl" required="required" placeholder="Entre valor da nota">                                    
       </div>
       
      <button type="submit" name="bts" class="btn btn-default">Submit</button>
    </form>
    <?php
    include "footer.php";
    ?>