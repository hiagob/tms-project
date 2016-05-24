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
      <h2 class="panel-title">Cuidados Com Instrumento</h2>
    </div>
   <div class="panel-body">

     <table  class="display table table-bordered table-striped" cellspacing="0" width="100%">
      <thead>
       <!--Cabeçalho da tabela que sera exibido-->
       <tr class="panel-title">
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      <!--Replica os registro do banco-->
      <?php
      $mysqli->query("SET NAMES 'utf8'");
      $res = $mysqli->query("SELECT * FROM cuidado WHERE statu='Ativo' LIMIT 1000");
      while ($row = $res->fetch_assoc()):
        ?>
      <tr>
        <td><?php echo $row['IdCuidado'] ?></td>
        <td><?php echo $row['NomeCuidado'] ?></td>
      </tr>
      <?php
      endwhile;
      ?>
    </tbody>
  </table>     
  <?php
  include "footer.php";
  ?>