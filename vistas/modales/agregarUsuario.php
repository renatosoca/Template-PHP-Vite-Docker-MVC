<?php
include_once("../../config/sesion.php");
if ($_SESSION['permiso'] == "0") {
    header("Location: ../vistas/perfil.php");
} else {
    require_once "../../config/conexion.php";
}
?>




<div class="user">
    <div class="user__top">
        <h1 class="user__title">Agregar Usuario</h1>
        <i id="close_modal" class="fa-solid fa-circle-xmark close_modal"></i>
    </div>

    <form action="" class="user__form" id="formUsuarios">
        <h2>Información del usuario</h2>

        <div class="user__two grid">
            <div class="grid__container">
                <div class="user__input">
                    <label for="">DNI</label>
                    <input type="text" placeholder="DNI">
                </div>

                <div class="user__inputs">
                    <div class="user__input">
                        <label for="">Apell. Pater</label>
                        <input type="text" placeholder="Apellido Pater">
                    </div>

                    <div class="user__input">
                        <label for="">Apell. Mater</label>
                        <input type="text" placeholder="Apellido Mater">
                    </div>
                </div>
            </div>

            <div class="grid__container">
                <div class="user__input">
                    <label for="">Nombres</label>
                    <input type="text" placeholder="Nombres">
                </div>

                <div class="user__inputs">
                    <div class="user__input">
                        <label for="">Sexo</label>
                        <input type="text" placeholder="Tu sexo">
                    </div>

                    <div class="user__input">
                        <label for="">Edad</label>
                        <input type="text" placeholder="Tu edad">
                    </div>
                </div>
            </div>
        </div>

        <div class="grid__tree grid">
            <div class="user__input">
                <label for="">Fech. Nac</label>
                <input type="date" placeholder="DNI">
            </div>
            <div class="user__input">
                <label for="">Telef</label>
                <input type="tel" placeholder="Tu telfono">
            </div>
            <div class="user__input file">
                <label for="">Foto</label>
                <input type="file">
            </div>
        </div>

        <div class="grid__one grid">
            <div class="user__input">
                <label for="">Correo Electrónico</label>
                <input type="text" placeholder="Correo Electrónico">
            </div>
        </div>

        <button type="submit" class="user__btn">Guardar</button>
    </form>
</div>

<!-- <script type="text/javascript">
    $(document).on("change", "#fotoUsuario", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        $('#preload-image').attr('src', URL.createObjectURL(e.target.files[0]));

    });
</script> -->