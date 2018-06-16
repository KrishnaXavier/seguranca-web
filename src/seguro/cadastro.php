<?php require_once "inc.header.php"; ?>

<div class="container">
	<div class="card card-container">		
		<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin" action="form.login.php" method="post">
			<span id="reauth-email" class="reauth-email"></span>
			<input name="inputName" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
			<input name="inputEmail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<input name="inputPassword" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<input name="inputImage" type="file" id="inputImage" class="form-control" required>
			<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastrar</button>
		</form>		
	</div>
</div>