<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\HomeController;
use Controllers\loginController;
use MVC\Router;

$router = new Router();

//iniciar sesion
$router->get('/login',[loginController::class,'login'] );
$router->post('/login',[loginController::class,'login'] );

//CERRAR SESION
$router->get('/cerrarsesion', [loginController::class,'cerrarsesion'] );


//RECUPERAR PASSWORD
$router->get('/olvide',[loginController::class,'olvide'] );
$router->post('/olvide',[loginController::class,'olvide'] );
$router->get('/recuperar',[loginController::class,'recuperar'] );
$router->post('/recuperar',[loginController::class,'recuperar'] );


//CREAR CUENTA
$router->get('/crearcuenta',[loginController::class,'crear'] );
$router->post('/crearcuenta',[loginController::class,'crear'] );

//CONFIRMAR CUENTA
$router->get('/confirmarcuenta', [loginController::class,'confirmar']);
$router->get('/mensaje', [loginController::class,'mensaje']);


//PAGINA PRINCIPAL HOME CONTROLLER

$router->get('/', [loginController::class, 'index']);

//ABOUT

$router->get('/about',[HomeController::class,'about']);
$router->post('/about',[HomeController::class,'about']);

//CONTACTO

$router->get('/contacto',[HomeController::class,'contacto']);
$router->post('/contacto',[HomeController::class,'contacto']);

//SOLICITUD DE AGENTE

$router->get('/solicitud-agente',[HomeController::class,'solicitud']);
$router->post('/solicitud-agente',[HomeController::class,'solicitud']);



//ADMINISTRADOR

$router->get('/admin-reportes',[AdminController::class,'reportes']);
$router->post('/admin-reportes',[AdminController::class,'reportes']);

$router->get('/index',[AdminController::class,'dashboard']);
$router->post('/index',[AdminController::class,'dashboard']);

$router->get('/admin-propiedades',[AdminController::class,'propiedades']);
$router->post('/admin-propiedades',[AdminController::class,'propiedades']);

$router->get('/admin-configuracion',[AdminController::class,'configuracion']);
$router->post('/admin-configuracion',[AdminController::class,'configuracion']);

$router->get('/admin-agentes',[AdminController::class,'panel']);
$router->post('/admin-agentes',[AdminController::class,'panel']);

$router->get('/solicitudes',[AdminController::class,'solicitudes']);
$router->post('/solicitudes',[AdminController::class,'solicitudes']);

//PROPIEDAD

$router->get('/propiedades',[HomeController::class,'propiedades']);
$router->post('/propiedades',[HomeController::class,'propiedades']);

$router->get('/ver-propiedades',[HomeController::class,'verpropiedades']);
$router->post('/ver-propiedades',[HomeController::class,'verpropiedades']);







// TODO ARRIBA DE ESTE CODIGO Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();




