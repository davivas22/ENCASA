<?php

namespace Controllers;

use Classes\Correo;
use Model\usuario;
use MVC\Router;

class loginController{
    public static function login(Router $router){

        $alertas =[];
        if ($_SERVER['REQUEST_METHOD']==='POST'){
            $auth = new usuario($_POST);
            $alertas = $auth -> validarlogin();
            if (empty($alertas)){
                //comprobar que exista el usuario
                $usuario = Usuario::where('email',$auth-> email);
                if($usuario){
                    //verificar el password
                    if($usuario->comprobarPasswordAndVerificado($auth->contrasena)){
                        session_start();
                        $_SESSION['id'] = $usuario->id; 
                        $_SESSION['nombre']= $usuario->nombre."". $usuario->apellido;
                        $_SESSION ['email'] = $usuario->email;
                        $_SESSION['login'] = true;
                        //Redirreccionamiento
                        if($usuario->admin === "1"){
                            $_SESSION['admin']=$usuario-> admin ?? null;
                            header('Location: /admin');
                        }else{
                            header('Location: /');
                        }

                        debuguear($_SESSION);
                    } 

                    

                } else {
                    Usuario:: setAlerta('error','Usuario no encontrado');
                }
            }
        }
        $router->render('auth/login');

    }
    public static function logout(){
        echo 'desde logout';

    }
    
    public static function index(Router $router){
        $router->render('auth/index');

    }

    public static function nosotros(Router $router){
        $router->render('auth/nosotros');
        
    }
    public static function olvide(Router $router){
        $router->render('auth/olvide');

    }
    public static function recuperar(){
        echo 'desde recuperar';

    }
    public static function crear(Router $router){
        $usuario = new usuario;
       
        $alertas=[];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario ->sincronizar($_POST);    
            $alertas = $usuario->validarNuevaCuenta();
           
            //REVISAR QUE ALERTAS ESTE VACIO
            if(empty($alertas)){
                //VERIFICAR QUE EL USUARIO NO EXISTE
                $resultado= $usuario->existeUsuario();

                if($resultado->num_rows){
                    $alertas = $usuario->getAlertas();
                }else{
                    //HASH la contrasena
                    $usuario->hashPassword();
                    //Generar un token
                    $usuario->crearToken();
                    //ENVIAR un email]
                    $mail= new Correo($usuario->nombre, $usuario->email, $usuario->token);
                    $mail->enviarConfirmacion();
                    
                    //CREAR EL USUARIO
                    $resultado = $usuario->guardar();
                    if($resultado){
                        header('Location:/mensaje');
                    }
                   
                   
                }
            }
        }
        $router->render('auth/crearCuenta',[
            'usuario'=> $usuario,
            'alertas' =>$alertas
        ]);

    }

    public static function mensaje(Router $router){
       
        $router->render('auth/mensaje');
    }

    public static function confirmar(Router $router){

        $alertas=[];
        $token=s($_GET['token']);
      $usuario= usuario::where('token', $token);
 
      
      if(empty($usuario)){
        usuario::setAlerta('error', 'Token no valido');
      }else{
        $usuario->confirmado = "1";
        $usuario->token = null;
        $usuario->guardar();
        usuario::setAlerta('exito','Cuenta comprobada Correctamente');
        session_start();
        $_SESSION['confirmado'] = 'Cuenta confirmada correctamente';
        header('location:/login');
        exit;
      }


        $router->render('auth/confirmarcuenta',['alertas' =>$alertas]);

       
    }
}