<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutinas</title>

    <!-- General Style -->
    <link rel="stylesheet" href="./src/css/general.css">

    <!-- Dashboard Style -->
    <link rel="stylesheet" href="./src/css/rutinas.css">

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
            <h2 class="text-center">Rutinas</h2>
        </div>

        <div class="main__create">
            <h3 class="main__subtitle">Crear Rutina</h3>

            <form action="" class="routines__create">
                <div class="routines__container">
                    <div class="routines__inputs">
                        <label for="">Nombre</label>
                        <input type="text" name="" id="" placeholder="Ingrese nombre">
                    </div>
                    <div class="routines__inputs">
                        <label for="">Lunes</label>
                        <input type="text" name="" id="" placeholder="Ingrese nombre">
                    </div>
                    <div class="routines__inputs">
                        <label for="">Martes</label>
                        <input type="text" name="" id="" placeholder="Ingrese nombre">
                    </div>
                    <div class="routines__inputs">
                        <label for="">Miercoles</label>
                        <input type="text" name="" id="" placeholder="Ingrese nombre">
                    </div>
    
                    <div class="routines__inputs">
                        <label for="">Jueves</label>
                        <input type="text" name="" id="" placeholder="Ingrese nombre">
                    </div>
                    <div class="routines__inputs">
                        <label for="">Viernes</label>
                        <input type="text" name="" id="" placeholder="Ingrese nombre">
                    </div>
                    <div class="routines__inputs">
                        <label for="">Sabado</label>
                        <input type="text" name="" id="" placeholder="Ingrese nombre">
                    </div>
                </div>
                
                <div class="routines__btn">
                    <button type="submit" class="btn btn-routine">Crear</button>
                </div>
                
            </form>

        </div>

        <div class="main__table">
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
                        <th class="table__th"></th>
                    </tr>
                </thead>
                <tbody class="table__body" id="table-body">
                    <tr class="table__tr">
                        <td class="table__td">Nombre 1</td>
                        <td class="table__td">Lunes1</td>
                        <td class="table__td">Martes 1</td>
                        <td class="table__td">Miercoles 11</td>
                        <td class="table__td">Jueves 1</td>
                        <td class="table__td">Vierves 1</td>
                        <td class="table__td">Sabado 1</td>
                        <td class="table__td">
                            <div class="table__btn">
                                <a href="" class="icon">
                                    <i class="fa-solid fa-repeat btn__asigne"></i>
                                </a>

                                <a href="#" class="icon bottom-edit">
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
                        <td class="table__td">Nombre 1</td>
                        <td class="table__td">Lunes1</td>
                        <td class="table__td">Martes 1</td>
                        <td class="table__td">Miercoles 11</td>
                        <td class="table__td">Jueves 1</td>
                        <td class="table__td">Vierves 1</td>
                        <td class="table__td">Sabado 1</td>
                        <td class="table__td">
                            <div class="table__btn">
                                <a href="#" class="icon">
                                    <i class="fa-solid fa-repeat btn__asigne"></i>
                                </a>

                                <a href="#" class="icon bottom-edit">
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
                        <td class="table__td">Nombre 1</td>
                        <td class="table__td">Lunes1</td>
                        <td class="table__td">Martes 1</td>
                        <td class="table__td">Miercoles 11</td>
                        <td class="table__td">Jueves 1</td>
                        <td class="table__td">Vierves 1</td>
                        <td class="table__td">Sabado 1</td>
                        <td class="table__td">
                            <div class="table__btn">
                                <a href="#" class="icon">
                                    <i class="fa-solid fa-repeat btn__asigne"></i>
                                </a>

                                <a href="#" class="icon bottom-edit">
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
                        <td class="table__td">Nombre 1</td>
                        <td class="table__td">Lunes1</td>
                        <td class="table__td">Martes 1</td>
                        <td class="table__td">Miercoles 11</td>
                        <td class="table__td">Jueves 1</td>
                        <td class="table__td">Vierves 1</td>
                        <td class="table__td">Sabado 1</td>
                        <td class="table__td">
                            <div class="table__btn">
                                <a href="#" class="icon">
                                    <i class="fa-solid fa-repeat btn__asigne"></i>
                                </a>

                                <a href="#" class="icon bottom-edit">
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

    </main>

    <section class="modal">
        <div class="modal__container">
            <div class="modal__title">
                <h1 class="text__title">Actualizar Plan</h1>
                <i id="close-modal" class="fa-solid fa-circle-xmark"></i>
            </div>
            
            <form action="" method="post" class="modal__form">
                <div class="modal__input">
                    <label for="">Nombre:</label>
                    <input type="text" value="Ejemplo">
                </div>
                <div class="modal__input">
                    <label for="">Lunes:</label>
                    <input type="text" value="Ejemplo">
                </div>
                <div class="modal__input">
                    <label for="">Martes:</label>
                    <input type="text" value="Ejemplo">
                </div>
                <div class="modal__input">
                    <label for="">Miercoles:</label>
                    <input type="text" value="Ejemplo">
                </div>
                <div class="modal__input">
                    <label for="">Jueves:</label>
                    <input type="text" value="Ejemplo">
                </div>
                <div class="modal__input">
                    <label for="">Viernes:</label>
                    <input type="text" value="Ejemplo">
                </div>
                <div class="modal__input">
                    <label for="">Sabado:</label>
                    <input type="text" value="Ejemplo">
                </div>
                <div class="modal__input">
                    <input type="submit" class="btn" value="Actualizar">
                </div>
            </form>
        </div>
    </section>


    <script src="./src/js/admin.js"></script>

</body>

</html>