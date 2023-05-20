<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Definición de constantes para assets

define('CSS', '/assets/css');
define('JS', '/assets/js/');
define('IMAGES', '/assets/images/');

//Definición de constantes para base de Datos

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

require_once 'includes/autoload.php';
require_once 'includes/functions.php';





