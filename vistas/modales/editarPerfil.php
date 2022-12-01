<?php

require "../../config/conexion.php";

$id = $_GET["id"];

$sql = "SELECT * from info_login WHERE id = '".$id."'";

$datos = consultarDatos($sql);

?>


<div class="modal__container">
    <div class="modal__title">
        <h1 class="text__title">Cambiar Contraseña</h1>
        <i id="close_modal" class="fa-solid fa-circle-xmark close_modal"></i>
    </div>

    <form class="edit__form">
        <div class="edit__input">
            <input type="hidden" id="id_editar_perfil" value="<?php echo $datos["id"]?>">
            <label for="">Usuario</label>
            <input type="text" id="usuario_editar_perfil" value="<?php echo $datos["usuario"]?>">
        </div>

        <!-- <div class="edit__input">
            <label for="">Nombre</label>
            <input type="text" id="nombre_editar_perfil" >
        </div> -->

        <div class="edit__input">
            <label for="">Cambiar Contraseña</label>
            <input type="password" id="passantigua_editar_perfil" placeholder="Contraseña Antigua" value="<?php echo $datos["password"]?>">
            <input type="password" id="passnueva_editar_perfil" placeholder="Contraseña Nueva">
        </div>

        <div class="edit__input">
            <button id="editar_modal_perfil" type="submit" class="btn edit__btn">Guardar Cambios</button>
        </div>
    </form>
</div>