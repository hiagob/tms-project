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
      <h2 class="panel-title">Resultado das notas</h2>
    </div>
          <div class="panel-body">

<table id="datatables" class="sortable display table table-bordered table-striped" cellspacing="0" width="100%">
<thead>
     <tr>
          <th>Aluno</th>
          <th>Pontos Distribuidos</th>
          <th>Total</th>
          <th>%</th>
     </tr>

</thead>
<tbody>
<!--Replica os registro do banco-->
<?php
$mysqli->query("SET NAMES 'utf8'");
$res = $mysqli->query("SELECT SUM(NotaObt), SUM(ValorAtividade), p.NomePessoa FROM notaaluno na, turmapessoa tp, pessoa p, atividade a, turma t WHERE tp.IdPessoa = p.IdPessoa && tp.IdTurma = t.IdTurma && na.IdTurma=t.IdTurma && na.IdAtividade = a.IdAtividade && na.IdAluno = p.IdPessoa GROUP BY na.IdAluno LIMIT 1000");
while ($row = $res->fetch_assoc()):
$valor1 = $row['SUM(NotaObt)'];

?>
     <tr>
          <td><?php echo $row['NomePessoa'] ?></td>
          <td><?php echo $valor2 = $row['SUM(ValorAtividade)'] ?></td>
          <td><?php echo $valor =  round($valor1,2) ?></td>
          <td><?php echo '('?> 
              <?php echo $perc = round(($valor1 * 100)/$valor2,2);?>
              <?php echo '%)'?>        

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