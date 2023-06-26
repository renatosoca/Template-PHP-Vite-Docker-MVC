<?php

namespace App\Controllers;

use App\Router;
use App\Models\User;
use App\Utils\Email;

class AuthController {

  public static function authUser(){
    $isAuth = isAuth();
    if ($isAuth) Router::redirect('/appointment');

    $alerts = [];
    $tempUser = new User();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $tempUser = new User($_POST['login']);
      $alerts = $tempUser->validateUser();

      if (empty($alerts)) {
        $user = User::findOne('email', $tempUser->email);

        if (!$user) return User::setAlert('error', 'No hay ningún usuario registrado con ese email');
        if (!$user->verifyPassword($tempUser->password)) return User::setAlert('error', 'Email o contraseña incorrectos');
        if (!$user->hasVerifiedEmail) return User::setAlert('error', 'Debes verificar tu email antes de iniciar sesión');
        
        $_SESSION['userId'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['lastname'] = $user->lastname;
        $_SESSION['email'] = $user->email;
        $_SESSION['login'] = true;

        if ($user->role === 'admin') {
          $_SESSION['admin'] = $user->role;

          return Router::redirect('/admin/home');
        } 
        
        Router::redirect('/appointment');
      }
    }

    $alerts = User::getAlerts();

    Router::render('auth/login', 'AuthLayout', [
      'title' => 'Iniciar sesión',
      'alerts' => $alerts,
      'user' => $tempUser,
    ]);

    return;
  }

  public static function registerUser() {
    $isAuth = isAuth();
    if ($isAuth) Router::redirect('/appointment');

    $user = new User();
    $alerts = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $user->synchronize($_POST['register']);
      $alerts = $user->validateData();

      if (empty($alerts)) {
        $userExist = User::findOne('email', $user->email);

        if ($userExist) return User::setAlert('error', 'Ya existe un usuario registrado con ese email');

        $user->hashPassword();
        $user->generateToken();

        $mail = new Email($user->email, $user->name, $user->lastname, $user->token);
        $response = $mail->SendMail(
          'register',
          'Registro de cuenta',
          'Confirmar cuenta',
          $_ENV['HOST'] . "/confirm-account/" . $user->token,
        );

        if ( $response ) {
          $user->save();
          
          Router::redirect('/message');
        }

        User::setAlert('error', 'Ha ocurrido un error al crear tu cuenta, por favor intenta nuevamente');
      }
    }

    $alerts = User::getAlerts();
    
    Router::render('auth/register', 'AuthLayout', [
      'title' => 'Registro de usuario',
      'user' => $user,
      'alerts' => $alerts,
    ]);

    return;
  }

  public static function confirmAccount( $token = '') {
    $isAuth = isAuth();
    if ($isAuth) Router::redirect('/appointment');
    
    $alerts = [];
    $token = sanitize($token);
    $isVerified = false;
    $user = User::findOne('token', $token);

    if (!$user) User::setAlert('error', 'El token es inválido o ya ha sido utilizado');
    if ($user && $user->hasVerifiedEmail) User::setAlert('error', "El correo electrónico: {$user->email} ya ha sido verificado anteriormente");

    if ($user && !$user->hasVerifiedEmail) {
      $user->hasVerifiedEmail = true;
      $user->token = '';
      
      $user->save();

      $isVerified = true;

      User::setAlert('success', 'Tu cuenta ha sido verificada correctamente');
    }

    $alerts = User::getAlerts();

    Router::render('auth/confirmAccount', 'AuthLayout', [
      'title' => 'Confirmar cuenta',
      'alerts' => $alerts,
      'isVerified' => $isVerified,
    ]);

    return;
  }

  public static function forgotPassword() {
    $alerts = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $user = new User($_POST['forgot']);
      $alerts = $user->validateEmail();

      if (empty($alerts)) {
        $user = User::findOne('email', $user->email);

        if (!$user) return User::setAlert('error', 'No hay ningún usuario registrado con ese email');
        if (!$user->hasVerifiedEmail) return User::setAlert('error', 'Debes verificar tu email antes de recuperar tu contraseña');
        
        $user->generateToken();
        $user->save();

        $mail = new Email($user->email, $user->name, $user->lastname, $user->token);
        $response = $mail->SendMail(
          'forgotPassword', 
          'Recuperar contraseña',
          'Reestablecer contraseña',
          $_ENV['HOST'] . "/reset-password/" . $user->token,
        );
        User::setAlert('success', 'Hemos enviado las instrucciones a tu Email');
      }
    }

    $alerts = User::getAlerts();

    Router::render('auth/forgotPassword', 'AuthLayout', [
      'title' => 'Recuperar contraseña',
      'alerts' => $alerts,
    ]);

    return;
  }

  public static function resetPassword( $token = '' ) {
    $alerts = [];
    $token = sanitize($token);
    $error = false;

    $user = User::findOne('token', $token);
    if (!$user) {
      $error = true;
      User::setAlert('error', 'El token es inválido');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$error) {
      $tempUser = new User($_POST['reset']);
      $alerts = $tempUser->validatePassword();

      if (empty($alerts)) {
        $user->password = $tempUser->password;
        $user->hashPassword();
        $user->token = '';
        
        //Send Mail

        $user->save();

        Router::redirect('/');
      }
    }

    $alerts = User::getAlerts();

    Router::render('auth/resetPassword', 'AuthLayout', [
      'title' => 'Nueva contraseña',
      'alerts' => $alerts,
      'error' => $error,
    ]);

    return;
  }

}

?>