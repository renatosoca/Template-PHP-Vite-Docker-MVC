$(document).ready(function() {
    listarTabla();
});

var listarTabla = function(){
    $.get(
        "../controlador/formPlanes.php",
        {
            proceso: "listarTabla",
        },
        function (data) {
            $("#table-body").html(data);
        }
    )
}

$(document).on("click","#botonPlan",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if($("#nombrePlan").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#costoPlan").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#duracionPlan").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#descripcionPlan").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    {
        $.get(
            "../controlador/formPlanes.php",
            {
                proceso: "crearPlan",
                nombre: $("#nombrePlan").val(),
                costo: $("#costoPlan").val(),
                duracion: $("#duracionPlan").val(),
                descripcion: $("#descripcionPlan").val(),
            },
            function (data) {
                alertify.success("Se creo el plan con Exito.");
                $("#crearPlan")[0].reset();
                listarTabla();
            }
        )
    }    
});

$(document).on("click",".bottom-delete",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    var id = $(this).attr("id");

    $.get(
        "../controlador/formPlanes.php",
        {
            proceso: "eliminarPlan",
            id: id,
        },
        function (data) {
            if(data == "1"){
                alertify.success("Se elimino el plan con éxito.");
                listarTabla();
            }else{
                alertify.error("Error, no se pudo eliminar el plan.");
            }
            
            
        }
    )

});



$(document).on("click",".bottom-edit",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    $("#editarPlanModal").load(
        "../vistas/modales/editarPlan.php?id=" + $(this).attr("id")
        );

    $("#editarPlanModal").addClass("active");


});

$(document).on("click","#close-modal", function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    $("#editarPlanModal").removeClass("active");
});

$(document).on("click","#editar_plan_modal",function (e){
    e.preventDefault();
    e.stopImmediatePropagation();

    if($("#nombre_plan_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#costo_plan_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#duracion_plan_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    if($("#descripcion_plan_edit").val() == ""){alertify.warning("Recuerda llenar todos los campos.");}else
    {
        $.get(
            "../controlador/formPlanes.php",
            {
                proceso: "editarPlan",
                id: $("#id_plan_edit").val(),
                nombre: $("#nombre_plan_edit").val(),
                costo: $("#costo_plan_edit").val(),
                duracion: $("#duracion_plan_edit").val(),
                descripcion: $("#descripcion_plan_edit").val(),
            },
            function (data) {
                if(data == "1"){
                    alertify.success("Se edito el plan con éxito.");
                    listarTabla();
                    $("#editarPlanModal").removeClass("active");
                }else{
                    alertify.error("Error, no se pudo editar el plan.");
                }
            }
        )        
                
    }
    
});
