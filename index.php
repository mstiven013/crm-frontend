<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRM by WeBussines</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
	<!--Include CSS-->
	<link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login/login.css">
	<!--Include JS-->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script async src="assets/libs/bootstrap/js/tether.min.js"></script>
	<script async src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script async src="assets/js/login/login.js"></script>
</head>
<body>

	<div class="main">

		<div class="login-form">

			<div class="header">
				<p>Iniciar sesi&oacute;n</p>
			</div>

			<form action="" id="login" class="login" method="post">
				
				<div class="form-group">
					<input type="text" name="user" id="user" required autocomplete="off" class="input">
					<label for="user" class="_label">Usuario...</label>
					<p id="user-error" class="error"></p>
				</div>

				<div class="form-group">
					<input type="text" name="password" id="password" required autocomplete="off" class="input">
					<label for="password" class="_label">Contrase&ntilde;a...</label>
					<p id="password-error" class="error"></p>
				</div>

				<div class="form-group submit aligncenter">
					<p id="global-error" class="error"></p>
					<input type="hidden" name="login">
					<input type="submit" class="button" value="Ingresar">
				</div>

				<div class="form-group lost-pass-link">
					<p class="aligncenter">
						<a href="lost-password.php">¿Olvidaste tu contrase&ntilde;a?</a>
					</p>
				</div>

			</form>

		</div>

	</div>
	
	<footer>
		
	</footer>

</body>
</html>