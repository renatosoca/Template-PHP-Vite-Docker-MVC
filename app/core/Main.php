<?php

use App\Models\Model;
use Dotenv\Dotenv;

require __DIR__.'/../../database/config.php';
require __DIR__.'/../../helpers/helpers.php';
require __DIR__ .'/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__.'/../../');
$dotenv->safeLoad();

$connection = new ConnectionDB();
$connection = $connection->connect();

Model::setDataBase( $connection );

?>