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
        $router->render('paginas/otraprueba',[
            'titulo' => 'Otra prueba'
        ]);
    }
}