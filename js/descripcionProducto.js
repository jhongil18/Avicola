function descripcionProducto(idProducto){
    let id = idProducto; // Obtengo el id del producto a mostrar
    if(id!= ''){
        var datos = "FUNCION=vistaProducto&idProducto=" + id;
        $.ajax({
            url: '../Avicola/process/tiendaProcess.php', // Url a donde enviaremos los datos
            type: 'POST', // Tipo de envio 
            data: datos,
            dataType: 'json', //Tipo de Respuesta
            success: function(respuesta) {
                let json = respuesta; // Obtengo la respuesta en la variable json
                console.log(json);
                if(json !=''){ 
                    let img = json[0]['img']; 
                    let nombre = json[0]['nombre'];
                    let valor = json[0]['valor'];
                    let descripcion = json[0]['descripcion'];

                    $("#contenedor").load("compras.php",{img, nombre}); 

                    //window.location.href="./compras.php?imagen=img";
	
                    //$(document).ready(function(){
                        //$("#boton").click(function(){
                            //$.post("./compras.php", {img, nombre, valor, descripcion}, function(htmlexterno){
                                //$("#cargaexterna").html(htmlexterno);
                            //});
                        //});
                    //});

                    //$.post("./compras.php", {img, nombre, valor, descripcion}, function(resultado){
                        //console.log(resultado);
                        //$("#cargaexterna").html(htmlexterno);
                    //});
                }
            }
        });
    }else{
        alertJquery(response);
    }
    return false;
}