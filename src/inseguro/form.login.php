<?php

require_once "main.php";

var_dump($_POST);

$email = $_POST['inputEmail'];

$senha = $_POST['inputPassword'];

$query = "SELECT nome, email, imagem, id FROM usuario WHERE email = '$email' AND senha = '$senha' ";

debug("Query: " . $query);

$resultado = $con->query($query);


if($resultado->rowCount() >= 1){

	$usuario = $resultado->fetch(PDO::FETCH_ASSOC);

	debug("Resultado: ");	
	debug(var_dump($usuario));

	session_start();
	
	$_SESSION['nome'] 	= $usuario['nome'];

	$_SESSION['email'] 	= $usuario['email'];

	$_SESSION['imagem'] = $usuario['imagem'];

	$_SESSION['id'] = $usuario['id'];


	header("Location: perfil.php");
	
}else{
	
	header("Location: login.php?status-login=erro");
}