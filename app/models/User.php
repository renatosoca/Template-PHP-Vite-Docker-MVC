<?php

namespace App\Models;

class User extends Model {

  protected static string $table = 'users';
  protected static array $columnsDB = ['id', 'name', 'lastname', 'email', 'password', 'phone', 'role', 'hasVerifiedEmail', 'token'];

  public string $id;
  public string $name;
  public string $lastname;
  public string $email;
  public string $password;
  public string $phone;
  public string $role;
  public bool $hasVerifiedEmail;
  public string $token;

  public function __construct(array $args = []) {
    $this->id = $args['id'] ?? '';
    $this->name = $args['name'] ?? '';
    $this->lastname = $args['lastname'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->phone = $args['phone'] ?? '';
    $this->role = $args['role'] ?? 'client';
    $this->hasVerifiedEmail = $args['hasVerifiedEmail'] ?? false;
    $this->token = $args['token'] ?? '';
  }

  public function validateData(): array {
    if (!$this->name) self::$alerts['error'][] = 'El Nombre es Obligatorio';
    if (!$this->lastname) self::$alerts['error'][] = 'El Apellido es Obligatorio';
    if (!$this->phone) self::$alerts['error'][] = 'El Telefono es Obligatorio';
    if (!$this->email) self::$alerts['error'][] = 'El Email es Obligatorio';
    if (!$this->password) self::$alerts['error'][] = 'La contraseña es Obligatorio';
    if ($this->password && strlen($this->password) < 6) self::$alerts['error'][] = 'La contraseña debe tener al menos 6 caracteres';

    return self::$alerts;
  }

  public function validateUser(): array {
    if (!$this->email) self::$alerts['error'][] = 'El Email es obligatorio';
    if (!$this->password) self::$alerts['error'][] = 'La contraseña es obligatorio';

    return self::$alerts;
  }

  public function validateEmail(): array {
    if (!$this->email) self::$alerts['error'][] = 'El Email es Obligatorio';

    return self::$alerts;
  }

  public function validatePassword(): array {
    if (!$this->password) self::$alerts['error'][] = 'La contraseña es Obligatorio';
    if (strlen($this->password) < 6) self::$alerts['error'][] = 'La contraseña debe tener al menos 6 caracteres';

    return self::$alerts;
  }

  public function hashPassword() {
    $this->password = password_hash($this->password, PASSWORD_BCRYPT);
  }

  public function verifyPassword(string $password): bool {
    $response = password_verify($password, $this->password);

    return $response;
  }

  public function generateToken() {
    $this->token = bin2hex(random_bytes(32));
  }

}