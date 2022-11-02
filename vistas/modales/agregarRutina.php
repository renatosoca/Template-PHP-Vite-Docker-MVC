<?php
include_once("../../config/sesion.php");
if ($_SESSION['permiso'] == "0") {
    header("Location: ../vistas/perfil.php");
} else {
    require_once "../../config/conexion.php";
}
?>

<div class="modal__container">
    <div class="modal__title">
        <h1 class="text__title">Agregar Rutina</h1>
        <i id="close_modal" class="fa-solid fa-circle-xmark"></i>
    </div>

    <form action="" class="routines__create" id="formRutinas">
        <div class="routines__container">
            <div class="routines__inputs">
                <label for="">Nombre</label>
                <input type="text" name="" id="nombre_rutinas" placeholder="Ingrese nombre" required>
            </div>
            <div class="routines__inputs">
                <label for="">Lunes</label>
                <input type="text" name="" id="lunes_rutinas" placeholder="Ingrese rutina" required>
            </div>
            <div class="routines__inputs">
                <label for="">Martes</label>
                <input type="text" name="" id="martes_rutinas" placeholder="Ingrese rutina" required>
            </div>
            <div class="routines__inputs">
                <label for="">Miercoles</label>
                <input type="text" name="" id="miercoles_rutinas" placeholder="Ingrese rutina" required>
            </div>

            <div class="routines__inputs">
                <label for="">Jueves</label>
                <input type="text" name="" id="jueves_rutinas" placeholder="Ingrese rutina" required>
            </div>
            <div class="routines__inputs">
                <label for="">Viernes</label>
                <input type="text" name="" id="viernes_rutinas" placeholder="Ingrese rutina" required>
            </div>
            <div class="routines__inputs">
                <label for="">Sabado</label>
                <input type="text" name="" id="sabado_rutinas" placeholder="Ingrese rutina" required>
            </div>
        </div>

        <div class="routines__btn">
            <input id="crearRutinas" type="submit" class="btn btn-routine">Crear</input>
        </div>

    </form>

</div>