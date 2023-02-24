<?php
  namespace Controllers;

  class ApiLoginController {
    
    public static function login() {
    }

    public static function logout() {
      session_start();
      $_SESSION = [];
      header('Location: /');
    }

    public static function register() {
    }

    public static function forgotPassword() {
    }

    public static function resetPassword() {
    }

    public static function changePassword() {
    }
  }