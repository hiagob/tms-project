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
      <h2 class="panel-title">Notas</h2>
    </div>
          <div class="panel-body">

<p>
<a href="createnotas.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar</a>
 
</p>
<table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
<thead>
     <tr>
          <th>ID</th>
          <th>Aluno</th>
          <th>Turma</th>
          <th>Atividade</th>
          <th>Valor</th>
          <th>Nota Obtida</th>
          <th>%</th>
          <th>Action</th>
     </tr>

</thead>
<tbody>
<!--Replica os registro do banco-->
<?php
$mysqli->query("SET NAMES 'utf8'");
$res = $mysqli->query("SELECT * FROM notaaluno na, turmapessoa tp, pessoa p, atividade a, turma t WHERE tp.IdPessoa = p.IdPessoa && tp.IdTurma = t.IdTurma && na.IdTurma=t.IdTurma && na.IdAtividade = a.IdAtividade && na.IdAluno = p.IdPessoa GROUP BY na.IDna LIMIT 1000");
while ($row = $res->fetch_assoc()):
$valor=$row['ValorAtividade'];
$obt=$row['NotaObt'];
?>
     <tr>
          <td><?php echo $row['IdPessoa'] ?></td>
          <td><?php echo $row['NomePessoa'] ?></td>
<?php
$mysqli->query("SET NAMES 'utf8'");
$res1 = $mysqli->query("SELECT * FROM notaaluno na, pessoa p, atividade a WHERE  na.IdAtividade = a.IdAtividade && na.IdAluno = p.IdPessoa GROUP BY p.IdPessoa && na.IDna LIMIT 1000");
while ($row1 = $res1->fetch_assoc()):
?>
          <td><?php echo $row['NomeTurma'] ?></td>
          <td><?php echo $row['NomeAtividade'] ?></td>
          <td><?php echo $row['ValorAtividade'] ?></td>
          <td><?php echo $row['NotaObt'] ?></td>
          <td><?php echo '('?> 
              <?php echo $perc = round(($obt * 100)/$valor,2);?>
              <?php echo '%)'?>

          </td>
<?php
endwhile;
?>
          <!--Editar e excluir registro do banco-->
          <td>
          <a href="updatenota.php?u=<?php echo $row['IDna'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
          <a onclick="return confirm('Are you want deleting data')" href="deletenota.php?d=<?php echo $row['IDna'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
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