<!DOCTYPE php>
<htnl lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="src/css/admin.css">

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
        <div class="main__btns">
            <div id="btn-nav" class="main__btn btn">
                <i class="fa-solid fa-bars"></i>
                <span> Menú</span>
            </div>

            <div class="btn__back">
                <a href="perfil.php" class="btn">Volver</a>
            </div>
        </div>
        
        <div class="edit">
            <h2 class="edit__title">Modificar Perfil</h2>

            <form action="" class="edit__form">
                <div class="edit__input">
                    <label for="">Usuario</label>
                    <input type="text" placeholder="Ingrese su Usuario">
                </div>

                <div class="edit__input">
                    <label for="">Nombre</label>
                    <input type="text" placeholder="Ingrese su Nombre">
                </div>

                <div class="edit__input">
                    <label for="">Cambiar Contraseña</label>
                    <input type="password" placeholder="Contraseña Antigua">
                    <input type="password" placeholder="Contraseña Nueva">
                </div>

                <div class="edit__input">
                    <button type="submit" class="btn edit__btn">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </main>

    <script src="src/js/admin.js"></script>

</body>

</html>