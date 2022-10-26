<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPower</title>

    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/5cbce06bb4.js" crossorigin="anonymous"></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- CSS  -->
    <link rel="stylesheet" href="./assets/css/General.css">
    <link rel="stylesheet" href="./assets/css/Index.css">

    <!-- AJAX -->
    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

    <!-- NOTIFY -->
    <link rel="stylesheet" href="./assets/themes/default.css">
    <link rel="stylesheet" href="./assets/css/alertify.css">
    <script src="./assets/js/alertify.js"></script>
    
    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- LOGO -->
    <link rel="icon" href="./assets/images/icon.png">

</head>
<body>
    
    <!-- CABEZERA -->
    <?php include './vistas/Templates-users/header-user.php'  ?>
    <!-- CABEZERA END -->


    <!-- INICIO -->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background-image: url(./assets/images/home1.webp);">
                    <div class="content">
                        <span>Entrena con nosotros</span>
                        <h3>Hazte más fuerte que tus excusas.</h3>
                        <a href="./contactanos.php" class="btn">Iniciar</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image: url(./assets/images/home2.webp);">
                    <div class="content">
                        <span>ser fuerte, estar en forma</span>
                        <h3>Hazte más fuerte que tus excusas.</h3>
                        <a href="./contactanos.php" class="btn">Iniciar</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image: url(./assets/images/home3.webp);">
                    <div class="content">
                        <span>ser fuerte, estar en forma</span>
                        <h3>Hazte más fuerte que tus excusas.</h3>
                        <a href="./contactanos.php" class="btn">Iniciar</a>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination">
            </div>
        </div>
    </section>
    <!-- HOME END -->


    <!-- SOBRE NOSOTROS -->
    <section class="about" id="about">
        <div class="image">
            <img loading="lazy" src="./assets/images/about.jfif" alt="Sobre Nosotros">
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
    <!-- SOBRE NOSOTROS END -->


    <!-- CARACTERISTICAS -->
    <section class="features" id="features">
        <h1 class="heading"> <span>Caracteristicas de GymPower</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img loading="lazy" src="./assets/images/f-img-1.webp" alt="Caracteristica 1">
                </div>
                <div class="content">
                    <img loading="lazy" src="./assets/images/icon-1.png" alt="">
                    <h3>Culturismo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                    <a href="./contactanos.php" class="btn">Escribenos</a>
                </div>
            </div>

            <div class="box second">
                <div class="image">
                    <img loading="lazy" src="./assets/images/f-img-2.webp" alt="Caracteristica 2">
                </div>
                <div class="content">
                    <img loading="lazy" src="./assets/images/icon-2.png" alt="">
                    <h3>Gym por Hombres</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                    <a href="./contactanos.php" class="btn">Escribenos</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img loading="lazy" src="./assets/images/f-img-3.webp" alt="imagen 3">
                </div>
                <div class="content">
                    <img loading="lazy" src="./assets/images/icon-3.png" alt="icono 3">
                    <h3>gym para Mujeres</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                    <a href="./contactanos.php" class="btn">Escribenos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CARACTERISTICAS END -->


    <!-- PLANES -->
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

            <div class="price">
                <span>S/. </span>30<span>/mes</span>
            </div>

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

            <div class="price">
                <span>S/. </span>90<span>/mes</span>
            </div>

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
    <!-- PLANES END -->


    <!-- TRAINERS-->
    <section class="trainers" id="trainers">
        <h1 class="heading"> <span>expert trainers</span> </h1>

        <div class="box-container">
            <div class="box">
                <img loading="lazy" src="./assets/images/trainer-1.webp" alt="">

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
                <img loading="lazy" src="./assets/images/trainer-2.webp" alt="">

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
                <img loading="lazy" src="./assets/images/trainer-3.webp" alt="">

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
                <img loading="lazy" src="./assets/images/trainer-4.webp" alt="">

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
    <!-- TRAINERS END-->


    <!-- BANNER -->
    <section class="banner">
        <span>Unete a Nosotros Ahora</span>

        <h3>Obten hasta un 50% de descuento</h3>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat architecto nesciunt aut sapiente quis inventore quam vitae quod illum incidunt.
        </p>

        <a href="./contactanos.php" class="btn">Obtener Descuento</a>
    </section>
    <!-- BANNER END -->


    <!-- TESTIMONIOS -->
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
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.
                    </p>

                    <div class="user">
                        <img loading="lazy" src="./assets/images/pic-1.webp" alt="">

                        <div class="info">
                            <h3>Cliente 1</h3>

                            <span>Dise�ador</span>
                        </div>

                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.
                    </p>

                    <div class="user">
                        <img loading="lazy" src="./assets/images/pic-2.webp" alt="">

                        <div class="info">
                            <h3>Cliente 1</h3>

                            <span>Dise�ador</span>
                        </div>
                        
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.
                    </p>

                    <div class="user">
                        <img loading="lazy" src="./assets/images/pic-3.webp" alt="">

                        <div class="info">
                            <h3>Cliente 1</h3>

                            <span>Dise�ador</span>
                        </div>
                        
                        <i class="fas fa-quote-left"></i>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.
                    </p>

                    <div class="user">
                        <img loading="lazy" src="./assets/images/pic-4.webp" alt="">

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
    <!-- TESTIMONIOS END -->


    <!-- FOOTER -->
    <?php include './vistas/Templates-users/footer-user.php'  ?>
    <!-- FOOTER END -->


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- JS -->
    <script src="./assets/js/Nav.js"></script>
    <script src="./assets/js/Index.js"></script>
</body>
</html>