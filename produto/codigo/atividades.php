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
      <h2 class="panel-title">Atividades</h2>
    </div>
          <div class="panel-body">

<p>
<a href="createatividades.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>
 
</p>
<table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
<thead>
     <!--Cabeçalho da tabela que sera exibido-->
     <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Valor</th>
          <th>Action</th>
     </tr>
</thead>
<tbody>
<!--Replica os registro do banco-->
<?php
$mysqli->query("SET NAMES 'utf8'");
$res = $mysqli->query("SELECT * FROM atividade a, turma t GROUP BY a.IdAtividade LIMIT 1000");
while ($row = $res->fetch_assoc()):
?>
     <tr>
          <td><?php echo $row['IdAtividade'] ?></td>
          <td><?php echo $row['NomeAtividade'] ?></td>
          <td><?php echo $row['ValorAtividade'] ?></td>          

          <!--Editar e excluir registro do banco-->
          <td>
          <a href="updateatividades.php?u=<?php echo $row['IdAtividade'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="deleteatividades.php?d=<?php echo $row['IdAtividade'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
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