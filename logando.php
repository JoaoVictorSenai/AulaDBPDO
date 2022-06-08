<?php  

	include "config/connect.php";

	session_start();

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$stmt = $connect->prepare("SELECT * FROM users WHERE email = :EMAIL AND pass = :PASS");

	$stmt->bindParam(":EMAIL", $email);
	$stmt->bindParam(":PASS", $pass);

	$stmt->execute();

	if ($stmt->rowCount() == 1) {
		
		$_SESSION['logado'] = true;

		header("Location: logadoOK.php");

	}else{

		header("Location: logar.php");

	}

?>