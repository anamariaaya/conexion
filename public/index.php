<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PaginasController;

$router = new Router();

//Páginas públicas
$router->get('/',[PaginasController::class, 'index']);
$router->get('/quienes-somos',[PaginasController::class, 'quienesSomos']);

//Páginas de servicios
$router->get('/aseo-limpieza',[PaginasController::class, 'aseoLimpieza']);

//sectores
$router->get('/sector-salud',[PaginasController::class, 'sectorSalud']);
$router->get('/sector-educativo',[PaginasController::class, 'sectorEducativo']);
$router->get('/sector-comercial',[PaginasController::class, 'sectorComercial']);
$router->get('/sector-residencial',[PaginasController::class, 'sectorResidencial']);
$router->get('/sector-servicios',[PaginasController::class, 'sectorServicios']);
$router->get('/sector-hotelero',[PaginasController::class, 'sectorHotelero']);

$router->get('/prueba',[PaginasController::class, 'prueba']);
$router->get('/otraprueba',[PaginasController::class, 'otraprueba']);

$router->comprobarRutas();