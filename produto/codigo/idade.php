<?php
include "config/config.php";
include "header.php";
?>

<p>
</p>
<div class="container">

 <p>
 </p>
 <!--cria tabela-->
 <div class="panel panel-primary">
   <div class="panel-heading">
   <h2 class="panel-title">Idade</h2>
  </div>
  <div class="panel-body">
    <table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
      <thead>
       <!--Cabeçalho da tabela que sera exibido-->
       <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Idade</th>
      </tr>
    </thead>
    <tbody>


      <!--Replica os registro do banco-->
      <?php
      $mysqli->query("SET NAMES 'utf8'");
      $res = $mysqli->query("SELECT * FROM pessoa LIMIT 1000");
      while ($row = $res->fetch_assoc()):
        ?>
      <tr>
        <td><?php echo $row['IdPessoa'] ?></td>
        <td><?php echo $row['NomePessoa'] ?></td>
        <td><?php $date = new DateTime( '1990-10-11' ); // data de nascimento
$interval = $date->diff( new DateTime() ); // data definida

echo $interval->format( '%Y Anos' ); // 110 Anos, 2 Meses e 2 Dias ?></td>
      </tr>
      <?php
      endwhile;
      ?>
    </tbody>
  </table>     
  <?php
  include "footer.php";
  ?>