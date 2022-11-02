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
        <h1 class="text__title">Modificar Perfil</h1>
        <i id="close_modal" class="fa-solid fa-circle-xmark"></i>
    </div>

    <form action="" class="register__form" id="formUsuarios">
        <div class="register__container">
            <div class="register__info">
                <div class="register__input">
                    <label for="">Nombre Completo</label>
                    <input type="text" id="nombreUsuario" placeholder="Ingrese su Nombre">
                </div>

                <div class="register__input">
                    <label for="">DNI</label>
                    <input type="text" id="dniUsuario" placeholder="Ingrese su Nombre">
                </div>

                <div class="register__inputs">
                    <div class="register__email">
                        <label for="">Email</label>
                        <input type="email" id="emailUsuario" placeholder="Ingrese su Email">
                    </div>

                    <div class="register__phone">
                        <label for="">Celular</label>
                        <input type="tel" id="celularUsuario" placeholder="Ingrese su Celular">
                    </div>
                </div>

                <div class="register__input">
                    <label for="">Dirección</label>
                    <input type="text" id="direccionUsuario" placeholder="Ingrese su Dirección">
                </div>

                <div class="register__select">
                    <label for="">Plan</label>
                    <select name="" id="planUsuario">
                        <?php

                        $sql = "SELECT * FROM info_rutinas";

                        $id_rutina = traerDatosTabla($sql);

                        while ($row = mysqli_fetch_array($id_rutina)) {
                            echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>

            <div class="register__profile">
                <h3>Foto de Perfil</h3>

                <div class="register__profile-img">
                    <img id="preload-image" />
                </div>

                <div class="register__profile-file">
                    <input class="profile__btn-file" accept="image/" type="file" id="fotoUsuario" placeholder="Subir imagen">
                </div>

            </div>
        </div>

        <button class="btn register__btn" id="crearUsuarios" type="submit">Registrar</button>
    </form>
</div>

<script type="text/javascript">
    $(document).on("change", "#fotoUsuario", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        $('#preload-image').attr('src', URL.createObjectURL(e.target.files[0]));

    });
</script>