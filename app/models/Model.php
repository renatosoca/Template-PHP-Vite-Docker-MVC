<?php

namespace App\Models;

class Model {
  protected static $database;
  protected static string $table = '';
  protected static array $columnsDB = [];
  protected static array $alerts = [];

  protected string $id;

  public static function setDataBase( $DataBase ): void {
    self::$database = $DataBase;
  }
  public static function setAlert( string $type, string $message ): void {
    static::$alerts[$type][] = $message;
  }
  public static function getAlerts(): array {
    return static::$alerts;
  }
  public static function valitade(): array {
    static::$alerts = [];
    return static::$alerts;
  }


  public static function findAll( string $column = '', string $value = '' ): array {
    $query = "SELECT * FROM ". static::$table;
    if ( !empty($column) && !empty($value) ) {
      $query .= " WHERE {$column} = '{$value}'";
    }
    $result = self::PrepareSQL( $query );

    return $result;
  }
  public static function findById( string $id ): object | null {
    $query = "SELECT * FROM ". static::$table . " WHERE id = {$id} LIMIT 1";
    $result = self::PrepareSQL( $query );
    
    return !empty($result) ? array_shift( $result ) : null;
  }
  public static function findOne( string $column, string $value ): object | null {
    $query = "SELECT * FROM ". static::$table . " WHERE {$column} = '{$value}' LIMIT 1 ";
    $result = self::PrepareSQL( $query );
    
    return !empty($result) ? array_shift( $result ) : null;
  }
  public static function findLimit( int $limit ): array  {
    $query = "SELECT * FROM ". static::$table . " ORDER BY id DESC LIMIT {$limit}";
    $result = self::PrepareSQL( $query );

    return  !empty($result) ? $result : [];
  }
  public static function findPaginate( int $pages, int $offset): array {
    $query = "SELECT * FROM ". static::$table ." ORDER BY id DESC LIMIT {$pages} OFFSET {$offset} " ;
    $result = self::PrepareSQL( $query) ;
    return $result;
  }
  public static function findOrderBy( string $column, string $order ): array {
    $query = "SELECT * FROM ". static::$table ." ORDER BY {$column} {$order}";
    $result = self::PrepareSQL( $query );
    return  $result;
  }
  public static function findOrderAndLimit( string $column, string $order, int $limit ): array {
    $query = "SELECT * FROM ". static::$table ." ORDER BY {$column} {$order} LIMIT {$limit}";
    $result = self::PrepareSQL($query);
    return  $result;
  }
  public static function findJoins( array $data = [] ): array {
    $query = "SELECT * FROM ". static::$table ." WHERE ";

    foreach ($data as $key => $value) {
      if ($key === array_key_last( $data )) {
        $query .= " {$key} = '{$value}' ";
      } else {
        $query .= " {$key} = '{$value}' AND ";
      }
    }
    $result = self::PrepareSQL($query);

    return  $result  ;
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
  
  public static function PrepareSQL( string $query ): array {
    try {
      $response = self::$database->prepare( $query );
      $response->execute();
      
      $container = [];
      while ( $register = $response->fetch( self::$database::FETCH_ASSOC ) ) {
        $container[] = static::createObjects( $register );
      }
      
      return $container;
    } catch (\Throwable $th) {
      return [];
    }
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

  
  public function save(): bool | array {
    if ( empty(trim($this->id)) ) {
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
      $values[] = !is_bool($value) ? "{$value}" : ($value ? '1' : '0');
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
      $values[] = !is_bool($value) ? "{$value}" : ($value ? '1' : '0');
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

?>