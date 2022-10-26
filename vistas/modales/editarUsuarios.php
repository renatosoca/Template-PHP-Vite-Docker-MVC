
<?php 

require "../../config/conexion.php";

$id = $_GET["id"];

$sql = "SELECT u.id, u.dni, u.nombre, u.email, u.celular, u.direccion, p.nombre as NombrePlan from info_usuarios u 
        INNER JOIN info_planes p ON u.id_plan = p.id WHERE u.id = '".$id."'";

$datos = consultarDatos($sql);



?>

        <div class="modal__container">
            <div class="modal__title">
                <h1 class="text__title">Actualizar Datos Usuario</h1>
                <i id="close-modal" class="fa-solid fa-circle-xmark"></i>
            </div>
            
            <form action="" class="modal__form">
            <input type="hidden" id="id_usuario_edit" value="<?php echo $datos["id"]?>">
                <div class="modal__input">
                    <label for="">Dni:</label>
                    <input type="text" id="dni_usuario_edit" value="<?php echo $datos["dni"]?>">
                </div>
                <div class="modal__input">
                    <label for="">Nombre:</label>
                    <input type="text" id="nombre_usuario_edit" value="<?php echo $datos["nombre"]?>">
                </div>
                <div class="modal__input">
                    <label for="">Email:</label>
                    <input type="text" id="email_usuario_edit" value="<?php echo $datos["email"]?>">
                </div>
                <div class="modal__input">
                    <label for="">Celular:</label>
                    <input type="text" id="celular_usuario_edit" value="<?php echo $datos["celular"]?>">
                </div>
                <div class="modal__input">
                    <label for="">Direccion:</label>
                    <input type="text" id="direccion_usuario_edit" value="<?php echo $datos["direccion"]?>">
                </div>
                <div class="modal__input">
                    <label for="">Membresia:</label>
                    <input type="text" id="membresia_usuario_edit" value="<?php echo $datos["NombrePlan"]?>">
                </div>
                    <div class="modal__input">
                    <input id="editar_usuario_modal" type="submit" class="btn" value="Actualizar">
                </div>
            </form>
        </div>