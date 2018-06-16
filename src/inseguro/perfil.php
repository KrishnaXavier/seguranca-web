<?php 
	session_start(); 

	if( ! (
			isset($_SESSION['nome']) && $_SESSION['nome'] != "" && 
			isset($_SESSION['email']) && $_SESSION['email'] != "" &&
			isset($_SESSION['imagem']) && $_SESSION['imagem'] != ""
		) ){
		header("Location: login.php");
		die();
	}
?>

<?php require_once "inc.header.php"; ?>


<div class="container">
	<div class="card card-container">		
		<img id="profile-img" class="profile-img-card" src="<?php echo 'upload/'.$_SESSION['imagem']; ?>" />
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin" action="form.login.php" method="post">

			<span id="reauth-email" class="reauth-email"></span>

			<div class="slot nome"><?php echo $_SESSION['nome']; ?></div>

			<div class="slot email"><?php echo $_SESSION['email']; ?></div>
						
		</form>		
	</div>
</div>