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
      <h2 class="panel-title">Emprestimos</h2>
    </div>
   <div class="panel-body">

<p>
<a href="createemprestimo.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>
 
</p>
<table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
<thead>
     <!--Cabeçalho da tabela que sera exibido-->
     <tr>
          <th>ID</th>
          <th>Aluno</th>
          <th>Patrimonio</th>
          <th>Instrumento</th>
          <th>Emprestimo</th>
          <th>Marca</th>
          <th>Action</th>
     </tr>
</thead>
<tbody>
<!--Replica os registro do banco-->
<?php
$mysqli->query("SET NAMES 'utf8'");
$res = $mysqli->query("SELECT * from emprestimo e, pessoa p, patrimonio pt, instrumento i, marca m WHERE e.IdPessoa=p.IdPessoa AND e.IdPatrimonio=pt.IdPatrimonio AND e.IdMarca=m.IdMarca AND e.IdInstrumento=i.IdInstrumento AND e.emp='Emprestar' LIMIT 1000");
while ($row = $res->fetch_assoc()):
?>
     <tr>
          <td><?php echo $row['IdEmprestimo'] ?></td>
          <td><?php echo $row['NomePessoa'] ?></td>
          <td><?php echo $row['NumPatri'] ?></td>
          <td><?php echo $row['NomeInstrumento'] ?></td>
          <td><?php echo $row['DataEmp'] ?></td>
          <td><?php echo $row['NomeMarca'] ?></td>

          <!--Editar e excluir registro do banco-->
          <td>
          <a href="updateemprestimo.php?u=<?php echo $row['IdEmprestimo'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="deleteemprestimo.php?d=<?php echo $row['IdEmprestimo'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
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