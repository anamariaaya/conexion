<?php

namespace Controllers;

use MVC\Router;

class PaginasController{
    public static function index(Router $router){
        $inicio = true;
        
        $router->render('paginas/index',[
            'inicio' => $inicio,
            'titulo' => 'Inicio'
        ]);
    }

    public static function quienesSomos(Router $router){
        $sectores = true;
        $main_title = '¿Quiénes Somos?';
        $router->render('paginas/quienes-somos',[
            'titulo' => '¿Quiénes Somos?',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function servicios(Router $router){
        $paginas = true;
        $main_title = 'Servicios';
        $router->render('paginas/servicios',[
            'titulo' => 'Servicios',
            'main_title' => $main_title,
            'paginas' => $paginas
        ]);
    }

    //Funciones para las páginas de servicios
    public static function aseoLimpieza(Router $router){
        $paginas = true;
        $main_title = 'Outsourcing de Aseo y Limpieza';
        $router->render('paginas/aseo-limpieza',[
            'titulo' => 'Aseo y Limpieza',
            'main_title' => $main_title,
            'paginas' => $paginas
        ]);
    }

    //Funciones para las secciones de sectores
    public static function sectorSalud(Router $router){
        $sectores = true;
        $main_title = 'Sector Salud';
        $router->render('paginas/sector-salud',[
            'titulo' => 'Sector Salud',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function sectorEducativo(Router $router){
        $sectores = true;
        $main_title = 'Sector Educativo';
        $router->render('paginas/sector-educativo',[
            'titulo' => 'Sector Educativo',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function sectorComercial(Router $router){
        $sectores = true;
        $main_title = 'Sector Comercial';
        $router->render('paginas/sector-comercial',[
            'titulo' => 'Sector Comercial',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function sectorResidencial(Router $router){
        $sectores = true;
        $main_title = 'Sector Residencial';
        $router->render('paginas/sector-residencial',[
            'titulo' => 'Sector Residencial',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function sectorServicios(Router $router){
        $sectores = true;
        $main_title = 'Sector Servicios';
        $router->render('paginas/sector-servicios',[
            'titulo' => 'Sector Servicios',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function sectorHotelero(Router $router){
        $sectores = true;
        $main_title = 'Sector Hotelero';
        $router->render('paginas/sector-hotelero',[
            'titulo' => 'Sector Hotelero',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function outsourcingNomina(Router $router){
        $sectores = true;
        $main_title = 'Outsourcing Nómina';
        $router->render('paginas/outsourcing-nomina',[
            'titulo' => 'Otra prueba',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function outsourcingRRHH(Router $router){
        $sectores = true;
        $main_title = 'Outsourcing Recursos Humanos';
        $router->render('paginas/outsourcing-rrhh',[
            'titulo' => 'Outsourcing Recursos Humanos',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function outsourcingCallcenter(Router $router){
        $sectores = true;
        $main_title = 'Outsourcing Call Center Bilingüe';
        $router->render('paginas/outsourcing-callcenter',[
            'titulo' => 'Outsourcing Call Center Bilingüe',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function outsourcingServiciosEspecializados(Router $router){
        $sectores = true;
        $main_title = 'Outsourcing Servicios Especializados';
        $router->render('paginas/outsourcing-servicios-especializados',[
            'titulo' => 'Outsourcing Servicios Especializados',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function piscineroSalvavidas(Router $router){
        $sectores = true;
        $main_title = 'Piscinero Salvavidas';
        $router->render('paginas/piscinero-salvavidas',[
            'titulo' => 'Piscinero Salvavidas',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function jardineria(Router $router){
        $sectores = true;
        $main_title = 'Jardinería';
        $router->render('paginas/jardineria',[
            'titulo' => 'Jardinería',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function meseros(Router $router){
        $sectores = true;
        $main_title = 'Meseros';
        $router->render('paginas/meseros',[
            'titulo' => 'Meseros',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }

    public static function limpiezaHabitaciones(Router $router){
        $sectores = true;
        $main_title = 'Limpieza de Habitaciones';
        $router->render('paginas/limpieza-habitaciones',[
            'titulo' => 'Limpieza de Habitaciones',
            'main_title' => $main_title,
            'sectores' => $sectores
        ]);
    }
}