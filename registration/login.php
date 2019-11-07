<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
		
		<div class="login-box">
			<img src="img/icono.png" class="avatar" alt="Avatar Image">
			
			<form method="post" action="login.php">
				<?php include('errors.php'); ?>
				<div class="input-group">
					<label>Usuario</label>
					<input type="text" name="username" placeholder="Enter Username"  >
				</div>
				<div class="input-group">
					<label>Contraseña</label>
					<input type="password" name="password" placeholder="Enter Password" color = "white">
				</div>
				<div class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
				</div>
				<p>
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
			</form>
		</div>
	</body>
</html>