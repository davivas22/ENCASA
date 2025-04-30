<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
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


//PAGINA PRINCIPAL

$router->get('/', [loginController::class, 'index']);

//nosotros

$router->get('/nosotros',[loginController::class,'nosotros']);
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador



//ADMINISTRADOR

$router->get('/admin-panel',[AdminController::class,'panel']);
$router->post('/admin-panel',[AdminController::class,'panel']);

//PROPIEDAD

$router->get('/propiedades',[AdminController::class,'propiedades']);
$router->post('/propiedades',[AdminController::class,'propiedades']);








$router->comprobarRutas();




