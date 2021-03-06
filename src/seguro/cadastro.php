<?php require_once "inc.header.php"; ?>

<div class="container">
	<div class="card card-container">		
		<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin" action="form.cadastro.php" method="post" enctype="multipart/form-data">
			<span id="reauth-email" class="reauth-email"></span>
			
			<input name="inputName" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
			
			<input name="inputEmail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			
			<input name="inputPassword" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

			<input name="image" type="file" class="form-control" required>

			<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Cadastrar</button>

			<?php echo isset($_GET['status-cadastro']) && $_GET['status-cadastro'] == "erro" ? "<h6 style='color: red;'>Erro, por favor tente de novo.</h6>" : "";  ?>
		</form>		
	</div>
</div>
