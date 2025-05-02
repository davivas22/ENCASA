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
                        $_SESSION['nombre']= $usuario->nombre." ". $usuario->apellido;
                        $_SESSION ['email'] = $usuario->email;
                        $_SESSION['login'] = true;
                        //Redirreccionamiento
                        if($usuario->rol === "admin"){
                            $_SESSION['admin']=$usuario->rol ?? null;
                            header('Location: /admin-agentes');
                        }elseif($usuario->rol === 'agente'){
                            $_SESSION['agente']=$usuario->rol ?? null;
                            header('Location: /');
                        }else{
                            header('Location: /');
                        }
                            
                        

                    } 

                    

                } else {
                    Usuario:: setAlerta('error','Usuario no encontrado');
                }
            }
        }
        $router->render('auth/login');

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
       
        $errores=[];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario ->sincronizar($_POST);    
            $errores= $usuario->validar();
           
            //REVISAR QUE ALERTAS ESTE VACIO
            if(empty($errores)){
                //VERIFICAR QUE EL USUARIO NO EXISTE
                $resultado= $usuario->existeUsuario();

                if($resultado->num_rows){
                    $errores = ['Usuario ya existente'];
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
            'errores' =>$errores
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

    public static function cerrarsesion(Router $router){


        session_start();
        session_destroy();
        header('location:/');

     }

}