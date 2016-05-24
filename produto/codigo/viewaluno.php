<?php
include "config/config.php";
include "header.php";
if(isset($_GET['u'])):

     // responsavel por atualzar a lista que sera exibido
 $res = $mysqli->query("SELECT * FROM pessoa WHERE IdPessoa=".$_GET['u']);
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
            <input type="text" class="form-control" name="nm" id="nm" readonly="readonly" name=nome value="<?php echo $row['NomePessoa'] ?>">
          </div>
          <div class="form-group">
            <label for="tm">Data Nascimento</label>
            <input type="data" class="form-control" name="tm" id="tm" readonly="readonly" value="<?php echo $row['data_nasc'] ?>">
          </div>
          <div class="form-group">
            <label for="at">Sexo</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['Sexo'] ?>">
          </div>

          <div class="form-group">
            <label for="at">Cidade onde nasceu</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['CidadeNasc'] ?>">
          </div>

          <div class="form-group">
            <label for="at">Cidade onde nasceu</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['CpfAlun'] ?>">
          </div>

          <div class="form-group">
            <label for="at">Passaporte</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['Passaporte'] ?>">
          </div>

          <label>Dados Familiares</label><br>

          <div class="form-group">
            <label for="at">Endereço</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['CidadeNasc'] ?>">
          </div>

          <div class="form-group">
          <label for="at">Cep</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['Cep'] ?>">
          </div>

          <div class="form-group">
          <label for="at">Cep</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['Cep'] ?>">
          </div>

          <div class="form-group">
          <label for="at">Cidade</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['Cidade'] ?>">
          </div>

          <div class="form-group">
          <label for="at">Telefone Residencial</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['TelRes'] ?>">
          </div>

          <div class="form-group">
          <label for="at">Nome da Mae ou Responsavel</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['NomeMae'] ?>">
          </div>

          <div class="form-group">
          <label for="at">CPF da mae</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['CpfMae'] ?>">
          </div>

          <div class="form-group">
          <label for="at">Telefone da Mae</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['TelMae'] ?>">
          </div>

          <div class="form-group">
          <label for="at">E-mail da mae</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['EmailMae'] ?>">
          </div>

          <div class="form-group">
          <label for="at">E-mail da mae</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['IdentMae'] ?>">
          </div>

          <div class="form-group">
          <label for="at">Nome do pai ou responsavel</label>
            <input type="text" class="form-control" name="at" id="at" readonly="readonly" value="<?php echo $row['NomePai'] ?>">
          </div>

        </form>
        <?php
        endif;
        include "footer.php";
        ?>