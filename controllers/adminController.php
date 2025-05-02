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

        $router->render('/admin/index',[]);
    }

    public static function solicitudes(Router $router){

        $solicitud = new Solicitud_agente();
        $solicitudes = $solicitud->todos();
        

        $router->render('/admin/solicitudes',[
            'solicitudes' => $solicitudes
        ]);
    }
    public static function procesar (Router $router){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $solicitud = new Solicitud_agente();
            $solicitud->setId($_POST['solicitud_id']);
             $solicitud->setEstado($_POST['accion']);
             $asociado = new usuario();
            $encontrado = $asociado::find('id',$_POST['usuario_id']);
                if($encontrado){
                    $encontrado->setRol('agente')->actualizar();
                    $solicitud->actualizarSolicitud();
                }
             
             
             header('location: /solicitudes');
            
        }
    }
    

    


} 