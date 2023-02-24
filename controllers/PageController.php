<?php
  namespace Controllers;

use Models\User;
use Router\Router;

  class PageController {

    public static function index( Router $router ) {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prueba = new User($_POST);
        $save = $prueba->save();
        debug($save);
      }

      $router->render( 'page/index', [
        'title' => 'Inicio'
      ]);
    }

    public static function store() {
      echo 'Store';
    }

    public static function ShoppingCart() {
      echo 'ShoppingCart';
    }

    public static function about() {
      echo 'About';
    }

    public static function contact() {
      echo 'Contact';
    }

    public static function error() {
      echo 'Pagina no Encontrada';
    }
  }
