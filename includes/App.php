<?php
  use Models\ActiveRecord;
  use Dotenv\Dotenv;

  require 'Functions.php';
  require 'Connection.php';
  require __DIR__.'/../vendor/autoload.php';

  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->safeLoad();

  $connect = new Connection();
  $connect = $connect->connect();

  ActiveRecord::setDataBase( $connect );