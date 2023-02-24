<?php

  require_once __DIR__.'/../includes/App.php';

use Controllers\ApiLoginController;
use Router\Router;
  use Controllers\PageController;

  $router = new Router();

  //APIs
  $router->get('/api/auth/login', [ApiLoginController::class, 'login']);
  $router->get('/api/auth/register', [ApiLoginController::class, 'register']);

  //Paginas Publicas
  $router->get( '/', [ PageController::class, 'index' ] );
  $router->get( '/nosotros', [ PageController::class, 'about' ] );
  $router->get( '/tienda', [ PageController::class, 'store' ] );
  $router->get( '/404', [ PageController::class, 'error' ] );

  $router->checkRoutes();
?>