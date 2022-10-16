<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPower | Contacto</title>

    <link rel="preload" href="./images/icon.png" as="image">

    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/5cbce06bb4.js" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

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


    <!-- Contact section starts  -->
    <br>
    <div class="section__contact" id="contact">
        <h1 class="heading"><span> Contactanos </span></h1>

        <form class="container form_c" id="formulario_contacto">
            <div class="form_container">
                <div class="image_c">
                    <img src="./images/contact.jpg" alt="imagen de contacto">
                </div>

                <div class="contact__content">
                    <div class="form_group">
                        <input type="text" id="nombre_contacto" class="form_input" placeholder="Ingrese su Nombre" required>
                    </div>

                    <div class="form_group">
                        <input type="email" id="email_contacto" class="form_input" placeholder="Ingrese su Email" required>
                    </div>

                    <div class="form_group">
                        <input type="text" id="cel_contacto" class="form_input" placeholder="Ingrese su Celular" required>
                    </div>

                    <div class="form_group">
                        <textarea type="text" name="" id="mensaje_contacto" cols="30" rows="3" class="form_input" placeholder="Ingrese su mensaje" required></textarea>
                    </div>
                    <div class="form_checkbox">
                        <input type="checkbox" name="terminos_contacto" id="terminos_contacto" value="1" class="checkbox__input" required>    
                        <span class="checkbox__text">Acepto los terminos y condiciones.</span>
                    </div>
                    <div class="form_checkbox">
                        <input type="checkbox" id="envio_correo" class="checkbox__input">    
                        <span class="checkbox__text">Enviar una copia del mensaje a mi correo.</span>
                    </div>
		    <div class="form_group">
                        <div class="g-recaptcha" data-sitekey="6LcAO24iAAAAADR9AFb9sKkGjUjNmmrUZsOplp76"></div>
                    </div>

                </div>
            </div>
            <input type="submit" id="enviar_contacto" class="btn form_submit_c" value="Enviar">
        </form>
    </div>

    <!-- Contact section end  -->

<!-- header section starts      -->
<?php include './vistas/Templates-users/footer-user.php'  ?>
<!-- header section ends     -->


<script src="vistas/js/formContacto.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>