$(document).ready(function() {
    $("#btnFinalizarCompra").click(function() {
        let idCompra = $("#idCompra").val();
        let idProducto = $("#idProducto").val();
        let valor = $("#valor").val();
        let cantidad = $("#cantidadProducto").val();
        let total = $("#total").val();

        if(idCompra != '' && valor != '' && cantidad != ''){
            var datos = "FUNCION=finalizarCompra&idCompra=" + idCompra + "&idProducto=" + idProducto + "&valor=" + valor + "&cantidad=" + cantidad + "&total=" + total;
            $.ajax({
                url: '../Avicola/process/tiendaProcess.php', // Url a donde enviaremos los datos
                type: 'POST', // Tipo de envio 
                data: datos,
                dataType: 'json', // Tipo de Respuesta
                success: function(respuesta) {
                    if(respuesta > 0){
                        Swal.fire({ // Anuncio de Compra Finalizada
                            position: 'top-end',
                            icon: 'success',
                            title: 'Su compra a finalizado',
                            showConfirmButton: false,
                            timer: 2500
                        })

                        setTimeout(function() {
                            window.location.href = "../Avicola/productos.php";
                        }, 2800);
                    }
                }
            });
        }else{
            Swal.fire({ // Anuncio
                icon: 'error',
                title: '¡Atención!',
                text: 'Debe Elegir Una Cantidad',
            })
        }
        return false;
    });

    // Elimina El Detalle De La Compra
    $("#btnEliminar").click(function(){
        let id_detalleCompra = $("#id_detalleCompra").val();

        if(id_detalleCompra != ''){
            var datos = "FUNCION=eliminarDetalleCompra&id_detalleCompra=" + id_detalleCompra;
            $.ajax({
                url: '../Avicola/process/tiendaProcess.php', // Url a donde enviaremos los datos
                type: 'POST', // Tipo de envio 
                data: datos,
                dataType: 'json', // Tipo de Respuesta
                success: function(respuesta) {
                    if(respuesta > 0){
                        location.reload();
                    }else{
                        window.location.href = "../Avicola/tienda.php";
                    }
                }
            });
        }
        return false;
    });
});

// Total
function obtenerTotal(val) {
    let valor = $("#valor").val();
    let cantidadProducto = $("#cantidadProducto").val();

    let total = valor * cantidadProducto;
    let objetivo = document.getElementById('totl');
    objetivo.innerHTML = total;

    let obje = document.getElementById('subtotal');
    obje.innerHTML = total;

    let objeti = document.getElementById('TOTAL');
    objeti.innerHTML = total;

    document.getElementById('total').value = total;
}

function agregarCarrito(idProducto){
    let id = idProducto;
    let datos = "FUNCION=insertCarrito&idProducto=" + id;
    $.ajax({
        url: '../Avicola/process/tiendaProcess.php',
        type: 'POST',
        data: datos,
        dataType: 'json',
        success: function(respuesta){
            if (respuesta > 0){
                let idCompra = respuesta;
                window.location.href = "../Avicola/carritoCompras.php?idCompra="+idCompra;
            }
        }
    });
};