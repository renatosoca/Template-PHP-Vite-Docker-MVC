<?php

  namespace Models;

  class ActiveRecord {
    //Variables
    protected static $database;
    protected static string $table = '';
    protected static array $columnsDB = [];
    protected static array $alerts = [];

    //Funciones
    public static function setDataBase( $DataBase ): void {
      self::$database = $DataBase;
    }
    public static function setAlert( string $type, string $message ): void {
      static::$alerts[$type][] = $message;
    }
    public static function getAlert(): array {
      return static::$alerts;
    }
    public function valitade(): array {
      static::$alerts = [];
      return static::$alerts;
    }

    //Consultas Definidas
    public static function findAll(): array {
      $query = "SELECT * FROM ". static::$table;
      $result = self::Prepare( $query );
      return $result;
    }
    public static function findById( int $id ): object {
      $query = "SELECT * FROM ". static::$table . " WHERE id = {$id} LIMIT 1";
      $result = self::Prepare( $query );
      
      return array_shift( $result );
    }
    public static function findOne( string $column, string $value ): object {
      $query = "SELECT * FROM ". static::$table . " WHERE {$column} = '{$value}' LIMIT 1 ";
      $result = self::Prepare( $query );
      return array_shift( $result );
    }
    public static function findLimit( int $limit ): array {
      $query = "SELECT * FROM ". static::$table . " ORDER BY id DESC LIMIT {$limit}";
      $result = self::Prepare( $query );
      return $result;
    }
    public static function findPaginate( int $pages, int $offset): array {
      $query = "SELECT * FROM ". static::$table ." ORDER BY id DESC LIMIT {$pages} OFFSET {$offset} " ;
      $resultado = self::Prepare( $query) ;
      return $resultado;
    }
    public static function findOrderBy( string $column, string $order ): array {
      $query = "SELECT * FROM ". static::$table ." ORDER BY {$column} {$order}";
      $resultado = self::Prepare( $query );
      return  $resultado;
    }
    public static function findOrderLimit( string $column, string $order, int $limit ): array {
      $query = "SELECT * FROM ". static::$table ." ORDER BY {$column} {$order} LIMIT {$limit}";
      $resultado = self::Prepare($query);
      return  $resultado;
    }
    public static function findOneMore( array $data = [] ): array {
      $query = "SELECT * FROM ". static::$table ." WHERE ";
      foreach ($data as $key => $value) {
        if ($key === array_key_last( $data )) {
          $query .= " {$key} = '{$value}' ";
        } else {
          $query .= " {$key} = '{$value}' AND ";
        }
      }
      $resultado = self::Prepare($query);
      return  $resultado  ;
    }
    public static function findTotal( string $column = '', string $value = '' ): int {
      $query = "SELECT COUNT(*) FROM ". static::$table;
      if($column) {
        $query .= " WHERE {$column} = {$value}";
      }
      $result = self::$database->prepare( $query );
      $result->execute();
      $total = $result->fetch( self::$database::FETCH_ASSOC );

      return array_shift($total);
    }
    public static function findTotalWhere(array $data = [] ): int {
      $query = "SELECT COUNT(*) FROM ". static::$table ." WHERE";
      foreach ($data as $key => $value) {
        if ($key === array_key_last( $data )) {
          $query .= " {$key} = '{$value}'";
        } else {
          $query .= " {$key} = '{$value}' AND ";
        }
      }
      $result = self::$database->prepare( $query );
      $result->execute();
      $total = $result->fetch( self::$database::FETCH_ASSOC );

      return array_shift($total);
    }
    //Consultar y convertir a objetos
    public static function Prepare( string $query ): array {
      $response = self::$database->prepare( $query );
      $response->execute();
      
      $container = [];
      while ( $register = $response->fetch( self::$database::FETCH_ASSOC ) ) {
        $container[] = static::createObjects( $register );
      }

      return $container;
    }
    public static function createObjects( array $register ): object {
      $object = new static;
      
      foreach ($register as $key => $value) {
        if ( property_exists( $object, $key ) ) {
          $object->$key = $value;
        }
      }
      return $object;
    }

    //CRUD
    public function save(): bool | array {
      if ( is_null($this->id) ) {
        return $this->insert();
      }
      return $this->update();
    }
    public function insert(): array {
      $attributes = $this->attributes();

      $keys = [];
      $values = [];
      foreach ($attributes as $key => $value) {
        $keys[] = "?";
        $values[] = "{$value}";
      }
      
      $query = "INSERT INTO ". static::$table . "( ";
      $query .= join(", ", array_keys( $attributes ));
      $query .= " ) VALUES ( ";
      $query .= join(', ', $keys);
      $query .= " )";
      $response = self::$database->prepare( $query );
      $result = $response->execute( $values );

      return [ 'result'=> $result, 'id' => self::$database->lastInsertId() ];
    }
    public function update(): bool {
      $attributes = $this->attributes();
      
      $keys = [];
      $values = [];
      foreach ($attributes as $key => $value) {
        $keys[] = "{$key} = ?";
        $values[] = "{$value}";
      }
      
      $query = 'UPDATE '. static::$table . ' SET ';
      $query .= join(', ', $keys);
      $query .= " WHERE id = ". self::$database->quote( $this->id ). " ";
      $query .= "LIMIT 1";
      $response = self::$database->prepare( $query );
      $result = $response->execute( $values );

      return $result;
    }
    public function delete(): bool {
      $query = "DELETE FROM ". static::$table . " ";
      $query .= "WHERE id = ". self::$database->quote( $this->id ) . " ";
      $query .= "LIMIT 1";
      $response = self::$database->prepare( $query );
      $result = $response->execute();

      return $result;
    }
    public function attributes(): array {
      $attributes = [];
      
      foreach ( static::$columnsDB as $column ) {
        if ( $column === 'id' ) continue;
        $attributes[$column] = $this->$column;
      }
      
      return $attributes;
    }
    public function synchronize( array $args = [] ): void {
      foreach ($args as $key => $value) {
        if (property_exists( $this, $key) && !is_null( $value) ) {
          $this->$key = $value;
        }
      }
    }
  }