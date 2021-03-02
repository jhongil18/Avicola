<?php
  require("./class/db.class.php");
  require("./class/tiendaDAO.php");
    
  $tiendaDAO = new tiendaDAO(); 
  $producto = $tiendaDAO->setCarrito();
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
      <link rel="stylesheet" href="librerias/animaciones/animate.css">
    </head>
    <body>
    <div class="carritoCompras">
      <div class="container-fluid text-center text-md-left mt-5">
        <div class="animated fadeInDown">
          <form id="form" method="POST">
            <div class="titulos">Carrito de compras</div>
            <?php
            if(mysqli_num_rows($producto) > 0){
              while($row = mysqli_fetch_assoc($producto)){ 
                $idCompra = filter_input(INPUT_GET,"idCompra",FILTER_SANITIZE_STRING); ?>
                <hr style="width: 80%;">
                <div class="row">
                  <div class="col-md-5" style="text-align:center;">
                    <img class="card-img-top" src="<?php echo $row['img']; ?>" style="width:50%;">
                  </div>
                  <div class="col-md-5"><br>
                    <div class="row">
                      <div class="col">
                        <h5><b>Valor unitario
                        <hr class="teal accent-7 mb-4 mt-0 d-inline-block" style="width: 100%;"> 
                        <?php echo $row['valor']; ?> $</b></h5>
                        <input type="hidden" id="valor" value="<?php echo $row['valor']; ?>">     
                      </div>

                      <div class="col">
                        <h5><b>Cantidad
                        <hr class="teal accent-7 mb-4 mt-0 d-inline-block" style="width: 100%;">
                        <input type="number" id="cantidadProducto" min="0" max="<?php echo $row['cantidad']; ?>" onchange="obtenerTotal(this.value)"></b></h5>     
                      </div>

                      <div class="col">
                        <h5><b>Total
                        <hr class="teal accent-7 mb-4 mt-0 d-inline-block" style="width: 100%;"> 
                        <label id="totl"></label> $</b></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-1">
                    <input type="hidden" id="id_detalleCompra" value="<?php echo $row['id_detalleCompra']; ?>">
                    <button class="btn btn-info" id="btnEliminar" style="margin-top:65px;"><i class="fas fa-trash-alt"></i></button>
                  </div>
                </div>
                <input type="hidden" id="idProducto" value="<?php echo $row['idProducto'];; ?>">
                <?php
              }
            }?>
            <div class="row">
              <div class="col-7"></div>
              <div class="col-4">
                <div class="row">
                  <div class="col">
                    <h5><b>Subtotal:</b></h5>
                    <h5><b>TOTAL:</b></h5>
                  </div>
                  <div class="col" style="text-align:right;">
                    <h5><b><label id="subtotal"></label> $</b></h5>
                    <input type="hidden" id="total" value="">
                    <h5><b><label id="TOTAL"></label> $</b></h5>
                  </div>
                </div>
                <input type="hidden" id="idCompra" value="<?php echo $idCompra; ?>">
                <input type="button" class="btn btn-info btn-block" id="btnFinalizarCompra" value="Finalizar Compra">
                <a href="productos.php" class="btn btn-secondary btn-block" style="margin-top:5px;">Seguir comprando</a>
              </div>
              <div class="col-1"></div>
            </div><br>
          </form>
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
  <script src="librerias/package/dist/sweetalert2.all.min.js"></script>
  <script src="js/agregarCarrito.js"></script>
</html>