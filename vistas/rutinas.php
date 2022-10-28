<?php
    include_once("../config/sesion.php");
    if($_SESSION['permiso'] == "0"){
        header("Location: ../vistas/perfil.php");
    }
?>
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutinas</title>

    <!-- General Style -->
    <link rel="stylesheet" href="../assets/css/Admin_General.css">

    <!-- Dashboard Style -->
    <link rel="stylesheet" href="../assets/css/Admin_Rutinas.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <h2 class="main__title">Rutinas</h2>

        <div class="main__new">
            <a href="registro-usuario.php" class="btn">Nueva Rutina</a>
        </div>

        <main class="main__table">
            <h3 class="main__subtitle">Lista de Rutinas</h3>

            <table class="table">
                <thead class="table__head">
                    <tr>
                        <th class="table__th">Nombre</th>
                        <th class="table__th">Lunes</th>
                        <th class="table__th">Martes</th>
                        <th class="table__th">Miercoles</th>
                        <th class="table__th">Jueves</th>
                        <th class="table__th">Viernes</th>
                        <th class="table__th">Sabado</th>
                        <th class="table__th">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table__body" id="table-body">
                    
                </tbody>
            </table>
        </main>
    </div>

    <section class="modal" id="modalEditar">
    </section>


    <script src="./../assets/js/Index_Admin.js"></script>
    <script src="js/formRutinas.js"></script>
</body>

</html>