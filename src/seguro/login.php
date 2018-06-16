<?php 
	
	session_start();
	session_destroy();

	require_once "inc.header.php"; 

?>

<div class="container">
	<div class="card card-container">		
		<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin" action="form.login.php" method="post">
			<span id="reauth-email" class="reauth-email"></span>
			<input name="inputEmail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<input name="inputPassword" type="password" id="inputPassword" class="form-control" placeholder="Password" required>			
			<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
		</form>

		<?php echo isset($_GET['status-login']) && $_GET['status-login'] == "erro" ? "<h6 style='color: red;'>Senha e/ou email invalido(s).</h6>" : "";  ?>
	</div>
</div>