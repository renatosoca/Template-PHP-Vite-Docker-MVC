<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>

    <<!-- General Style -->
    <link rel="stylesheet" href="./src/css/general.css">

    <!-- Dashboard Style -->
    <link rel="stylesheet" href="./src/css/usuario.css">

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
                            <label for="">Membresía</label>
                            <select name="" id="membresiaUsuario">
                                <option value="Mensual">Mensual</option>
                                <option value="Anual">Anual</option>
                            </select>
                        </div>
                    </div>

                    <div class="register__profile">
                        <h3>Foto de Perfil</h3>

                        <div class="register__profile-img">
                            <img src="" alt="">
                        </div>

                        <div class="register__profile-file">
                            <input class="profile__btn-file" type="file" id="fotoUsuario" placeholder="Subir imagen">
                        </div>
                        
                    </div>
                </div>

                <button class="btn register__btn" id="crearUsuarios" type="submit">Registrar</button>
            </form>
        </div>

    </main>

    <script src="src/js/admin.js"></script>
    <script src="js/formUsuarios.js"></script>
</body>

</html>