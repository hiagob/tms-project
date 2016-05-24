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
      <h2 class="panel-title">Turmas e Alunos</h2>
    </div>
          <div class="panel-body">

<p>
<a href="createturmapessoa.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>
 
</p>
<table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
<thead>
     <!--Cabeçalho da tabela que sera exibido-->
     <tr>
          <th>Turma</th>
          <th>Aluno</th>
          <th>Action</th>
     </tr>
</thead>
<tbody>
<!--Replica os registro do banco-->
<?php
$mysqli->query("SET NAMES 'utf8'");
$res = $mysqli->query("SELECT * FROM turma t, pessoa p, turmapessoa tp WHERE tp.IdTurma = t.IdTurma && tp.IdPessoa=p.IdPessoa LIMIT 1000");
while ($row = $res->fetch_assoc()):
?>
     <tr>
          <td><?php echo $row['NomeTurma'] ?></td>
          <td><?php echo $row['NomePessoa'] ?></td>          

          <!--Editar e excluir registro do banco-->
          <td>
          <a href="updateturmapessoa.php?u=<?php echo $row['IdTurma'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="deleteturmapessoa.php?d=<?php echo $row['IdTurma'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
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