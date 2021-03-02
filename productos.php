<?php
    require("./class/db.class.php");
    require("./class/tiendaDAO.php");
    
    $tiendaDAO = new tiendaDAO(); 
    $productos = $tiendaDAO->getProducto();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comercializacion Avicola</title>
        <link rel="icon" type="image/png" href="img/iconoNavbar.png" sizes="16x16">
        <link rel="stylesheet" href="estilos/estilos.css">
        <link rel="stylesheet" href="frameworks/bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="librerias/fontawesome-free-5.15.1-web/css/all.min.css">
    </head>
    <body>
        <!-- Navbar -->
        <div class="navbar">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <ul class="nav navbar-nav">
                <a class="navbar-brand">
                <img src="img/iconoNavbar.png" alt="Logo" style="width:45px;">
                </a>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactenos.php">Contactenos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="productos.php">Nuestros productos</a>
                </li>
                <ul>
            </div>  
            </nav>
        </div>

        <!-- Carousel -->
        <div class="carrusel">
            <div id="video-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#video-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#video-carousel" data-slide-to="1"></li>
                    <li data-target="#video-carousel" data-slide-to="2"></li>
                </ol>
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <video class="video-fluid" autoplay loop muted>
                            <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="carousel-item">
                        <video class="video-fluid" autoplay loop muted>
                            <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="carousel-item">
                        <video class="video-fluid" autoplay loop muted>
                            <source src="https://mdbootstrap.com/img/video/Agua-natural.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
        </div>

        <!-- Productos -->
        <br><div class="container-fluid">
            <div class="titulos" id="productos"> Nuestra Tienda </div><hr>
            <div class="row">
                <?php
                if(mysqli_num_rows($productos) > 0){
                    while($row = mysqli_fetch_assoc($productos)){ ?>
                        <div class="col-md-3">
                            <br><div class="producto">
                                <img src="<?php echo $row['img'] ?>" height="130" widht="150">
                                <h5><?php echo $row['nombre'] ?></h5> 
                                <div class="precio"><?php echo $row['valor'] ?> $</div>
                                <button class="btn btn-info btn-sm" id="boton" onclick="descripcionProducto(<?php echo $row['idProducto'] ?>)"> COMPRAR </button>
                            </div>
                        </div>
                    <?php } 
                } ?>
            </div>
        </div><br>
    </body>

    <!-- Footer -->
    <footer class="page-footer font-small blue-grey lighten-5">
        <div style="background-color: #21d192;">
            <div class="container">
                <div class="row py-4">
                <div class="col text-center text-md-left">
                    <h6>¡Conéctate con nosotros en las redes sociales!</h6>
                </div>
                <div class="col text-center text-md-right">
                    <a class="fb-ic"><i class="fab fa-facebook mr-4"></i></a>
                    <a class="tw-ic"><i class="fab fa-twitter mr-4"></i></a>
                    <a class="gplus-ic"><i class="fab fa-google-plus-g mr-4"></i></a>
                    <a class="li-ic"><i class="fab fa-linkedin-in mr-4"></i></a>
                    <a class="ins-ic"><i class="fab fa-instagram mr-4"></i></a>
                </div>
                </div>
            </div>
        </div>

        <div class="container text-center text-md-left mt-5">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-5 mb-4">
                    <h6>COMERCIALIZACION AVICOLA</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                    <div class="textAvicola">
                        La máxima prioridad es tener al cliente satisfecho
                        en todo momento y es por eso que ofrece un servicio esmerado
                        y unos productos de máxima calidad.
                    </div>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6>PRODUCTOS</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                    <p> Ofrecemos pollos desde: </p>
                    <header class="page-header">
                        <p><a class="dark-grey-text" href="#productos">1 Semana</a></p>
                        <p><a class="dark-grey-text" href="#productos">5 Semanas</a></p>
                        <p><a class="dark-grey-text" href="#productos">10 Semanas</a></p>
                    </header>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6>CONTACTENOS</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                    <p><i class="fas fa-home mr-3"></i> PLANADAS, CP 735070 </p>
                    <p><i class="fas fa-envelope mr-3"></i> avicola@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 57 234 567 88 18</p>
                    <p><i class="fas fa-print mr-3"></i> + 57 234 567 89 18</p>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center text-black-50 py-3">© 2020 Avicola
            <a class="dark-grey-text"> Todos los derechos reservados </a>
        </div>
    </footer>

    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="frameworks/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="librerias/popper.min.js"></script>
    <script src="librerias/fontawesome-free-5.15.1-web/js/fontawesome.min.js"></script>
    <script src="js/desplazamiento.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/descripcionProducto.js"></script>
</html>