<?php

namespace Controllers;

use Model\Solicitud_agente;
use MVC\Router;

class HomeController{

    public static function about(Router $router){
      $router->render('/page/about',[]);
    }

    public static function contacto(Router $router){
        $router->render('/page/contacto',[]);
      }

      public static function propiedades(Router $router){
        $router->render('/page/propiedades',[]);
      }

      public static function verpropiedades(Router $router){
        $router->render('/page/ver-propiedades',[]);
      }

      //INTERFAZ DE AGENTES **********************************************************
      public static function agenteagregarpropiedad(Router $router){
        $router->render('/agentes/agente-agregar-propiedad',[]);
      }
      
      public static function agenteconfiguracion(Router $router){
        $router->render('/agentes/agente-configuracion',[]);
      }
      
      public static function agentedashboard(Router $router){
        $router->render('/agentes/agente-dashboard',[]);
      }
      
      public static function agenteperfil(Router $router){
        $router->render('/agentes/agente-perfil',[]);
      }
      
      public static function agentepropiedades(Router $router){
        $router->render('/agentes/agente-propiedades',[]);
      }

      //****************************************************************************** */
      
      public static function agentesolicitud(Router $router){
        $router->render('/agentes/agente-solicitudes',[]);
      }

      public static function solicitud(Router $router){


        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $solicitud = new Solicitud_agente($_POST);
             $errores = $solicitud->validar();

             if(empty($errores)){
              $solicitud->crear();
             }

        }
        $router->render('/page/solicitud-agente',[]);
      }
}