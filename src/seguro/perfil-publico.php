<?php 
require_once "main.php";

$id = $_GET['id'];

$query = "SELECT nome, email, imagem FROM usuario WHERE id = {$id} ";

$resultado = $con->query($query);

$usuario = $resultado->fetch(PDO::FETCH_ASSOC);


?>

<?php require_once "inc.header.php"; ?>


<div class="container">
	<div class="card card-container">
		
		<h4 class="slot">Perfil público</h4>

		<img id="profile-img" class="profile-img-card" src="<?php echo 'upload/'.$usuario['imagem']; ?>" />

		<p id="profile-name" class="profile-name-card"></p>		

		<span id="reauth-email" class="reauth-email"></span>

		<div class="slot nome"><?php echo  $usuario['nome']; ?></div>		

	</div>
</div>