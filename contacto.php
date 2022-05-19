<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Contacto</title>
</head>

<body id="contacto">
    <header>
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-rojo" type="submit"><i class="fa-solid fa-file-arrow-down"></i>Descargar mi CV</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                Te invito a que te contactes por este medio o por whatsapp
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/whatsapp"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Esbribe aqui tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco">Enviar</button>
                </form>
            </div>
        </div>

    </main>
    <footer class="container mt-5">
        <div class="row">
         <div class="col-12 col-sm-3">
            <i class="fa-brands fa-linkedin"></i>
         </div>
         <div class="col-3">
         <a href="https://www.mrflytrampolinepark.com/"> Sponsor: MR FLY </a>
            
        </div>
        <div class="col-3"><a href="mailto:leancerillano@gmail.com"><i class="fa-solid fa-square-envelope"></i>leancerillano@gmail.com</a>

        </div>
    </footer>
    <div class="whatsapp pb-5">
        <a href="https://api.whatsapp.com/send?phone=542236005917">
        <i class="fa-brands fa-whatsapp-square"></i></a>
    </div>
</body>

</html>