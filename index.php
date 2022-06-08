<?php 
include_once('./config/connect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">

	<title>Banco de Dados- PDO</title>
</head>
<body>
	<h1>Cadastro</h1>
	<form action="inserir.php" method="POST" enctype="multipart/form-data">
		<label>Seu Nome</label>
		<div>
			<input type="text" name="name">
		</div>
		<label>E-mail</label>
		<div>
			<input type="email" name="email">
		</div>
		<label>Senha</label>
		<div>
			<input type="password" name="pass">
		</div>
		<div>
			<input type="submit" value="CADASTRAR">
		</div>
	</form>
</body>
</html>