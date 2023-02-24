<?php

  class Connection{
    private $connect;

    public function __construct(){
      $connectionString = "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'].";charset=".$_ENV['DB_CHARSET']."";
      try{
        $this->connect = new PDO($connectionString, $_ENV['DB_USER'], $_ENV['DB_PASS']);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "conexión";
      }catch(PDOException $e){
        $this->connect = 'Error de conexión';
          echo "ERROR: " . $e->getMessage();
      }
    }

    public function connect(){
      return $this->connect;
    }
  }