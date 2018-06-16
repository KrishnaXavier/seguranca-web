<?php

require_once "main.php";

var_dump($_POST);

$email = $_POST['inputEmail'];

$senha = $_POST['inputPassword'];

/* Alterações para segurança web - inicio */

$query = "SELECT nome, email, imagem FROM usuario WHERE email = :email AND senha = :senha ";

$preparar = $con->prepare($query);

$preparar->bindParam(':email', $email);

$preparar->bindParam(':senha', $senha);

$preparar->execute();

/* Alterações para segurança web - fim */


debug("Query: " . $query);


if($preparar->rowCount() >= 1){

	$usuario = $preparar->fetch(PDO::FETCH_ASSOC);

	debug("Resultado: ");	
	debug(var_dump($usuario));

	session_start();
	
	$_SESSION['nome'] 	= $usuario['nome'];

	$_SESSION['email'] 	= $usuario['email'];

	$_SESSION['imagem'] = $usuario['imagem'];

	header("Location: perfil.php");
	
}else{
	
	header("Location: login.php?status-login=erro");
}