<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym | <?php echo $title ?></title>

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Styles -->
  <link rel="stylesheet" href="/build/css/app.css" >
</head>

<body>
  <header class="header">
  <div class="header__container">
    <div class="header__top"> <!-- Start Header Top -->
      <div class="header__logo">
        <h1>Logo</h1>
      </div>

      <nav class="header__nav">
        <a href="" class="header__links">Inicio</a>
        <a href="" class="header__links">Nosotros</a>
        <a href="" class="header__links">Contacto</a>
      </nav>

      <div class="header__icons">
        <button class="header__buttons">
          <i class="fa-solid fa-heart header__icon"></i>
          <span class="header__buttons-count">0</span>
        </button>

        <button class="header__buttons">
          <i class="fa-solid fa-cart-shopping header__icon"></i>
          <span class="header__buttons-count">0</span>
        </button>
      </div>
    </div>  <!-- Fin Header Top -->

    <div class="header__botton">  <!-- start Header Botton -->
      <div class="header__categories">
        <i class="fa-solid fa-bars-staggered"></i>

        <span>Categorias</span>

        <i class="fa-solid fa-sort-down"></i>
      </div>

      <div class="header__search">
        <input class="header__search-input" type="text" placeholder="Hola, ¿Qué estás buscando?">

        <i class="fa-solid fa-search header__search-icon"></i>
      </div>

      <div class="header__orders">
        <i class="fa-solid fa-box"></i>
        <span>Mis pedidos</span>
      </div>
    </div>  <!-- Fin Header Botton -->
  </div>
</header>

  <?php echo $content; ?>

  <footer>

  </footer>

</body>

</html>