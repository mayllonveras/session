<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
</head>
<body>
	<?php if(isset($_SESSION['invalido'])){
		echo "<div class='alert alert-danger'>Usuário ou senha inválidos!</div>";
		unset($_SESSION['invalido']);
		}
		if(isset($_SESSION['sucesso'])){
			echo "<div class='alert alert-success'>Login realizado com sucesso!</div>";
			unset($_SESSION['sucesso']);
		}
		?>
		
	<?php if(!isset($_SESSION['u'])){?>
		<h1>Login</h1>
		<form action="login.php" method="post">
			<input type="text" name="u" placeholder="Nome de usuario" required="1">
			<input type="password" name="s" placeholder="senha" required="1">
			<input type="submit" value="Entrar" class="btn btn-primary">
		</form>
	<?php }else{
		echo "Usuario: ".$_SESSION['u']." ";
		echo "<a href='sair.php' class='btn btn-danger'>Sair</a>";
		}?>

</body>
</html>