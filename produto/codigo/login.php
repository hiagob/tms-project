<?php
	include('header.php'); 
?>
<div class="container">

	<form class="form-signin" method="post" action="login.php">
		<h2 class="form-signin-heading">Login</h2>
		<label for="Usuario" class="sr-only">Usuario</label>
		<input type="txt" name="usuario" id="Usuario" class="form-control" placeholder="Usuario" required autofocus>
		<label for="Senha" class="sr-only">Senha</label>
		<input type="password" name="senha" id="Senha" class="form-control" placeholder="Senha" required>
		<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Manter conectado!
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
	</form>

</div> <!-- /container -->
<?php include('footer.php'); ?>