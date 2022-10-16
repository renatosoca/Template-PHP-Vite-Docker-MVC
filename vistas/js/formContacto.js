$(document).on("click", "#enviar_contacto",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();
    
    var reCaptcha = grecaptcha.getResponse();

    if(
        $("#nombre_contacto").val() != "" ||
        $("#email_contacto").val() != "" ||
        $("#cel_contacto").val() != "" ||
        $("#mensaje_contacto").val() != ""
    ){
        if(
            $('input:checkbox[name=terminos_contacto]:checked').val() == 1
        ){
            if(
                reCaptcha != 0
            ){
                $.get(
                    "./controlador/formContacto.php",
                    {
                        proceso: "contacto",
                        nombre_contacto: $("#nombre_contacto").val(),
                        email_contacto: $("#email_contacto").val(),
                        cel_contacto: $("#cel_contacto").val(),
                        mensaje_contacto: $("#mensaje_contacto").val(),
                        terminos_contacto: $('input:checkbox[name=terminos_contacto]:checked').val(),
                        enviar_correo: $('input:checkbox[name=enviar_correo]:checked').val(),
                    },
                    function (data) {
                        alertify.success("Su mensaje fue enviado con exito.");
                        $("#formulario_contacto")[0].reset();
                        grecaptcha.reset();
                    }
                )
            }else{
                alertify.error("Verifica que no eres un robot.")
            }
        }else{
            alertify.error("Debes aceptar los terminos y condiciones.");
        }
    }else{
        alertify.warning("Recuerda llenar todos los campos.");
    }
});