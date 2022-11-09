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
        <h1 class="text__title">Asignar Historia Medica </h1>
        <i id="close_modal" class="fa-solid fa-circle-xmark"></i>
    </div>

    <form action="" class="routines__create" id="formhmedico">
        <div class="routines__container">
        <div class="routines__inputs">
            <br><br>
        <label for="">¿Existe una causa por la cual su medico le indicó que no participara en actividades deportivas?</label><br><br>
            <select name="" id="" >
                <br>
                <option value="">No</option>
                <option value="">Si</option>
               
            </select>
            </div>
            <br>

            <div class="routines__inputs">
            <label for="">¿Toma Algun medicamento?</label><br><br>
            <select name="" id="" >
                <br>
                <option value="">No</option>
                <option value="">Si</option>
               
            </select>
            </div>
            <br>

            <div class="routines__inputs">
            <label for="">¿Alguna vez presentó mareos luego de realizar ejercicio ?</label><br><br>
            <select name="" id="" >
                <br>
                <option value="">No</option>
                <option value="">Si</option>
               
            </select>
            </div>
            <br>
            <div class="routines__inputs">
            <label for="">¿Tuvo Alguna vez dolor en el pecho al realizar ejercicio?</label><br><br>
            <select name="" id="" >
                <br>
                <option value="">No</option>
                <option value="">Si</option>
               
            </select>
            </div>
            <br>
            <div class="routines__inputs">
                <label for="">¿Tiene familiares directos con problemas cardiacos?</label><br><br>
            <select name="" id="" >
                <br>
                <option value="">No</option>
                <option value="">Si</option>
               
            </select>
            </div>
            <br>
            
            <div class="routines__inputs">
            <label for="">¿Fue sometido a alguna operación?</label><br><br>
            <select name="" id="" >
                <br>
                <option value="">No</option>
                <option value="">Si</option>
                </select>
            </div>
            <br>
            <div class="routines__inputs">
            <label for="">¿Alguna vez tuvo dificultades para respetirar, durante o despues del ejercicio?</label><br><br>
            <select name="" id="" >
                <br>
                <option value="">No</option>
                <option value="">Si</option>
            </select>
            </div>
            <br>

            <div class="routines__inputs">
            <label for="">¿Tiene o tuvo asma ?</label><br><br>
            <select name="" id="" >
                <br>
                <option value="">No</option>
                <option value="">Si</option>
               
            </select>
            </div>
        </div>

        <div class="routines__btn">
            <input id="crearhmedico" type="submit" class="btn btn-routine">Asignar Historia Medica </input>
        </div>

    </form>

</div>