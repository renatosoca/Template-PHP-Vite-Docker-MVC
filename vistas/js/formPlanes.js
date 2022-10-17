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

    if(
        $("#nombrePlan").val() != "" ||
        $("#costoPlan").val() != "" ||
        $("#duracionPlan").val() != "" ||
        $("#descripcionPlan").val() != ""
    ){
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
    }else{
        alertify.warning("Recuerda llenar todos los campos.");
    }
    
});
