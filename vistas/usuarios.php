<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <!-- General Style -->
    <link rel="stylesheet" href="./src/css/general.css">

    <!-- Dashboard Style -->
    <link rel="stylesheet" href="./src/css/usuario.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Logo -->
     <link rel="icon" href="./src/img/icon.png">


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

        <div class="main__title">
            <h2 class="text-center">Usuarios</h2>
        </div>

        <div class="main__table">
            <h3 class="main__subtitle">Lista de Usuarios</h3>

            <table class="table">
                <thead class="table__head">
                    <tr>
                        <th class="table__th">Nombre</th>
                        <th class="table__th">Email</th>
                        <th class="table__th">Celular</th>
                        <th class="table__th">Dirección</th>
                        <th class="table__th">Cambiar Plan</th>
                        <th class="table__th">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table__body">
                    <tr class="table__tr">
                        <td class="table__td">Nombre1</td>
                        <td class="table__td">Email1</td>
                        <td class="table__td">Celular1</td>
                        <td class="table__td">Direccion1</td>
                        <td class="table__td">
                            <a href="" class="btn__flex icon">
                                <i class="fa-solid fa-circle-plus btn__asigne"></i>
                                <small class="text__asigned">Asignar</small>
                            </a>
                        </td>
                        <td class="table__td">
                            <div class="table__btn">
                                <a href="#" class="icon">
                                    <i class="fa-solid fa-pen-to-square btn__edit"></i>
                                </a>
                                <form action="">
                                    <button type="submit" class="icon">
                                        <i class="fa-solid fa-trash btn__delete"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">Nombre1</td>
                        <td class="table__td">Email1</td>
                        <td class="table__td">Celular1</td>
                        <td class="table__td">Direccion1</td>
                        <td class="table__td">
                            <a href="" class="btn__flex icon">
                                <i class="fa-solid fa-circle-plus btn__asigne"></i>
                                <small class="text__asigned">Asignar</small>
                            </a>
                        </td>
                        <td class="table__td">
                            <div class="table__btn">
                                <a href="#" class="icon">
                                    <i class="fa-solid fa-pen-to-square btn__edit"></i>
                                </a>
                                <form action="">
                                    <button type="submit" class="icon">
                                        <i class="fa-solid fa-trash btn__delete"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">Nombre1</td>
                        <td class="table__td">Email1</td>
                        <td class="table__td">Celular1</td>
                        <td class="table__td">Direccion1</td>
                        <td class="table__td">
                            <a href="" class="btn__flex icon">
                                <i class="fa-solid fa-circle-plus btn__asigne"></i>
                                <small class="text__asigned">Asignar</small>
                            </a>
                        </td>
                        <td class="table__td">
                            <div class="table__btn">
                                <a href="#" class="icon">
                                    <i class="fa-solid fa-pen-to-square btn__edit"></i>
                                </a>
                                <form action="">
                                    <button type="submit" class="icon">
                                        <i class="fa-solid fa-trash btn__delete"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">Nombre1</td>
                        <td class="table__td">Email1</td>
                        <td class="table__td">Celular1</td>
                        <td class="table__td">Direccion1</td>
                        <td class="table__td">
                            <a href="" class="btn__flex icon">
                                <i class="fa-solid fa-circle-plus btn__asigne"></i>
                                <small class="text__asigned">Asignar</small>
                            </a>
                        </td>
                        <td class="table__td">
                            <div class="table__btn">
                                <a href="#" class="icon">
                                    <i class="fa-solid fa-pen-to-square btn__edit"></i>
                                </a>
                                <form action="">
                                    <button type="submit" class="icon">
                                        <i class="fa-solid fa-trash btn__delete"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

        <div class="register__users">
            <a href="registro-usuario.php" class="btn">Registrar Usuario</a>
        </div>

    </main>

    <script src="src/js/admin.js"></script>

</body>

</html>