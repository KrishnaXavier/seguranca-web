<?php

require_once "main.php";

var_dump($_POST);

$email = $_POST['inputEmail'];

$senha = $_POST['inputPassword'];

$query = "SELECT nome, email, imagem FROM usuario WHERE email = '$email' AND senha = '$senha' ";

echo "<br> Debug, query: $query <br>";

$resultado = $con->query($query);


if($resultado->rowCount() >= 1){

	var_dump($resultado->fetch(PDO::FETCH_ASSOC));
	
	$_SESSION['nome'] 	= $resultado['nome'];

	$_SESSION['email'] 	= $resultado['email'];

	$_SESSION['imagem'] = $resultado['imagem'];


	echo "login";
}else{
	echo "erro login";
}