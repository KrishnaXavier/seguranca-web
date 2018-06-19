<?php

require_once "main.php";

debug(var_dump($_POST));

var_dump($_FILES['image']);

$nome 	= filtro($_POST['inputName']);
$email 	= filtro($_POST['inputEmail']);
$senha 	= filtro($_POST['inputPassword']);

$_FILES['image']['name'] 		= filtro($_FILES['image']['name']);
$_FILES['image']['tmp_name'] 	= filtro($_FILES['image']['tmp_name']);

$tp = getImageSize($_FILES['image']['tmp_name']);

switch($tp['mime']) {
	case "image/gif":
	case "image/jpeg":
	case "image/png":
		date_default_timezone_set("Brazil/East");
		$dir = "upload/";
		$ext = strtolower(substr($_FILES['image']['name'],-4));
		$novoNome = date("Y.m.d-H.i.s") . $ext;	 
		move_uploaded_file($_FILES['image']['tmp_name'], $dir.$novoNome);
		$imagem = $novoNome;
		break;
	default: die("Erro no formato de arquivo");
		
}

/* Alterações para segurança web - inicio */
$query = "INSERT INTO usuario (nome, email, senha, imagem)  VALUES (:nome, :email, :senha, :imagem)";

$preparar = $con->prepare($query);

$preparar->bindParam(':nome', $nome);

$preparar->bindParam(':email', $email);

$preparar->bindParam(':senha', $senha);

$preparar->bindParam(':imagem', $imagem);

if($preparar->execute()){
	header("Location: login.php");
}else{
	header("Location: cadastro.php?status-cadastro=erro");
}