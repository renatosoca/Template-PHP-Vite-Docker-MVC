$(document).ready(function() {
    listarTabla();
});


var listarTabla = function(){
    $.get(
        "../controlador/formhmedico.php",
        {
            proceso: "listarTabla",
        },
        function (data) {
            $("#table-body").html(data);
        }
    )
}



$(document).on("click","#crearRutinas",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if($("#nombre_rutinas").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#lunes_rutinas").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#martes_rutinas").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#miercoles_rutinas").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#jueves_rutinas").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#viernes_rutinas").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#sabado_rutinas").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    {
        $.get(
            "../controlador/formRutinas.php",
            {
                proceso: "crearRutinas",
                nombre: $("#nombre_rutinas").val(),
                lunes: $("#lunes_rutinas").val(),
                martes: $("#martes_rutinas").val(),
                miercoles: $("#miercoles_rutinas").val(),
                jueves: $("#jueves_rutinas").val(),
                viernes: $("#viernes_rutinas").val(),
                sabado: $("#sabado_rutinas").val(),
            },
            function (data) {
                if(data == "1"){
                    alertify.success("Se creo la rutina con éxito.");
                    $("#formRutinas")[0].reset();
                    listarTabla();
                }else{
                    alertify.error("Error, no se pudo crear la rutina.");
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
        "../controlador/formRutinas.php",
        {
            proceso: "eliminarRutinas",
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

$(document).on("click",".bottom-edit",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    $("#modalEditar").load(
        "../vistas/modales/editarRutinas.php?id=" + $(this).attr("id")
        );

    $("#modalEditar").addClass("active");


});

$(document).on("click","#close-modal", function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    $("#modalEditar").removeClass("active");
});

$(document).on("click","#editar_rutina_modal",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if($("#id_rutina_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#nombre_rutina_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#lunes_rutina_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#martes_rutina_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#miercoles_rutina_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#jueves_rutina_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#viernes_rutina_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#sabado_rutina_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    {
        $.get(
            "../controlador/formRutinas.php",
            {
                proceso: "editarRutinas",
                id: $("#id_rutina_edit").val(),
                nombre: $("#nombre_rutina_edit").val(),
                lunes: $("#lunes_rutina_edit").val(),
                martes: $("#martes_rutina_edit").val(),
                miercoles: $("#miercoles_rutina_edit").val(),
                jueves: $("#jueves_rutina_edit").val(),
                viernes: $("#viernes_rutina_edit").val(),
                sabado: $("#sabado_rutina_edit").val(),
            },
            function (data) {
                if(data == "1"){
                    alertify.success("Se edito la rutina con éxito.");
                    listarTabla();
                    $("#modalEditar").removeClass("active");
                }else{
                    alertify.error("Error, no se pudo editar la rutina.");
                }
            }
        )        
                
    }
    
});

$(document).on("click","#AbrirhmedicoModal",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    $("#agregarhmedicoModal").load(
        "../vistas/modales/agregarhmedico.php"
        );

    $("#agregarhmedicoModal").addClass("active");

});

$(document).on("click","#close_modal", function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    $("#agregarhmedicoModal").removeClass("active");
});
    
