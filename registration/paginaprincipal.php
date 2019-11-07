<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no,
        initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Página Principal</title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="listas.css">
        <link rel="stylesheet" href="estilosbo.css">
    </head>
    <body>   
        <div class="contenedor">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success" >
                    <h3>
                    <?php 
                        unset($_SESSION['success']);
                    ?>
                    </h3>
                </div>
            <?php endif ?>

    <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?> 
                 <header>
                     <nav>
                        <ul>
                         <div align="rigth">
                             <li><a href="index.php?logout='1'" style="color: red;" >Log out</a></li>
                        </div>
                        </ul>   
                    </nav>
                </header>
                    

                <section class="titulo">
                  <img src="img/logo.png" alt="" > 
                </section>

                <section class="contenidoPrincipal">
                    <div class="responsive-table">
                            <table class="table"> 
                                 <tr> 
                                    <td><img src="img/informacion.jpg" alt=""  > </td> 
                                    <td><img src="img/parqueaderos.png" alt="" > </td>
                                    <td><img src="img/recarga.png" alt="" > </td>
                                </tr>
                                <tr> 
                                    <td><a href="informacion.php" name="information_user">Información de la cuenta</a></td>
                                    <td><a href="parqueaderos.html">Acceso a parqueaderos</a></td>
                                    <td><a href="recarga.html">Recarga</a></td>
                                </tr>
                            </table>
                    </div>
                </section>

            <?php endif ?>
        </div>
    </body>
</html>