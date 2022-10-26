<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPower | Contacto</title>

    <!-- FONT AWESOME  -->
    <script src="https://kit.fontawesome.com/5cbce06bb4.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/General.css">
    <link rel="stylesheet" href="./assets/css/Contact.css">

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

	<!-- HEADER SECTION -->
	<?php include './vistas/Templates-users/header-user.php'  ?>
	<!-- HEADER SECTION END -->

    <!-- CONTACT SECTION  -->
    <main class="section__contact" id="contact">
        <div class="container">
            <h1 class="contact_title">Contáctanos</h1>
            <form class="form_contact" id="formulario_contacto">
                <div class="form_container">
                        <div class="group_inputs">
                            <input type="text" id="nombre_contacto" class="form_input" placeholder="Ingrese su Nombre" required>
                            <input type="text" id="nombre_contacto" class="form_input" placeholder="Ingrese su Apellido" required>
                        </div>

                        <div class="group_input">
                            <input type="email" id="email_contacto" class="form_input" placeholder="Ingrese su Email" required>
                        </div>

                        <div class="group_input">
                            <input type="text" id="cel_contacto" class="form_input" placeholder="Ingrese su Celular" required>
                        </div>

                        <div class="group_input">
                            <textarea type="text" name="" id="mensaje_contacto" cols="30" rows="6" class="form_input" placeholder="Ingrese su mensaje" required></textarea>
                        </div>

                        <div class="group_checkbox">
                            <input type="checkbox" name="terminos_contacto" id="terminos_contacto" value="1" class="checkbox__input" required>    
                            <span class="checkbox__text">Acepto los terminos y condiciones.</span>
                        </div>

                        <div class="group_checkbox">
                            <input type="checkbox" id="envio_correo" class="checkbox__input">    
                            <span class="checkbox__text">Enviar una copia del mensaje a mi correo.</span>
                        </div>

                        <div class="form_capcha">
                            <div class="g-recaptcha" data-sitekey="6Lc1Q04iAAAAAF_SehvuxQjSqCNnaSSqQEn5XMpE"></div>
                        </div>

                        <input type="submit" id="enviar_contacto" class="btn form_submit" value="Enviar">
                </div>
            </form>
        </div>
    </main>
    <!-- CONTACT SECTION END -->

    <!-- FOOTER SECTION-->
    <?php include './vistas/Templates-users/footer-user.php'  ?>
    <!-- FOOTER SECTION END -->

    <script src="vistas/js/formContacto.js"></script>

    <script src="./assets/js/Nav.js"></script>

</body>

</html>