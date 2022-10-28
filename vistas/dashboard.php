<?php
    include_once("../config/sesion.php");
    if($_SESSION['permiso'] == "0"){
        header("Location: ../vistas/perfil.php");
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="icon" href="../assets/images/icon.png">

    <!-- General Style -->
    <link rel="stylesheet" href="../assets/css/Admin_General.css">

    <!-- Dashboard Style -->
    <link rel="stylesheet" href="../assets/css/Admin_Dash.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="body">

    <?php include './Templates-admin/Nav.php' ?>

    <div class="main__container">
        <h2 class="main__title">Resumen</h2>

	    <main class="dbd__container">
            <div class="dbd__box">
                <h2>2</h2>
                <h3 class="dbd__info">Usuarios Registrados</h3>
                <a href="./usuarios.html" class="btn">Mirar Usuarios</a>
            </div>

            <div class="dbd__box">
                <h2>2</h2>
                <h3 class="dbd__info">Clientes Registrados</h3>
                <a href="#" class="btn">Mirar Clientes</a>
            </div>

            <div class="dbd__box">
                <h2>2</h2>
                <h3 class="dbd__info">Planes Registrados</h3>
                <a href="./planes.html" class="btn">Mirar Planes</a>
            </div>
        </main>
    </div>


    <script src="../assets/js/Index_Admin.js"></script>
</body>

</html>