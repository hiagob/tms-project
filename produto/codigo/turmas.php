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
    <h2 class="panel-title">Turmas</h2>
  </div>
  <div class="panel-body">

    <p>
      <a href="createturma.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>
      
    </p>
    <table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
      <thead>
       <!--Cabeçalho da tabela que sera exibido-->
       <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Instrutor</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!--Replica os registro do banco-->
      <?php
      $mysqli->query("SET NAMES 'utf8'");
      $res = $mysqli->query("SELECT * FROM turma t, instrutor i WHERE t.Idinstrutor = i.IdInstrutor GROUP BY t.IdTurma LIMIT 1000");
      while ($row = $res->fetch_assoc()):
        ?>
      <tr>
        <td><?php echo $row['IdTurma'] ?></td>
        <td><?php echo $row['NomeTurma'] ?></td>
        <td><?php echo $row['NomeInstrutor'] ?></td>          

        <!--Editar e excluir registro do banco-->
        <td>
          <a href="updateturma.php?u=<?php echo $row['IdTurma'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="deleteturma.php?d=<?php echo $row['IdTurma'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
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