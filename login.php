<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPower | Login</title>

    <link rel="preload" href="./images/icon.png" as="image">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/493971e1cb.js" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/Login.css">

    <!-- sWIPER -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- AJAX -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

    <!-- NOTIFY -->
    <link rel="stylesheet" href="css/themes/default.css">
    <link rel="stylesheet" href="css/alertify.css">
    <script src="js/alertify.js"></script>

    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Logo -->
    <link rel="icon" href="./images/icon.png">

</head>
<body>

    <div class="body-container">
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
                            <h3>SUPERARTE</h3>
                            <h2>A TÍ MISMO</h2>
                        </div>
                        <div class="swiper-slide">
                            <small>#Fitness</small>
                            <h4>DEBERIAS SER ADICTO</h4>
                            <h3>SUPERARTE</h3>
                            <h2>A TÍ MISMO</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiperLoop", {
      spaceBetween: 0,
      loop:true,
      centeredSlides: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });
</script>

<script src="vistas/js/formLogin.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./js/script.js"></script>

</body>
</html>