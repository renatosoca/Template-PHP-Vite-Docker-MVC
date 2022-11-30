$(document).on("click",".cambiar-contra",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    $("#editarModalPerfil").load(
        "../vistas/modales/editarPerfil.php?id=" + $(this).attr("id")
        );

    $("#editarModalPerfil").addClass("active");


});

$(document).on("click","#close_modal", function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    $("#editarModalPerfil").removeClass("active");
});

$(document).on("click","#editar_modal_perfil",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if($("#usuario_editar_perfil").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#nombre_editar_perfil").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#passantigua_editar_perfil").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#passnueva_editar_perfil").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    {
        $.get(
            "../controlador/editarPerfil.php",
            {
                proceso: "editarPerfil",
                id: $("#id_editar_perfil").val(),
                usuario: $("#usuario_editar_perfil").val(),
                nombre: $("#nombre_editar_perfil").val(),
                passantigua: $("#passantigua_editar_perfil").val(),
                passnueva: $("#passnueva_editar_perfil").val(),
            },
            function (data) {
                if(data == 1){
                    alertify.success("Se edito edito tu perfil con éxito.");
                    $("#editarModalPerfil").removeClass("active");
                }else if(data == 2){
                    alertify.error("Error, tu contraseña actual es incorrecta.");
                }else{
                    alertify.error("Error, inesperado.");
                }
            }
        )        
                
    }
    
});