<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPower</title>

    <link rel="preload" href="./images/icon.png" as="image">

    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/5cbce06bb4.js" crossorigin="anonymous"></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

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
    
<!-- header section starts      -->
<?php include './vistas/Templates-users/header-user.php'  ?>
<!-- header section ends     -->


<!-- home section starts  -->
<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background-image: url(images/home1.jpg);">
                <div class="content">
                    <span>Entrena con nosotros</span>
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <a href="./contactanos.php" class="btn">Iniciar</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background-image: url(images/home2.jpg);">
                <div class="content">
                    <span>ser fuerte, estar en forma</span>
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <a href="./contactanos.php" class="btn">Iniciar</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background-image: url(images/home3.jpg);">
                <div class="content">
                    <span>ser fuerte, estar en forma</span>
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <a href="./contactanos.php" class="btn">Iniciar</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- home section ends -->


<!-- about section starts  -->
<section class="about" id="about">

    <div class="image">
        <img loading="lazy" src="images/about.jfif" alt="Sobre Nosotros">
    </div>

    <div class="content">
        <span>Sobre Nosotros</span>
        <h3 class="title">Cada día es una oportunidad para ser mejor</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione quia accusamus dicta inventore nobis obcaecati vero odio, id dolorum. Consequatur ex, aperiam deserunt nostrum perferendis illum unde ipsa? Consequatur, distinctio?</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>Cuerpo y Mente</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>Vida Saludable</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>Estratejias</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>Ejercicio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
        </div>
        <a href="./contactanos.php" class="btn">Escribenos</a>
    </div>

</section>
<!-- about section ends -->


<!-- features section starts  -->
<section class="features" id="features">

    <h1 class="heading"> <span>Caracteristicas de GymPower</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img loading="lazy" src="images/f-img-1.jpg" alt="Caracteristica 1">
            </div>
            <div class="content">
                <img loading="lazy" src="images/icon-1.png" alt="">
                <h3>Culturismo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="./contactanos.php" class="btn">Escribenos</a>
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img loading="lazy" src="images/f-img-2.jpg" alt="Caracteristica 2">
            </div>
            <div class="content">
                <img loading="lazy" src="images/icon-2.png" alt="">
                <h3>Gym por Hombres</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="./contactanos.php" class="btn">Escribenos</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img loading="lazy" src="images/f-img-3.jpg" alt="imagen 3">
            </div>
            <div class="content">
                <img loading="lazy" src="images/icon-3.png" alt="icono 3">
                <h3>gym para Mujeres</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="./contactanos.php" class="btn">Escribenos</a>
            </div>
        </div>
    </div>
</section>
<!-- features section ends -->


<!-- pricing section starts  -->
<section class="pricing" id="pricing">

    <div class="information">
        <span>Nuestros Planes</span>
        <h3>Precios asequibles</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam dolore excepturi ea suscipit fugiat cum quae, rerum optio mollitia! Tempora?</p>
        <p> <i class="fas fa-check"></i> Ejercicio de Cardio </p>
        <p> <i class="fas fa-check"></i> Levantamiento de Pesas </p>
        <p> <i class="fas fa-check"></i> Plan de Dietas </p>
        <p> <i class="fas fa-check"></i> Resultados Totales </p>
        <a href="./contactanos.php" class="btn">Obtener Plan</a>
    </div>

    <div class="plan basic">
        <h3>Plan Basico</h3>
        <div class="price"><span>S/. </span>30<span>/mes</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> Ejercicio de Cardio </p>
        <p> <i class="fas fa-check"></i> Levantamiento de Pesas </p>
        <p> <i class="fas fa-check"></i> Plan de Dietas </p>
        <p> <i class="fas fa-check"></i> Resultados Totales </p>
       </div>
       <a href="./contactanos.php" class="btn">Adquirir</a>
    </div>

    <div class="plan">
        <h3>Plan Primium</h3>
        <div class="price"><span>S/. </span>90<span>/mes</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> Ejercicio de Cardio </p>
        <p> <i class="fas fa-check"></i> Levantamiento de Pesas </p>
        <p> <i class="fas fa-check"></i> Plan de Dietas </p>
        <p> <i class="fas fa-check"></i> Resultados Totales </p>
       </div>
       <a href="./contactanos.php" class="btn">Adquirir</a>
    </div>

</section>
<!-- pricing section ends -->


<!-- trainers section starts  -->
<section class="trainers" id="trainers">

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img loading="lazy" src="images/trainer-1.jpg" alt="">
            <div class="content">
                <span>Nuestros Trainers</span>
                <h3>Trainer 1</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img loading="lazy" src="images/trainer-2.jpg" alt="">
            <div class="content">
                <span>Nuestros Trainers</span>
                <h3>Trainer 2</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img loading="lazy" src="images/trainer-3.jpg" alt="">
            <div class="content">
                <span>Nuestros Trainers</span>
                <h3>Trainer 3</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img loading="lazy" src="images/trainer-4.jpg" alt="">
            <div class="content">
                <span>Nuestros Trainers</span>
                <h3>Trainer 4</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- trainers section ends -->


<!-- banner section starts  -->
<section class="banner">

    <span>Unete a Nosotros Ahora</span>
    <h3>Obten hasta un 50% de descuento</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat architecto nesciunt aut sapiente quis inventore quam vitae quod illum incidunt.</p>
    <a href="./contactanos.php" class="btn">Obtener Descuento</a>

</section>
<!-- banner section ends -->


<!-- review section starts  -->
<section class="review">

    <div class="information">
        <span>Tertimonios</span>
        <h3>Lo que piensan nuestros 
            clientes
        </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptas praesentium asperiores fugiat, excepturi odit obcaecati a voluptatibus earum quisquam?</p>
    </div>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img loading="lazy" src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>Cliente 1</h3>
                        <span>Dise�ador</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img loading="lazy" src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>Cliente 1</h3>
                        <span>Dise�ador</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img loading="lazy" src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>Cliente 1</h3>
                        <span>Dise�ador</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img loading="lazy" src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>Cliente 1</h3>
                        <span>Dise�ador</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- review section ends -->


<!-- Footer section starts      -->
<?php include './vistas/Templates-users/footer-user.php'  ?>
<!-- Footer section ends     -->


<script src="vistas/js/formContacto.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>