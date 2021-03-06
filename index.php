<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>

<body id="inicio">
    <header>
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active py-1 px-3 px-sm-2" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item py-1 px-3 px-sm-2">
                            <a class="nav-link" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item py-1 px-3 px-sm-2">
                            <a class="nav-link" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item py-1 px-3 px-sm-2">
                            <a class="nav-link" href="contacto.php">Contacto</a>
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
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn shadow tiempo">Conoce mis proyectos</a>
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
            <div class="col-3"><a href="mailto:leancerillano@gmail.com"><i
                        class="fa-solid fa-square-envelope"></i>leancerillano@gmail.com</a>

            </div>
    </footer>
    <div class="whatsapp py-3 px-2">
        <a href="https://api.whatsapp.com/send?phone=542236005917">
            <i class="fa-brands fa-whatsapp-square"></i></a>
    </div>


</body>

</html>