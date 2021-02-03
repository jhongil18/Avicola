$(document).ready(function() {
    $("#btnEnvio").click(function() {
        let nombres = $("#nombres").val();
        let apellidos = $("#apellidos").val();
        let email = $("#email").val();
        let telefono = $("#telefono").val();
        let descripcion = $("#descripcion").val();
        if(nombres!= '' && apellidos!= '' && email!= '' && telefono!= '' && descripcion!= ''){
            var datos = "FUNCION=enviar&" + "nombres=" + nombres + "&apellidos=" + apellidos + "&email=" + email + "&telefono=" + telefono + "&descripcion=" + descripcion;
            $.ajax({
                url: '../Avicola/process/envioForm.php', // Url a donde enviaremos los datos
                type: 'POST', // Tipo de envio 
                data: datos,
                dataType: 'json', // Tipo de Respuesta
                success: function(respuesta) {
                    if (respuesta == 1) {
                        Swal.fire({ // Anuncio de Email enviado
                            position: 'top-end',
                            icon: 'success',
                            title: 'Email enviado exitosamente',
                            showConfirmButton: false,
                            timer: 2500
                        })
                    }
                }
            });
        }else{
            Swal.fire({ // Anuncio
                icon: 'error',
                title: '¡Atención!',
                text: 'Por Favor Digite los Campos Obligatorios',
            })
        }
        return false;
    });
});