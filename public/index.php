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


//recuperar password
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





//ADMINISTRADOR

$router->get('/admin-panel',[AdminController::class,'panel']);
$router->post('/admin-panel',[AdminController::class,'panel']);

//PROPIEDAD

$router->get('/propiedades',[AdminController::class,'propiedades']);
$router->post('/propiedades',[AdminController::class,'propiedades']);







// TODO ARRIBA DE ESTE CODIGO Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();




