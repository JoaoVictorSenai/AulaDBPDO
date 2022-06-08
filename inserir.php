<?php  

include_once('config/connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

// método prepare

$stmt = $connect->prepare("INSERT INTO users (name, email, pass) VALUES(:NAME, :EMAIL, :PASS)");

// método bindParam - ligar o parâmetro com o valor

$stmt->bindParam(':NAME', $name);
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':PASS', $pass);

$stmt->execute();

echo "Cadastrado";

?>