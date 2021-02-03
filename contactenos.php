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
    <link rel="stylesheet" href="librerias/package/dist/sweetalert2.min.css">
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
              <li class="nav-item active">
                <a class="nav-link" href="contactenos.php">Contactenos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="productos.php">Nuestros productos</a>
              </li>
            <ul>
          </div>  
        </nav>
    </div>
    
    <!-- Formulario -->
    <div class="descContacto animated fadeInDown">
      <div class="row">
        <div class="col-md-6">
          <div class="infoContacto">
            <div class="titulos">Informacion de Contacto</div><br>
            <b>Direccion</b><br><p>Manzana 11 Casa 13 Barrio praderas de santa Rita Etapa 3</p>
            <b>Telefono Movil</b><br><p>3127640942</p>
            <b>Correo Electronico</b><br><p>avicola@gmail.com</p>
            <b>Formas de Pago</b><br><p>Contado / Cuenta corriente / Efectivo</p>
            <iframe class="maps" frameborder="0" scrolling="no" 
              marginheight="0" marginwidth="0" id="gmap_canvas" 
              src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Carrera%2018%20E%20sur%20ibague+(Santa%20Rita%20Prairies)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            </iframe>
          </div>
        </div>
        <div class="col-md-6">
          <div class="formContacto">
            <div class="titulos">Formulario de Contacto</div><br>
            <form id="form" method="POST">
                <div class="form-group">
                  <input class="form-control" type="text" id="nombres"
                  placeholder="Digita tus Nombres" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" id="apellidos"
                  placeholder="Digita tus Apellidos" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="email" id="email" 
                  placeholder="Digita tu Email" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" id="telefono" 
                  placeholder="Digita tu Numero de Telefono" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="5" id="descripcion" 
                  placeholder="Envianos una descripcion" required></textarea>
                </div>
                <input type="submit" class="btn btn-outline-info btn-lg" id="btnEnvio" value="  Enviar ">
            </form>
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
            <p><a class="dark-grey-text" href="productos.php">1 Semana</a></p>
            <p><a class="dark-grey-text" href="productos.php">5 Semanas</a></p>
            <p><a class="dark-grey-text" href="productos.php">10 Semanas</a></p>
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
  <scriocalhost/Avicola/index.phppt src="librerias/popper.min.js"></script>
  <script src="librerias/fontawesome-free-5.15.1-web/js/fontawesome.min.js"></script>
  <script src="librerias/package/dist/sweetalert2.all.min.js"></script>
  <script src="js/chat.js"></script>
  <script src="js/envioForm.js"></script>
</html>