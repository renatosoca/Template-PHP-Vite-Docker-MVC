<?php 

require "../../config/conexion.php";

$id = $_GET["id"];

$sql = "SELECT * from info_planes WHERE id = '".$id."'";

$datos = consultarDatos($sql);



?>

<div class="modal__container">
    <div class="modal__title">
        <h1 class="text__title">Actualizar Plan</h1>
        <i id="close-modal" class="fa-solid fa-circle-xmark"></i>
    </div>
            
    <form action="" class="modal__form">
        <input type="hidden" id="id_plan_edit" value="<?php echo $datos["id"]?>">
        <div class="modal__input">
            <label for="">Plan:</label>
            <input type="text" id="nombre_plan_edit" value="<?php echo $datos["nombre"]?>">
        </div>
        <div class="modal__input">
            <label for="">Costo:</label>
            <input type="text" id="costo_plan_edit" value="<?php echo $datos["costo"]?>">
        </div>
        <div class="modal__input">
            <label for="">Duración:</label>
            <input type="text" id="duracion_plan_edit" value="<?php echo $datos["duracion"]?>">
        </div>
        <div class="modal__input">
            <label for="">Descripción:</label>
            <input type="text" id="descripcion_plan_edit" value="<?php echo $datos["descripcion"]?>">
        </div>
        <div class="modal__input">
            <input id="editar_plan_modal" type="submit" class="btn" value="Actualizar">
        </div>
    </form>
</div>