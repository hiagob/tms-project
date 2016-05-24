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
      <h2 class="panel-title">Aluno</h2>
    </div>
          <div class="panel-body">

<p>
<a href="createpessoa.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>
 
</p>
<table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
<thead>
     <!--Cabeçalho da tabela que sera exibido-->
     <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Nascimento</th>
          <th>Escolaridade</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Instrumento</th>
          <th>Action</th>
     </tr>
</thead>
<tbody>
<!--Replica os registro do banco-->
<?php
$mysqli->query("SET NAMES 'utf8'");
$res = $mysqli->query("SELECT * FROM pessoa p, instrumento i WHERE p.IdInstrumento = i.IdInstrumento LIMIT 1000");
while ($row = $res->fetch_assoc()):
?>
     <tr>
          <td><?php echo $row['IdPessoa'] ?></td>
          <td><?php echo $row['NomePessoa'] ?></td>
          <td><?php echo $row['data_nasc'] ?></td>
          <td><?php echo $row['Serie'] ?></td>
          <td><?php echo $row['Telefone'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo $row['NomeInstrumento'] ?></td>

          <!--Editar e excluir registro do banco-->
          <td>
          <a href="updatepessoa.php?u=<?php echo $row['IdPessoa'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a href="viewaluno.php?u=<?php echo $row['IdPessoa'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> visualizar</a>
          <a onclick="return confirm('Are you want deleting data')" href="deletepessoa.php?d=<?php echo $row['IdPessoa'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
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