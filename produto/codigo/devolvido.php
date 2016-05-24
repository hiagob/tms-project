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
      <h2 class="panel-title">Instrumentos Devolvidos</h2>
    </div>
   <div class="panel-body">

<table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
<thead>
     <!--Cabeçalho da tabela que sera exibido-->
     <tr>
          <th>ID</th>
          <th>Aluno</th>
          <th>Patrimonio</th>
          <th>Instrumento</th>
          <th>Devolucao</th>
          <th>Marca</th>
     </tr>
</thead>
<tbody>
<!--Replica os registro do banco-->
<?php
$mysqli->query("SET NAMES 'utf8'");
$res = $mysqli->query("SELECT * from emprestimo e, pessoa p, patrimonio pt, instrumento i, marca m WHERE e.IdPessoa=p.IdPessoa AND e.IdPatrimonio=pt.IdPatrimonio AND e.IdMarca=m.IdMarca AND e.IdInstrumento=i.IdInstrumento AND e.emp='Devolvido' LIMIT 1000");
while ($row = $res->fetch_assoc()):
?>
     <tr>
          <td><?php echo $row['IdEmprestimo'] ?></td>
          <td><?php echo $row['NomePessoa'] ?></td>
          <td><?php echo $row['NumPatri'] ?></td>
          <td><?php echo $row['NomeInstrumento'] ?></td>
          <td><?php echo $row['DataDev'] ?></td>
          <td><?php echo $row['NomeMarca'] ?></td>

     </tr>
<?php
endwhile;
?>
</tbody>
</table>     
<?php
include "footer.php";
?>