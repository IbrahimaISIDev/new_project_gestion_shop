<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Src\Core\Router;
use Dotenv\Dotenv;

// Charger les variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$router = new Router();
$router->dispatch();