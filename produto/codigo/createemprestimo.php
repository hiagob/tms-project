<?php
include "config/config.php";
include "header.php";
?>
<a href="emprestimo.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
<?php
if(isset($_POST['bts'])):
  if($_POST['nm']!=null && $_POST['pt']!=null && $_POST['ii']!=null && $_POST['de']!=null && $_POST['ma']!=null && $_POST['em']!=null){
    // INSERT INTO "nome da tabela" e os registro que deseja salvar no banco, "?" responsavel por cada registro que o usuario digitou
   $stmt = $mysqli->prepare("INSERT INTO emprestimo(IdPessoa, IdPatrimonio, IdInstrumento, DataEmp, IdMarca, emp) VALUES (?,?,?,?,?,?)");
     //cada 's' representa um registro que sera gravado no banco
   $stmt->bind_param('ssssss', $nm, $pt, $ii, $de, $ma, $em);

   $nm = $_POST['nm'];
   $pt = $_POST['pt'];
   $ii = $_POST['ii'];
   $de = $_POST['de'];
   $ma = $_POST['ma'];
   $em = $_POST['em'];

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
        <strong>Success!</strong> Indicates a successful or positive action. <a href="emprestimo.php">Home</a>.
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
         <select class="form-control" name="nm" id="nm" required="required">
          <option value="">Selecione o Aluno...</option>
          <!--menu de seleção-->
          <?php
          $pega_alunno = mysql_query("SELECT * FROM pessoa");
          if(mysql_num_rows($pega_alunno) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_alunno)){
              echo '<option value="'.$linha['IdPessoa'].'"> '.$linha['NomePessoa'].'</option>';
            }
          }
          ?>
        </select><br>
      </div>

      <div class="form-group">
         <label for="pt">Patrimonio</label>
         <select class="form-control" name="pt" id="pt" required="required">
          <option value="">Selecione o Patrimonio...</option>
          <!--menu de seleção-->
          <?php
          $pega_patrimonio = mysql_query("SELECT * FROM patrimonio");
          if(mysql_num_rows($pega_patrimonio) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_patrimonio)){
              echo '<option value="'.$linha['IdPatrimonio'].'"> '.$linha['NumPatri'].'</option>';
            }
          }
          ?>
        </select><br>
      </div>

       <div class="form-group">
         <label for="ii">Instrumento</label>
         <select class="form-control" name="ii" id="ii" required="required">
          <option value="">Selecione o Instrumento...</option>
          <!--menu de seleção-->
          <?php
          $pega_instrumento = mysql_query("SELECT * FROM instrumento");
          if(mysql_num_rows($pega_instrumento) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_instrumento)){
              echo '<option value="'.$linha['IdInstrumento'].'"> '.$linha['NomeInstrumento'].'</option>';
            }
          }
          ?>
        </select><br>
      </div>

      <div class="form-group">
         <label for="de">Nascimento</label>                                   
         <input type="date" class="form-control" name="de" id="de" required="required">                                    
      </div>

        <div class="form-group">
         <label for="ma">Marca</label>
         <select class="form-control" name="ma" id="ma" required="required">
          <option value="">Selecione o Marca...</option>
          <!--menu de seleção-->
          <?php
          $pega_marca = mysql_query("SELECT * FROM marca");
          if(mysql_num_rows($pega_marca) ==0 ){
            echo '<option value=""> Não foram encontrados</option>';
          }else{
            while ($linha = mysql_fetch_array($pega_marca)){
              echo '<option value="'.$linha['IdMarca'].'"> '.$linha['NomeMarca'].'</option>';
            }
          }
          ?>
        </select><br>
      </div>

      <div class="form-group">
      <label for="em">Stato</label>
      <!--menu de seleção-->
      <select class="form-control" id="em" name="em">
        <option>Emprestar</option>
        <option>Manutenção</option>
      </select>
    </div>


      <button type="submit" name="bts" class="btn btn-default">Submit</button>
    </form>
    <?php
    include "footer.php";
    ?>