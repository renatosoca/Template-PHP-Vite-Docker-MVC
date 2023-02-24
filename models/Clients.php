<?php
  namespace Models;

  class Clients extends ActiveRecord{
    protected static string $table = 'persona';
    protected static array $columnsDB = ['id', 'nroDoc','nombres','apellidos','telefono','email','password','nit','nombreFiscal','direccion', 'rolId'];

    public $id;
    public $nroDoc;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $email;
    public $password;
    public $nit;
    public $nombreFiscal;
    public $direccion;
    public $rolId;

    public function __construct( array $args = []) {
      $this->id = $args['id'] ?? null;
      $this->nroDoc = $args['nroDoc'] ?? '';
      $this->nombres = $args['nombres'] ?? '';
      $this->apellidos = $args['apellidos'] ?? '';
      $this->telefono = $args['telefono'] ?? '';
      $this->email = $args['email'] ?? '';
      $this->password = $args['password'] ?? '';
      $this->nit = $args['nit'] ?? '';
      $this->nombreFiscal = $args['nombreFiscal'] ?? '';
      $this->direccion = $args['direccion'] ?? '';
      $this->rolId = $args['rolId'] ?? null;
    }
  }