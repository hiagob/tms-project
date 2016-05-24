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
   <h2 class="panel-title">Cuidado Instrumento</h2>
  </div>
  <div class="panel-body">

    <p>
      <a href="createcuidadoinstrumento.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>

    </p>
    <table id="datatables" class="display table table-bordered table-striped" cellspacing="0" width="100%">
      <thead>
       <!--Cabeçalho da tabela que sera exibido-->
       <tr>
        <th>ID</th>
        <th>Observação</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!--Replica os registro do banco-->
      <?php
      $mysqli->query("SET NAMES 'utf8'");
      $res = $mysqli->query("SELECT * FROM cuidado LIMIT 1000");
      while ($row = $res->fetch_assoc()):
        ?>
      <tr>
        <td><?php echo $row['IdCuidado'] ?></td>
        <td><?php echo $row['NomeCuidado'] ?></td>
        <td><?php echo $row['statu'] ?></td>

        <!--Editar e excluir registro do banco-->
        <td>
          <a href="updatecuidadoinstrumento.php?u=<?php echo $row['IdCuidado'] ?>" class="btn btn-success"><span class=" btn-md glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="deletecuidadoinstrumento.php?d=<?php echo $row['IdCuidado'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
        </td>
      </tr>
      <?php
      endwhile;
      ?>
    </tbody>
  </table>     
  <?php
  include "footer.php";
  ?>