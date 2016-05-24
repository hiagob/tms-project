<?php
include "config/config.php";
include "header.php";
?>
<a href="pessoas.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
<?php
if(isset($_POST['bts'])):
  if($_POST['nm']!=null && $_POST['dn']!=null && $_POST['sr']!=null && $_POST['ii']!=null && $_POST['tl']!=null && $_POST['em']!=null){
    // INSERT INTO "nome da tabela" e os registro que deseja salvar no banco, "?" responsavel por cada registro que o usuario digitou
   $stmt = $mysqli->prepare("INSERT INTO pessoa(NomePessoa, data_nasc, Serie, IdInstrumento, Telefone, email) VALUES (?,?,?,?,?,?)");
     //cada 's' representa um registro que sera gravado no banco
   $stmt->bind_param('ssssss', $nm, $dn, $sr, $ii, $tl, $em);

   $nm = $_POST['nm'];
   $dn = $_POST['dn'];
   $sr = $_POST['sr'];
   $ii = $_POST['ii'];
   $tl = $_POST['tl'];
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
        <strong>Success!</strong> Indicates a successful or positive action. <a href="pessoas.php">Home</a>.
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
          <input type="text" class="form-control" name="nm" id="nm" required name=nome placeholder="Enter Name">
        </div>
        <div class="form-group">
         <label for="dn">Nascimento</label>                                   
         <input type="date" class="form-control" name="dn" id="dn" required="required">                                    
       </div>
       <div class="form-group">
         <label for="tl">Telefone (Formato: xx xxxx-xxxx):</label>                                   
         <input type="tel" class="form-control" name="tl" id="tl" pattern="^\d{2} \d{4}-\d{4}$" required>                                    
       </div>
       <div class="form-group">
         <label for="em">Email (Formato: nome@provedor.com):</label>                                   
         <input type="email" class="form-control" name="em" id="em" required name=email>                                    
       </div>
       <div class="form-group">
         <label for="sr">Escolaridade</label>                                   
         <input type="text" class="form-control" name="sr" id="sr" required="required">                                    
       </div>
       <div class="form-group">
         <label for="ii">Instrumento</label>
         <select class="form-control" name="ii" name="ii" id="ii" required="required">
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
      <button type="submit" name="bts" class="btn btn-default">Submit</button>
    </form>
    <?php
    include "footer.php";
    ?>