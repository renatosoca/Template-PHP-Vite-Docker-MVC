<?php
include_once("../config/sesion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="../assets/css/Admin_General.css">

    <!-- STYLES -->
    <link rel="stylesheet" href="../assets/css/Admin_Perfil.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AJAX -->
    <script src=".././assets/js/jquery-3.4.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

    <!-- NOTIFY -->
    <link rel="stylesheet" href=".././assets/themes/default.css">
    <link rel="stylesheet" href=".././assets/css/alertify.css">
    <script src=".././assets/js/alertify.js"></script>

    <!-- Logo -->
    <link rel="icon" href="./src/img/icon.png">


</head>

<body class="body">

    <?php include './Templates-admin/Nav.php' ?>

    <div class="main__container">
        <h1 class="main__title">Mi Perfil</h1>

        <div class="profile">
            <div class="profile__left">
                <img src="../assets/images/blog-4.webp" alt="prueba">
                <form class="profile__form" action="">
                    <input type="file">
                    <input class="btn" type="submit" value="Cambiar Foto">
                </form>
                <div class="notification__btn" id="table-body">
                    <span id="<?php echo $_SESSION["id"] ?>" class="btn">Cambiar Contraseña</span>
                </div>

            </div>

            <div class="profile__center">
                <h2 class="profile__title">Información</h2>
                <p>Nombre:</p>
                <p>Membresia:</p>
            </div>

            <div class="profile__rigth">
                <h2 class="profile__title">Rutinas</h2>
                <div class="profile__rutinas-grid">
                    <div class="profile__rutinas">
                        <h3>Lunes</h3>
                        <p class="profile__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laboriosam?</p>
                    </div>
                    <div class="profile__rutinas">
                        <h3>Martes</h3>
                        <p class="profile__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laboriosam?</p>
                    </div>
                    <div class="profile__rutinas">
                        <h3>Miercoles</h3>
                        <p class="profile__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laboriosam?</p>
                    </div>
                    <div class="profile__rutinas">
                        <h3>Jueves</h3>
                        <p class="profile__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laboriosam?</p>
                    </div>
                    <div class="profile__rutinas">
                        <h3>Viernes</h3>
                        <p class="profile__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laboriosam?</p>
                    </div>
                    <div class="profile__rutinas">
                        <h3>Sabado</h3>
                        <p class="profile__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laboriosam?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="modal" id="editarModalPerfil"></section>


    <script src="./../assets/js/Index_Admin.js"></script>
    <script src="js/editarPerfil.js"></script>
</body>

</html>