<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
  <div class="header">
  	<h2>Registro</h2>
  </div>
  
  <form name=Formulariodatos alig="center" method="post" action="register.php">
  	<?php include('errors.php'); ?>
      <div class="input-group">
  	  <label>Nombre</label>
  	  <input type="text" name="Nombre" id="nombre" placeholder="Nombre" maxlength="20" required name="nombre" size="50" value="<?php echo $Nombre; ?>">
  	</div>
      <div class="input-group">
  	  <label>Apellidos</label>
  	  <input type="text" name="Apellidos" id="apellido" placeholder="Apellidos" maxlength="20" required name="apellido" size="50" value="<?php echo $Apellidos; ?>">
  	</div>
      <div class="input-group">
        <label type="text" name="Identificacion">
            <label for="identificacion" value="<?php echo $Identificacion; ?>">Identificaión: </label><!--Me relaciona con el select por medio del id-->
			<select name="Identificacion" id="identificacion" > <!--Seleccionar una opción-->
				<option value="cedula de ciudadania">Cédula de ciudadania</option>
				<option value="tarjeta de identidad">Tarjeta de identidad</option>
				<option value="cedula extranjera">Cédula de extranjería</option>
                <option value="pasaporte">Pasaporte</option>
			</select>
    </div>
    <div class="input-group">
  	  <label>Numero de Identificación</label>
  	  <input type="text" name="NumeroIdentificacion" id="numeroid" placeholder="Número de identificación" maxlength="20" required name="numeroid" size="10" value="<?php echo $username; ?>">
  	</div>
      <div class="input-group">
  	  <label>Correo</label>
  	  <input type="email" name="email" id="correo" placeholder="Correo electronico"  size="50" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" id="usuario" placeholder="Usuario" maxlength="20" required name="username" size="50" value="<?php echo $username; ?>">
  	</div>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" id="password"placeholder="Contraseña" maxlength="150" required name="password" size="50">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2"  placeholder="Confirmar Contraseña"  size="50" >
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>

