<?php
include('config/Conexao.php');
session_start();
if (isset($_POST['senha'])) {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $result1 = mysqli_query($coni, "SELECT * FROM login WHERE Usuario = '".$usuario."' AND Senha = '".$senha."'");
  if (mysqli_num_rows($result1) >= 1) {
    $_SESSION['logado'] = $usuario;
    header("location:index.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="image/favicon.ico">
  <link rel="icon" type="image/gif" href="image/animated_favicon1.gif">
  <title>Orquestra Jovem das Gerais</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/dataTables.bootstrap.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
<script src="js\sorttable.js"></script>
    </head>
    <body>

      <!--//Menu principal da pagina-->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="imagens/Logomarca.jpg" alt="logo" width="100" height="55">
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if(isset($_SESSION['logado']) && $_SESSION['logado']) { ?>        
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Observações <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="cuidados.php">Cuidados</a></li>
                </ul>
              </li>
              <li><a href="logaut.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
            </ul>
            <?php } else{?>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Observações <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="cuidados.php">Cuidados</a></li>
                </ul>
              </li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            <?php }?>
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
              <?php if(isset($_SESSION['logado']) && $_SESSION['logado']) { ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="notas.php">Notas</a></li>              
                  <li><a href="atividades.php">Atividades</a></li>
                  <li><a href="turmas.php">Turmas</a></li>
                  <li role="separator" class="divider"></li>              
                  <li><a href="local.php">Local</a></li>
                  <li><a href="pessoas.php">Alunos</a></li>
                  <li><a href="turmasalunos.php">Turmas e Alunos</a></li>
                  <li><a href="instrutor.php">Instrutor</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="perfil.php">Perfil</a></li>
                  <li><a href="acesso.php">Acesso</a></li>
                  <li><a href="cuidadoinstrumento.php">Cuidado</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patrimonio <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="emprestimo.php">Emprestimo</a></li>
                  <li><a href="devolvido.php">Devolução</a></li>             
                  <li role="separator" class="divider"></li>
                  <li><a href="patrimonio.php">Patrimonio</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="marca.php">Marca</a></li> 
                  <li><a href="instrumento.php">Instrumentos</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatorios<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="telefone.php">Telefones</a></li>
                  <li><a href="idade.php">Idade</a></li>
                  <li><a href="noaluno.php">Nota Aluno</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Evento<span class="caret"></span></a>
                <ul class="dropdown-menu">
                </ul>
              </li>
              <?php } ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

