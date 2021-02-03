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
            <a class="navbar-brand">
              <img src="img/iconoNavbar.png" alt="Logo" style="width:45px;">
            </a>
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nosotros.php">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactenos.php">Contactenos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="productos.php">Nuestros Productos</a>
              </li>
            <ul>
          </div>  
        </nav>
    </div>
    
    <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="container-fluid">
        <div class="myDiv animated fadeInDown">
          <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <h2>Ofrecemos aves en diferentes etapas de crecimiento observa mas detalles</h2>
                <a href="tienda.php" class="btn btn-info btn-lg" role="button"> AQUI</a>
            </div>
            <div class="col"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Cards -->  
    <div id="descSemanas" class="titulos">Nuestros productos</div><hr><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col zoom">
          <div class="card btn-outline-light text-dark">
            <img class="card-img-top" src="img/1Semana.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title"> 1 Semana </h4>
              <div class="precio"> VALOR UND. 1.500 $ </div>
              <a href="tienda.php" class="stretched-link"></a>
            </div>
          </div>
        </div>
            
        <div class="col zoom">
          <div class="card btn-outline-light text-dark">
            <img class="card-img-top" src="img/5Semanas.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title"> 5 Semanas </h4>
              <div class="precio"> VALOR UND. 9.500 $ </div>
              <a href="tienda.php" class="stretched-link"></a>
            </div>
          </div>
        </div>
        
        <div class="col zoom">
          <div class="card btn-outline-light text-dark">
            <img class="card-img-top" src="img/10Semanas.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title"> 10 Semenas </h4>
              <div class="precio">VALOR UND. 18.500 $</div>
              <a href="tienda.php" class="stretched-link"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Descripcion semanas -->
    <br><br><div class="titulos">Cuidados Generales</div><br>
    <div class="descTarjetas">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="cards"><img src="img/pc1Semana.png"></div>
          </div>
          <div class="col">
            <div class="descSemanas">
              <h3>Primer Semana</h3><br>
              <p>En los primeros dias realizamos manejo de camas, sobretodo debajo y al lado de los bebederos,
                  esta operación se realiza muy temprano en la mañanas.
              </p>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col">
            <div class="descSemanas">
              <h3>Quinta Semana</h3><br>
              <p>Despues de la quinta semana debemos desinfectar los bebederos automáticos todos los días,
              verificar la mortalidad y realizar manejo de camas.</p>
                  
              <p>Nivelar comederos y bebederos, cambiar la poceta de desinfección.</p>
            </div>
          </div>
          <div class="col">
            <div class="cards"><img src="img/pc5Semana.png"></div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="cards"><img src="img/pc10Semana.png"></div>
          </div>
          <div class="col">
            <div class="descSemanas">
              <h3>Decima Semana</h3><br>
              <p>Como pueden ver el manejo durante las ultimas semanas es casi el mismo, 
                salvo que se llegaran a presentar enfermedades; despues 
                Verificamos la mortalidad y anotamos en los registros.
              </p>
            </div>  
          </div>
        </div>
      </div>
    </div>

    <!-- Contactenos -->
    <div class="contactenos_main">
      <div class="contactenos"> 
        <h1>Consulte marcas, precios y promociones</h1> 
        <h3>Le responderemos en la mayor brevedad posible.</h3>
        <br><a href="contactenos.php" class="btn btn-info btn-lg" role="button"> CONTACTENOS </a>
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
          <header class="page-header">
            <p><a class="dark-grey-text" href="#descSemanas">1 Semana</a></p>
            <p><a class="dark-grey-text" href="#descSemanas">5 Semanas</a></p>
            <p><a class="dark-grey-text" href="#descSemanas">10 Semanas</a></p>
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
</html>