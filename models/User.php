<?php
  namespace Models;

  class User extends ActiveRecord{
    protected static string $table = 'prueba';
    protected static array $columnsDB = ['id', 'nombre', 'apellido'];

    public $id;
    public $nombre;
    public $apellido;

    public function __construct( array $args = [] ) {
      $this->id = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->apellido = $args['apellido'] ?? '';
    }
  }
