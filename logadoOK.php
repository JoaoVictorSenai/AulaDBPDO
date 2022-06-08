<?php  

	include "config/connect.php";

	session_start();

	if ($_SESSION['logado'] != true) {
		
		header('Location: index.php');

		die();

	}

	if (isset($_GET['sair'])) {

		session_destroy();

		header("Location: index.php");

		die();

	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login bem sucedido!</title>
</head>
<body>
		<h1>LOGADO</h1>
		<p><a href="?sair">Deslogar</a></p>
</body>
</html>