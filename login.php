<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPower | Login</title>

    <!-- FONT AWESOME-->
    <script src="https://kit.fontawesome.com/493971e1cb.js" crossorigin="anonymous"></script>

    <!-- CSS  -->
    <link rel="stylesheet" href="./assets/css/Login.css">

    <!-- sWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <!-- AJAX -->
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

    <!-- NOTIFY -->
    <link rel="stylesheet" href="./assets/themes/default.css">
    <link rel="stylesheet" href="./assets/css/alertify.css">
    <script src="./assets/js/alertify.js"></script>

    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Logo -->
    <link rel="icon" href="./assets/images/icon.png">

</head>
<body>

    <main class="body-container">
        <div class="body-white">
            <div class="container form-container">
                <h1>GYMPOWER</h1>
                <form action="" class="form-login">
                    <div class="login_group">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="user" class="form_input" placeholder="Ingrese su Usuario">
                    </div>
        
                    <div class="login_group">
                        <i class="fa-sharp fa-solid fa-unlock"></i>
                        <input type="password" id="password" class="form_input" placeholder="Ingrese su Password">
                    </div>
        
                    <input type="submit" class="btn login_submit" id="enviar_login" value="Iniciar sesión">
                </form>
            </div>
        </div>
            
        <div class="body-dark">
            <!-- Swiper -->
            <div class="swiper">
                <div class="swiper swiperLoop">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <small>#Fitness</small>
                            <h4>DEBERIAS SER ADICTO</h4>
                            <h3>A SUPERARTE</h3>
                            <h2>A TÍ MISMO</h2>
                        </div>
                        <div class="swiper-slide">
                            <small>#Fitness</small>
                            <h4>Si entrenas Duro,</h4>
                            <h3>No solo serás duro,</h3>
                            <h2>Serás duro de Superar</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Config Swiper -->
    <script src="./assets/js/Login.js"></script>

    <!-- Acciones Login -->
    <script src="vistas/js/formLogin.js"></script>
</body>
</html>