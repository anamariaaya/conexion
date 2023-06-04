<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PaginasController;

$router = new Router();

//Páginas públicas
$router->get('/',[PaginasController::class, 'index']);
$router->get('/prueba',[PaginasController::class, 'prueba']);
$router->get('/otraprueba',[PaginasController::class, 'otraprueba']);

$router->comprobarRutas();