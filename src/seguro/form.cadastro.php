<?php

require_once "main.php";

debug(var_dump($_POST));

var_dump($_FILES['image']);

$nome = $_POST['inputName'];
$email = $_POST['inputName'];
$email = $_POST['inputEmail'];
$senha = $_POST['inputPassword'];


date_default_timezone_set("Brazil/East");
$dir = "upload/";
$ext = strtolower(substr($_FILES['image']['name'],-4));
$novoNome = date("Y.m.d-H.i.s") . $ext;	 
move_uploaded_file($_FILES['image']['tmp_name'], $dir.$novoNome);

$imagem = $novoNome;

$query = "INSERT INTO usuario (nome, email, senha, imagem)  VALUES ('$nome', '$email', '$senha', '$imagem')";

debug("Query: " . $query);

if($con->query($query)){
	header("Location: login.php");
}else{
	header("Location: cadastro.php?status-cadastro=erro");
}