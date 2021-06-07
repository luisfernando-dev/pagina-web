<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="web.html">Bienvenido|</a>
            <a href="infPersonal.html">Información personal|</a>
            <a href="zonaInteres.html">Zona de interés|</a>
            <a href="contacto.html">Contacto|</a>
            <a href="login.php">Login|</a>
        </nav>
        <section class="textos-header" id="bienvenido">
            <h1>Bienvenido a mi sitio web</h1>
            <h2>Acá podrás encontrar Información sobre mí</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section>
            <center>
                <h2>REGISTRO DE USUARIOS NUEVOS</h2>
            </center>
            <br>
            <center>
                <form action="registre_ctrl.php" method="post">
                    <table>
                        <tr>
                            <td><b>Cédula: </b></td>
                            <td><input class="form-control" style="margin-bottom: -15px;" required type="" name="ced"><br></td>
                        </tr>
                        <tr>
                            <td><b>Nombres: </b></td>
                            <td><input class="form-control" style="margin-bottom: -15px;" type="" name="nom"><br></td>
                        </tr>
                        <tr>
                            <td><b>Apellidos: </b></td>
                            <td><input class="form-control" style="margin-bottom: 5px;" type="" name="ape"></td>
                        </tr>
                        <tr>
                            <td><b>Email: </b></td>
                            <td><input class="form-control" style="margin-bottom: 5px;" type="" name="ema"></td>
                        </tr>
                        <tr>
                            <td><b>Sexo: </b></td>
                            <td>Hombre: <input class="form-check-input" style="margin-bottom: 5px;" checked type="radio" value="m" name="sex">
                                Mujer: <input class="form-check-input" type="radio" value="f" name="sex"><br></td>
                        </tr>
                        <tr>
                            <td><b>Usuario: </b></td>
                            <td><input class="form-control" style="margin-bottom: 5px;" type="" name="use"></td>
                        </tr>
                        <tr>
                            <td><b>Contraseña: </b></td>
                            <td><input class="form-control" style="margin-bottom: 5px;" type="password" name="pas"></td>
                        </tr>
                        <tr>
                            <td><b>Teléfono: </b></td>
                            <td><input class="form-control" style="margin-bottom: 5px;" type="" name="tel"></td>
                        </tr>
                        <tr>
                            <td><b>Dirección: </b></td>
                            <td><input class="form-control" type="" name="dir"></td>
                        </tr>
                        </tr>
                    </table>
                    <br><br><input class="btn btn-primary" style="margin-top: -10px;" type="submit" name="" value="Registrarse">
                </form>
                <br>
            </center>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer" id="contacto">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>3102987654</p>
            </div>
            <div class="content-foo">
                <h4>Correo electrónico </h4>
                <p>luisf-code@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicación</h4>
                <p>Medellín (Ant)</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Sitio web diseñado y desarrollado por Luis Fernando</h2>
    </footer>
</body>

</html>