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

    public static function sectorSalud(Router $router){
        $main_title = 'Sector Salud';
        $router->render('paginas/sector-salud',[
            'titulo' => 'Sector Salud',
            'main_title' => $main_title
        ]);
    }

    public static function sectorEducativo(Router $router){
        $main_title = 'Sector Educativo';
        $router->render('paginas/sector-educativo',[
            'titulo' => 'Sector Educativo',
            'main_title' => $main_title
        ]);
    }

    public static function sectorComercial(Router $router){
        $main_title = 'Sector Comercial';
        $router->render('paginas/sector-comercial',[
            'titulo' => 'Sector Comercial',
            'main_title' => $main_title
        ]);
    }

    public static function sectorResidencial(Router $router){
        $main_title = 'Sector Residencial';
        $router->render('paginas/sector-residencial',[
            'titulo' => 'Sector Residencial',
            'main_title' => $main_title
        ]);
    }

    public static function sectorServicios(Router $router){
        $main_title = 'Sector Servicios';
        $router->render('paginas/sector-servicios',[
            'titulo' => 'Sector Servicios',
            'main_title' => $main_title
        ]);
    }

    public static function sectorHotelero(Router $router){
        $main_title = 'Sector Hotelero';
        $router->render('paginas/sector-hotelero',[
            'titulo' => 'Sector Hotelero',
            'main_title' => $main_title
        ]);
    }
}