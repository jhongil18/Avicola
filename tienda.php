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
    <link rel="stylesheet" href="librerias/animaciones/animate.css">
  </head>
  <body>
    <!-- Navbar -->
    <div class="navbar">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
          <ul class="nav navbar-nav">
            <a class="navbar-brand" href="#">
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
              <li class="nav-item">
                <a class="nav-link" href="productos.php">Nuestros productos</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="tienda.php">Compras</a>
              </li>
            <ul>
          </div>  
        </nav>
    </div>
  
    <!-- Descripcion Producto -->
    <div class="descProducto">
      <div class="container-fluid">
        <div class="animated fadeInDown">
          <div class="row">
            <?php
              if(isset($_GET['img']) && isset($_GET['nombre']) && isset($_GET['valor']) && isset($_GET['descripcion'])){ 
                $img = filter_input(INPUT_GET,"img",FILTER_SANITIZE_STRING);
                $nombre = filter_input(INPUT_GET,"nombre",FILTER_SANITIZE_STRING);
                $valor = filter_input(INPUT_GET,"valor",FILTER_SANITIZE_STRING);
                $descripcion = filter_input(INPUT_GET,"descripcion",FILTER_SANITIZE_STRING); ?>
                
                <div class="col-md-6">
                  <img class="card-img-top" src="<?php echo $img; ?>" style="width:100%">
                </div>
                <div class="col-md-6" id="descripcion">
                  <h3> <?php echo $nombre; ?> </h3>
                  <hr class="teal accent-7 mb-4 mt-0 d-inline-block" style="width: 70%;">
                  <h5><b>Descripcion</b></h5>
                  <p><?php echo $descripcion; ?> </p>
                  <h5><b>Precio</b></h5>
                  <div class="precio"> <?php echo $valor; ?> $</div>
                  <br><a href="productos.php" class="btn btn-secondary">Ver mas Productos</a>
                  <a href="" class="btn btn-info">Agregar al Carrito</a>
                </div>
        <?php }?>
          </div>
        </div>
      </div>
    </div>
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
        <div class="col-md-4 col-lg-4 col-xl-5 mb-4">
          <h6>COMERCIALIZACION AVICOLA</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
          <div class="textAvicola">
            La máxima prioridad es tener al cliente satisfecho
            en todo momento y es por eso que ofrece un servicio esmerado
            y unos productos de máxima calidad.
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4">
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
  <script src="js/descripcionProducto.js"></script>
</html>