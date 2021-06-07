<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingrese</title>
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
                <h2>LOGIN DE USUARIOS REGISTRADOS</h2>
            </center>
            <br>
            <center>
                <form action="validar.php" method="post">
                    <label for="caja1" class="form-label">
                        <h5 style="text-align:left ;">Nombre de usuario</h5>
                        <p><input id="caja1" class="form-control" type="text" name="usuario" placeholder="Usuario" required=""></p><br><br>
                    </label>
                    <br>
                    <label for="caja2" class="form-label">
                        <h5 style="margin-top: -55px; text-align: left;">Contraseña</h5>
                        <p><input id="caja2" class="form-control" type="password" name="password" placeholder="Contraseña" required=""></p><br>
                        <input type="submit" class="btn btn-primary" value="Iniciar Sección" style="margin-top: -15px;">                        
                    </label>
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