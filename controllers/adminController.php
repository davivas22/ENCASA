<?php

namespace Controllers;

use Model\Propiedad;
use MVC\Router;

class AdminController{

    public static function panel (Router $router){

        $router->render('/admin/admin-panel',[]);
    }



    public static function propiedades(Router $router){

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $propiedad = new Propiedad($_POST);
            
        }
        $router->render('admin/crear',[]);

    }
} 