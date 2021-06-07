<!DOCTYPE html>
<html>
    <head>
        <title>CONEXIÓN A LA BASE DE DATOS</title>
    </head>
    <body>
        <?php     
        $conexion = mysqli_connect('localhost','root','','webpersonal') or die("Error al conectarse".mysqli_error($conexion));
        ?>
    </body>
</html>