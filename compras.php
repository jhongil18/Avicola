<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="contenedor">
        <?php
            
            $img = $_REQUEST['img'];
            $nombre = $_REQUEST['nombre'];

            //$img = filter_input(INPUT_POST,"imagen",FILTER_SANITIZE_STRING);
            //$nombre = filter_input(INPUT_POST,"nombre",FILTER_SANITIZE_STRING);
            $valor = filter_input(INPUT_POST,"valor",FILTER_SANITIZE_STRING);
            $descripcion = filter_input(INPUT_POST,"descripcion",FILTER_SANITIZE_STRING);
            

            //$nom = Request.Querystring("nombre");
            echo "llego: ".$nombre;
        ?>
    </section>
</body>
<script src="js/descripcionProducto.js"></script>
</html>