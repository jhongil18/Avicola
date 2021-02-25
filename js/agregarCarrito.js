function agregarCarrito(idProducto){
        let id = idProducto;
        let datos = "FUNCION=insertCarrito&idProducto=" + id;
        $.ajax({
            url: '../Avicola/process/tiendaProcess.php',
            type: 'POST',
            data: datos,
            dataType: 'json',
            sucess: function(respuesta){
                console.log(respuesta);
            }
        });
    };
