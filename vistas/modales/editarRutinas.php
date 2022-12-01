<?php

require "../../config/conexion.php";

$id = $_GET["id"];

$sql = "SELECT * from info_rutinas WHERE id = '" . $id . "'";

$datos = consultarDatos($sql);



?>

<div class="modal__container">
    <div class="user__top">
        <h1 class="user__title">Actualizar Rutina</h1>
        <i id="close-modal" class="fa-solid fa-circle-xmark close_modal"></i>
    </div>

    <form action="" class="modal__form">
        <input type="hidden" id="id_rutina_edit" value="<?php echo $datos["id"] ?>">
        <div class="routines__container">
            <div class="modal__input">
                <label for="">Nombre:</label>
                <input type="text" id="nombre_rutina_edit" value="<?php echo $datos["nombre"] ?>">
            </div>
            <div class="modal__input">
                <label for="">Lunes:</label>
                <input type="text" id="lunes_rutina_edit" value="<?php echo $datos["lunes"] ?>">
            </div>
            <div class="modal__input">
                <label for="">Martes:</label>
                <input type="text" id="martes_rutina_edit" value="<?php echo $datos["martes"] ?>">
            </div>
            <div class="modal__input">
                <label for="">Miercoles:</label>
                <input type="text" id="miercoles_rutina_edit" value="<?php echo $datos["miercoles"] ?>">
            </div>
            <div class="modal__input">
                <label for="">Jueves:</label>
                <input type="text" id="jueves_rutina_edit" value="<?php echo $datos["jueves"] ?>">
            </div>
            <div class="modal__input">
                <label for="">Viernes:</label>
                <input type="text" id="viernes_rutina_edit" value="<?php echo $datos["viernes"] ?>">
            </div>
            <div class="modal__input">
                <label for="">Sabado:</label>
                <input type="text" id="sabado_rutina_edit" value="<?php echo $datos["sabado"] ?>">
            </div>
        </div>
        <div class="modal__input">
                <input id="editar_rutina_modal" type="submit" class="btn" value="Actualizar">
            </div>
    </form>
</div>