<?php
include_once("../../config/sesion.php");
if ($_SESSION['permiso'] == "0") {
    header("Location: ../vistas/perfil.php");
} else {
    require_once "../../config/conexion.php";
}
?>

<div class="modal__container">
    <div class="user__top">
        <h1 class="user__title">Agregar Plan</h1>
        <i id="close_modal" class="fa-solid fa-circle-xmark"></i>
    </div>

    <form action="" class="Plans__create" id="crearPlan">
        <div class="plans__container">
            <div class="plans__inputs">
                <label for="">Plan</label>
                <input type="text" name="" id="nombrePlan" placeholder="Ingrese nombre">
            </div>
            <div class="plans__inputs">
                <label for="">Costo</label>
                <input type="text" name="" id="costoPlan" placeholder="Ingrese costo en soles" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="plans__inputs">
                <label for="">Duración</label>
                <input type="text" name="" id="duracionPlan" placeholder="Ingrese duración en días" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="plans__inputs">
                <label for="">Descripción</label>
                <input type="text" name="" id="descripcionPlan" placeholder="Ingrese breve descripción">
            </div>
        </div>

        <div class="plans__btn">
            <button id="botonPlan" class="btn btn-plan">Crear</button>
        </div>

    </form>

</div>