<?php

namespace Controllers;

use Model\Propiedad;
use Model\Solicitud_agente;
use Model\usuario;
use MVC\Router;

class AdminController{

    public static function panel (Router $router){

        $router->render('/admin/admin-agentes',[]);
    }

    public static function reportes (Router $router){

        $router->render('/admin/admin-reportes',[]);
    }

    public static function propiedades (Router $router){

        $router->render('/admin/admin-propiedades',[]);
    }

    public static function configuracion (Router $router){

        $router->render('/admin/admin-configuracion',[]);
    }

    public static function dashboard (Router $router){

        $router->render('/admin/admin-index',[]);
    }

    public static function solicitudes(Router $router){

        $solicitud = new Solicitud_agente();
        $solicitudes = $solicitud->todos();
        

        $router->render('/admin/solicitudes',[
            'solicitudes' => $solicitudes
        ]);
    }
    

    


} 