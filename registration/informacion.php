<?php 
include('server.php');
?>
<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no,
        initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Listas</title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="listas.css">
        
    </head>
    <body> 
       
        <div class="contenedor">
            <header>
                <nav>
                    <ul>
                        <li><a href="paginaprincipal.php">Menú Principal</a></li>
                       
                    </ul>   
                </nav>
            <title>Información</title>  
            </header>
       </div> 

            <section class="contenidoPrincipal">
                <div class="responsive-table">
                <?php $results = mysqli_query($db, "SELECT * FROM users "); ?>
                        <table class="table"> 
                        <tr> 
                            <td><img src="img/inf1.jpg" align = "center"> </td> 
                        <tr> 
                        <?php while ($row = mysqli_fetch_array($results)) { ?>

                            <?php if (isset($_SESSION['username']) && $_SESSION['username'] === $row['username']) :  ?>
   
                                    <td>Nombre</td>
                                    <td><?php echo $row['Nombre']; ?></td>
                                </tr>
                                <tr> 
                                    <td>Apellidos</td>
                                    <td><?php echo $row['Apellidos']; ?></td>
                                </tr>
                                <tr> 
                                    <td>Identificacion</td>
                                    <td><?php echo $row['Identificacion']; ?></td>
                                </tr>
                                <tr> 
                                    <td>Numero de Identificacion</td>
                                    <td><?php echo $row['NumeroIdentificacion']; ?></td>
                                </tr>
                                <tr> 
                                    <td>Correo</td>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                                <tr> 
                                    <td>Usuario</td>
                                    <td><?php echo $row['username']; ?></td>
                                </tr>
                            <?php endif ?>  
                        <?php } ?>
                            
                        </table>
                </div>
            </section>

        </div>
    </body>
</html>