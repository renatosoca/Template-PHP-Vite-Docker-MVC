<?php
require_once __DIR__ . '/../app/core/Main.php';

use App\Controllers\AuthController;
use App\Core\Router;

//ROUTES PUBLICS
Router::get('/', [AuthController::class, 'authUser']);
Router::post('/', [AuthController::class, 'authUser']);

Router::get('/logout', function() {
  session_start();

  $_SESSION = [];
  
  Router::redirect('/');
});

Router::get('/register', [AuthController::class, 'registerUser']);
Router::post('/register', [AuthController::class, 'registerUser']);

Router::get('/confirm-account/:token', [AuthController::class, 'confirmAccount']);
Router::get('/message', function() {
  Router::render('auth/message', 'AuthLayout', [
    'title' => 'Mensaje de confirmación',
  ]);
});

Router::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Router::post('/forgot-password', [AuthController::class, 'forgotPassword']);

Router::get('/reset-password/:token', [AuthController::class, 'resetPassword']);
Router::post('/reset-password/:token', [AuthController::class, 'resetPassword']);

Router::dispatch();
