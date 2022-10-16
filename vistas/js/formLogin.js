$(document).on("click","#enviar_login",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if(
        $("#user").val() != ""
    ){
        if(
            $("#password").val() != ""
        ){
            $.get(
                "./controlador/formLogin.php",
                {
                    proceso: "login",
                    usuario: $("#user").val(),
                    password: $("#password").val(),
                },
                function (data) {
                    if(
                        data == "1"
                    ){
                        $(location).attr("href", "vistas/dashboard.php");
                    }else if(
                        data == "0"
                    ){
                        $(location).attr("href", "vistas/perfil.php");
                    }else{
                        alertify.warning("¡Usuario y/o password incorrectos o desactivado!");
                    }
                }
            )
        }else{
            alertify.warning("Ingrese una contraseña, por favor.")
        }
    }else{
        alertify.warning("Ingrese un usuario, por favor.")
    }
});