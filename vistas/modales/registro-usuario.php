<?php
    include_once("../config/sesion.php");
    if($_SESSION['permiso'] == "0"){
        header("Location: ../vistas/perfil.php");
    }else{
        require_once "../config/conexion.php";
    }
?>
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>

    <!-- General Style -->
    <link rel="stylesheet" href="../assets/css/Admin_General.css">

    <!-- Dashboard Style -->
    <link rel="stylesheet" href="../assets/css/Admin_Usuarios.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Logo -->
     <link rel="icon" href="./src/img/icon.png">

     <!-- AJAX -->
    <script src=".././assets/js/jquery-3.4.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

    <!-- NOTIFY -->
    <link rel="stylesheet" href=".././assets/themes/default.css">
    <link rel="stylesheet" href=".././assets/css/alertify.css">
    <script src=".././assets/js/alertify.js"></script>

    <script type="text/javascript">
            $(document).on("change","#fotoUsuario",function(e){
            e.preventDefault();
            e.stopImmediatePropagation();

            $('#preload-image').attr('src', URL.createObjectURL(e.target.files[0]));

        });
    </script>


</head>
<body class="body">

    <?php include '../vistas/Templates-admin/Nav.php' ?>

    <main class="main__container">

        <div class="main__btns">
            <div id="btn-nav" class="main__btn btn">
                <i class="fa-solid fa-bars"></i>
                <span> Menú</span>
            </div>

            <div class="btn__back">
                <a href="usuarios.php" class="btn">Volver</a>
            </div>
        </div>

        <div class="main__title">
            <h2 class="text-center">Registro de Usuarios</h2>
        </div>

        <div class="main__register">
            <form action="" class="register__form" id="formUsuarios" >
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

                                while($row = mysqli_fetch_array($id_rutina)){
                                    echo "<option value='".$row["id"]."'>".$row["nombre"]."</option>";
                                }

                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="register__profile">
                        <h3>Foto de Perfil</h3>

                        <div  class="register__profile-img">
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

    </main>

    <script src="../assets/js/Index_Admin.js"></script>
    <script src="js/formUsuarios.js"></script>
</body>

</html>