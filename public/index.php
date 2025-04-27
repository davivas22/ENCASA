<?php 

require_once __DIR__ . '/../includes/app.php';


use Controllers\loginController;
use MVC\Router;

$router = new Router();

//iniciar sesion
$router->get('/login',[loginController::class,'login'] );
$router->post('/login',[loginController::class,'login'] );

//CERRAR SESION
$router->get('/logout',[loginController::class,'logout'] );

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
$router->comprobarRutas();

