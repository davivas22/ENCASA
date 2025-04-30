<?php

namespace Controllers;

use MVC\Router;

class HomeController{

    public static function about(Router $router){
      $router->render('/page/about',[]);
    }

    public static function contacto(Router $router){
        $router->render('/page/contacto',[]);
      }
}