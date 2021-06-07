<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php  
        if (isset($_POST['usuario']) and isset($_POST['password'])) {
            include('conexion.php');
            $user = $_POST['usuario'];
            $pass = $_POST['password'];
            $consulta = "SELECT * from usuarios where user='$user' and pass='$pass'";
            $resultado = mysqli_query($conexion,$consulta);
            $filas = mysqli_num_rows($resultado);   
            if ($filas>0) {
                header("location:pagina_reg/web.html");
            }
            else {

                header("location:registre.php");
            }
        }else {
            header('location: ./');
        }
        mysqli_close($conexion);
        ?>
    </body>
</html>