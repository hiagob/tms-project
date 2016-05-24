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
      <h2 class="panel-title">Patrimonio</h2>
    </div>
   <div class="panel-body">

<p>
<a href="createpatrimonio.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>
 
</p>
<table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
<thead>
     <!--Cabeçalho da tabela que sera exibido-->
     <tr>
          <th>ID</th>
          <th>Patrimonio</th>
          <th>Tamanho</th>
          <th>Marca</th>
          <th>Instrumento</th>
          <th>Action</th>
     </tr>
</thead>
<tbody>
<!--Replica os registro do banco-->
<?php
$mysqli->query("SET NAMES 'utf8'");
$res = $mysqli->query("SELECT * FROM patrimonio p, marca m, instrumento i WHERE p.IdInstrumento = i.IdInstrumento AND p.IdMarca = m.IdMarca LIMIT 1000");
while ($row = $res->fetch_assoc()):
?>
     <tr>
          <td><?php echo $row['IdPatrimonio'] ?></td>
          <td><?php echo $row['NumPatri'] ?></td>
          <td><?php echo $row['Tamanho'] ?></td>
          <td><?php echo $row['NomeMarca'] ?></td>
          <td><?php echo $row['NomeInstrumento'] ?></td>

          <!--Editar e excluir registro do banco-->
          <td>
          <a href="updatepatrimonio.php?u=<?php echo $row['IdPatrimonio'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="deletepatrimonio.php?d=<?php echo $row['IdPatrimonio'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
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