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
   <h2 class="panel-title">Perfil</h2>
  </div>
  <div class="panel-body">

    <p>
      <a href="createacesso.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>

    </p>
    <table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
      <thead>
       <!--Cabeçalho da tabela que sera exibido-->
       <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!--Replica os registro do banco-->
      <?php
      $mysqli->query("SET NAMES 'utf8'");
      $res = $mysqli->query("SELECT * FROM login LIMIT 1000");
      while ($row = $res->fetch_assoc()):
        ?>
      <tr>
        <td><?php echo $row['IdLogin'] ?></td>
        <td><?php echo $row['Usuario'] ?></td>

        <!--Editar e excluir registro do banco-->
        <td>
          <a href="updateacesso.php?u=<?php echo $row['IdLogin'] ?>" class="btn btn-success"><span class=" btn-md glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="deleteacesso.php?d=<?php echo $row['IdLogin'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
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