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

    public static function prueba(Router $router){
        $paginas = true;
        $router->render('paginas/prueba',[
            'paginas' => $paginas,
            'titulo' => 'Prueba'
        ]);
    }

    public static function otraprueba(Router $router){
        $main_title = 'Otra prueba';
        $router->render('paginas/otraprueba',[
            'titulo' => 'Otra prueba',
            'main_title' => $main_title
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
}