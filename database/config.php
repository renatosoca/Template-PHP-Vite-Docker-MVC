<?php

class ConnectionDB {
  private ?PDO $connect;

  protected string $db_host;
  protected string $db_name;
  protected string $db_charset;
  protected string $bd_user;
  protected string $bd_pass;

  public function __construct() {
    $this->db_host = $_ENV['DB_HOST'];
    $this->db_name = $_ENV['DB_NAME'];
    $this->db_charset = $_ENV['DB_CHARSET'];
    $this->bd_user = $_ENV['DB_USER'];
    $this->bd_pass = $_ENV['DB_PASS'];
    
    $connectionString = 'mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset='.$this->db_charset.'';
    
    try {
      $this->connect = new PDO($connectionString, $this->bd_user, $this->bd_pass);
      $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //echo 'Conexión exitosa';
    } catch (PDOException $error) {
      $this->connect = null;
      echo 'ERROR: '.$error->getMessage();
    }
  }

  public function connect(): null | PDO {
    return $this->connect;
  }

  /* public function prepare(string $query): PDOStatement {
    return $this->connect->prepare($query);
  } */
}

?>