<?php

use App\App;
use App\Config;
use App\Router;
use App\User;

require_once __DIR__ . "/../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

//const STORAGE_PATH = __DIR__ . '/../storage/';
const VIEW_PATH = __DIR__ . '/../views/';

$router = new Router();

$router
    ->get('/', [User::class, 'index'])
    ->get('/register', [User::class, 'register'])
    ->post('/registration-success', [User::class, 'create']);


(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => strtolower($_SERVER['REQUEST_METHOD'])],
    new Config($_ENV)
))->run();

