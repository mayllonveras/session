<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

<?php
if(!isset($_POST['u'])){
	echo "<div class='alert alert-danger'>Você não deve acessar esta página diretamente.</div>";
}else{
	if ($_POST['u'] == "mayllon" and md5($_POST['s']) == '8d299d8107f76299ba7366b7e57b85c4') {
		$_SESSION['u'] = "Mayllon Veras";
		$_SESSION['sucesso'] = 1;
		header("location: form.php");
	}else{
		$_SESSION['invalido'] = 1;
		header("location: form.php");
	}
}