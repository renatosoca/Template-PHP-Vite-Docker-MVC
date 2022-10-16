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

    <link rel="icon" href="./src/img/icon.png">

    <!-- General Style -->
    <link rel="stylesheet" href="./src/css/general.css">

    <!-- Dashboard Style -->
    <link rel="stylesheet" href="./src/css/dashboard.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="body">

    <aside class="nav__left" id="aside-nav">
        <div class="nav__container">
            <header class="header">
                <h1 class="header__logo">POWER-GYM</h1>
                <span class="header__close"><i id="close-nav" class="fa-solid fa-circle-xmark"></i></span>
            </header>

            <nav class="nav__menu">
                <a href="dashboard.php" class="nav__links">
                    <i class="fa-solid fa-chart-line nav__icon"></i>
                    <span class="nav__links-text">Dashboard</span>
                </a>

                <a href="planes.php" class="nav__links">
                    <i class="fa-solid fa-sheet-plastic nav__icon"></i>
                    <span class="nav__links-text">Planes</span>
                </a>

                <a href="rutinas.php" class="nav__links">
                    <i class="fa-solid fa-route nav__icon"></i>
                    <span class="nav__links-text">Rutinas</span>
                </a>

                <a href="usuarios.php" class="nav__links">
                    <i class="fa-solid fa-users nav__icon"></i>
                    <span class="nav__links-text">Usuarios</span>
                </a>

                <a href="perfil.php" class="nav__links">
                    <i class="fa-solid fa-address-card nav__icon"></i>
                    <span class="nav__links-text">Perfil</span>
                </a>
            </nav>

            <form class="nav__menu" action="">
                <button type="submit" class="nav__links">
                    <i class="fa-sharp fa-solid fa-circle-left nav__icon"></i>
                    <span class="nav__links-text">Salir</span>
                </button>
            </form>

        </div>
    </aside>

    <main class="main__container">

        <div id="btn-nav" class="main__btn btn">
            <i class="fa-solid fa-bars"></i>
            <span> Menú</span>
        </div>

        <h1>Dashboard</h1>

	<div class="dbd__container">
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
        </div>

    </main>

    <script src="src/js/admin.js"></script>

</body>

</html>