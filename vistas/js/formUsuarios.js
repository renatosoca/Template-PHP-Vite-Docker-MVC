$(document).ready(function() {
    listarTabla();
});

var listarTabla = function(){
    $.get(
        "../controlador/formUsuarios.php",
        {
            proceso: "listarTabla",
        },
        function (data) {
            $("#table-body").html(data);
        }
    )
}

$(document).on("click","#crearUsuarios",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if($("#nombreUsuario").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#dniUsuario").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#emailUsuario").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#celularUsuario").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#direccionUsuario").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#planUsuario").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
          
    {
        $.get(
            "../controlador/formUsuarios.php",
            {
                proceso: "crearUsuarios",
                dni: $("#dniUsuario").val(),
                nombre: $("#nombreUsuario").val(),
                email: $("#emailUsuario").val(),
                celular: $("#celularUsuario").val(),
                direccion: $("#direccionUsuario").val(),
                plan: $("#planUsuario").val(),
                foto: $("#fotoUsuario").val(),
            },
            function (data) {
                if(data == "1"){
                    alertify.success("Se creo el usuario con éxito.");
                    $("#formUsuarios")[0].reset();
                    listarTabla();
                }else{
                    alertify.error("Error, no se pudo crear Usuario");
                }
                
                
            }
        )
    }
    
});
    

$(document).on("click",".bottom-delete",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    var id = $(this).attr("id");

    $.get(
        "../controlador/formUsuarios.php",
        {
            proceso: "eliminarUsuario",
            id: id,
        },
        function (data) {
            if(data == "1"){
                alertify.success("Se elimino la rutina con éxito.");
                listarTabla();
            }else{
                alertify.error("Error, no se pudo eliminar la rutina.");
            }
            
            
        }
    )

});

//modales

$(document).on("click",".bottom-edit",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    $("#modalEditar").load(
        "../vistas/modales/editarUsuarios.php?id=" + $(this).attr("id")
        );

    $("#modalEditar").addClass("active");


});

$(document).on("click","#close-modal", function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    $("#modalEditar").removeClass("active");
});

$(document).on("click","#editar_usuario_modal",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if($("#id_usuario_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#dni_usuario_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#nombre_usuario_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#email_usuario_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#celular_usuario_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#direccion_usuario_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#membresia_usuario_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else

 
    {
        $.get(
            "../controlador/formUsuarios.php",
            {
                proceso: "editarUsuarios",
                id: $("#id_usuario_edit").val(),
                dni: $("#dni_usuario_edit").val(),
                nombre: $("#nombre_usuario_edit").val(),
                email: $("#email_usuario_edit").val(),
                celular: $("#celular_usuario_edit").val(),
                direccion: $("#direccion_usuario_edit").val(),
                membresia: $("#membresia_usuario_edit").val(),
               
              
            },
            function (data) {
                if(data == "1"){
                    alertify.success("Se edito el usuario con éxito.");
                    listarTabla();
                    $("#modalEditar").removeClass("active");
                }else{
                    alertify.error("Error, no se pudo editar el usuario.");
                }
            }
        )        
                
    }
    
});

