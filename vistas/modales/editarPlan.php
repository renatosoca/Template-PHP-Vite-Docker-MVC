<?php

require "../../config/conexion.php";

$id = $_GET["id"];

$sql = "SELECT * from info_planes WHERE id = '" . $id . "'";

$datos = consultarDatos($sql);

?>

<div class="modal__container">
    <div class="user__top">
        <h1 class="user__title">Actualizar Plan</h1>
        <i id="close-modal" class="fa-solid fa-circle-xmark close_modal"></i>
    </div>

    <form action="" class="modal__form">
        <input type="hidden" id="id_plan_edit" value="<?php echo $datos["id"] ?>">
        <div class="plans__container">
            <div class="plans__inputs">
                <label for="">Plan:</label>
                <input type="text" id="nombre_plan_edit" value="<?php echo $datos["nombre"] ?>">
            </div>
            <div class="plans__inputs">
                <label for="">Costo:</label>
                <input type="text" id="costo_plan_edit" value="<?php echo $datos["costo"] ?>">
            </div>
            <div class="plans__inputs">
                <label for="">Duración:</label>
                <input type="text" id="duracion_plan_edit" value="<?php echo $datos["duracion"] ?>">
            </div>
            <div class="plans__inputs">
                <label for="">Descripción:</label>
                <input type="text" id="descripcion_plan_edit" value="<?php echo $datos["descripcion"] ?>">
            </div>
            <div class="plans__inputs">
                <input id="editar_plan_modal" type="submit" class="btn" value="Actualizar">
            </div>
        </div>
    </form>
</div>