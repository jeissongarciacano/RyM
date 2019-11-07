<?php
session_start();

// initializing variables
$Nombre = "";
$Apellidos = "";
$Identificacion = "";
$NumeroIdentificacion = "";
$email    = "";
$username = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Nombre = mysqli_real_escape_string($db, $_POST['Nombre']);
  $Apellidos = mysqli_real_escape_string($db, $_POST['Apellidos']);
  $Identificacion = mysqli_real_escape_string($db, $_POST['Identificacion']);
  $NumeroIdentificacion = mysqli_real_escape_string($db, $_POST['NumeroIdentificacion']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Nombre)) { array_push($errors, "Name is required"); }
  if (empty($Apellidos)) { array_push($errors, "Last name is required"); }
  if (empty($Identificacion)) { array_push($errors, "Identification is required"); }
  if (empty($NumeroIdentificacion)) { array_push($errors, "Identification number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (Nombre, Apellidos, Identificacion, NumeroIdentificacion, email, username, password) 
  			  VALUES('$Nombre', '$Apellidos', '$Identificacion', '$NumeroIdentificacion', '$email', '$username', '$password')";
  	mysqli_query($db, $query);
    $_SESSION['Nombre'] = $Nombre;
    $_SESSION['Apellidos'] = $Apellidos;
    $_SESSION['Identificacion'] = $Identificacion;
    $_SESSION['NumeroIdentificacion'] = $NumeroIdentificacion;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
  	$_SESSION['success'] = "You are now logged in";
    /*header('location: index.php');*/
    header('location: login.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username'  AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['Nombre'] = $Nombre;
          $_SESSION['Apellidos'] = $Apellidos;
          $_SESSION['Identificacion'] = $Identificacion;
          $_SESSION['NumeroIdentificacion'] = $NumeroIdentificacion;
          $_SESSION['email'] = $email;
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;

          $_SESSION['success'] = "You are now logged in";
          /*header('location: index.php');*/
          header('location: paginaprincipal.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

