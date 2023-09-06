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
$router->get('/servicios',[PaginasController::class, 'servicios']);

//sectores
$router->get('/sector-salud',[PaginasController::class, 'sectorSalud']);
$router->get('/sector-educativo',[PaginasController::class, 'sectorEducativo']);
$router->get('/sector-comercial',[PaginasController::class, 'sectorComercial']);
$router->get('/sector-residencial',[PaginasController::class, 'sectorResidencial']);
$router->get('/sector-servicios',[PaginasController::class, 'sectorServicios']);
$router->get('/sector-hotelero',[PaginasController::class, 'sectorHotelero']);

//Outsourcing
$router->get('/outsourcing-nomina',[PaginasController::class, 'outsourcingNomina']);
$router->get('/outsourcing-rrhh',[PaginasController::class, 'outsourcingRRHH']);
$router->get('/outsourcing-callcenter',[PaginasController::class, 'outsourcingCallcenter']);
$router->get('/outsourcing-servicios-especializados',[PaginasController::class, 'outsourcingServiciosEspecializados']);

//hotelería
$router->get('/piscinero-salvavidas',[PaginasController::class, 'piscineroSalvavidas']);
$router->get('/jardineria',[PaginasController::class, 'jardineria']);
$router->get('/meseros',[PaginasController::class, 'meseros']);
$router->get('/limpieza-habitaciones',[PaginasController::class, 'limpiezaHabitaciones']);

//Footer
$router->get('/reglamento-interno',[PaginasController::class, 'reglamentoInterno']);
$router->get('/reglamento-higiene-seguridad',[PaginasController::class, 'reglamentoHigieneSeguridad']);
$router->get('/politica-tratamiento-datos',[PaginasController::class, 'politicaTratamientoDatos']);
$router->get('/politica-ambiental',[PaginasController::class, 'politicaAmbiental']);


$router->comprobarRutas();