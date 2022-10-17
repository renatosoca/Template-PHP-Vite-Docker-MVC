$(document).on("click",".bottom-edit",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    $("#modalEditar").load(
        "../vistas/modales/editarPerfil.php?id=" + $(this).attr("id")
        );

    $("#editarModalPerfil").addClass("active");


});

$(document).on("click","#close-modal", function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    $("#editarModalPerfil").removeClass("active");
});

$(document).on("click","#editar_rutina_modal",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if($("#usuario_perfil_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#nombre_perfil_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#passantigua_perfil_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#passnueva_perfil_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    {
        $.get(
            "../controlador/formRutinas.php",
            {
                proceso: "editarRutinas",
                id: $("#id_rutina_edit").val(),
                usuario: $("#usuario_perfil_edit").val(),
                nombre: $("#nombre_perfil_edit").val(),
                passantigua: $("#passantigua_perfil_edit").val(),
                passnueva: $("#passnueva_perfil_edit").val(),
            },
            function (data) {
                if(data == "1"){
                    alertify.success("Se edito edito tu perfil con éxito.");
                    $("#editarModalPerfil").removeClass("active");
                }else if(data == "2"){
                    alertify.error("Error, tu contraseña actual es incorrecta.");
                }else{
                    alertify.error("Error, inesperado.");
                }
            }
        )        
                
    }
    
});