<?php 

namespace Model;
class usuario extends ActiveRecord{
    //base de datos
    protected static $tabla = 'registrousuarios';
    protected static $columnasDB =['id','nombre','apellido','email','contrasena','telefono','rol','confirmado','token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $contrasena;
    public $telefono;
    public $rol;
    public $confirmado;
    public $token;

    public function __construct($args = []){
        $this->id =$args['id']?? null;
        $this->nombre=$args['nombre']?? '';
        $this->apellido =$args['apellido']?? '';
        $this->email =$args['email']?? '';
        $this->contrasena =$args['contrasena']?? '';
        $this->telefono =$args['telefono']?? '';
        $this->rol =$args['rol']?? 'usuario';
        $this->confirmado =$args['confirmado']?? '0';
        $this->token =$args['token']?? '';

    }
    
       //mensajes de validacion paara la creacion de cuentas
       
       public function validarNuevaCuenta(){
        if(!$this->nombre){
            self::$alertas['error'][] ='El nombre del cliente es obligatorio';
        }
        if(!$this->apellido){
            self::$alertas['error'][] ='El apellido del cliente es obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!$this->contrasena) {
            self::$alertas['error'][] = 'El Password es Obligatorio';
        }
        if(strlen($this->contrasena) < 6) {
            self::$alertas['error'][] = 'El password debe contener al menos 6 caracteres';
        }
        return self::$alertas;
       }
       public function validarLogin(){
        if (!$this ->email ){
            self::$alertas ['error'][]= 'El Email es obligatorio';
        }
        if (!$this ->contrasena ){
            self::$alertas ['error'][]= 'La Contrasena es obligatorio';
        }
        return self::$alertas;
       }


       //revisar si el usuario ya existe

       public function existeUsuario(){
        $query= "SELECT * FROM ".self::$tabla." WHERE email ='".$this->email."' LIMIT 1";

        $resultado = self::$db->query($query);

        if($resultado->num_rows){
            self::$alertas['error'][]='El usuario ya existe';
        }
        return $resultado;
       }


       //hashear el password
       public function hashPassword(){
        $this->contrasena =password_hash($this->contrasena,PASSWORD_BCRYPT);
       }

       public function crearToken() {
        $this->token = trim(bin2hex(random_bytes(13)));
    }
    
       
       public function comprobarPasswordAndVerificado($contrasena){
        $resultado = password_verify($contrasena, $this->contrasena);
        if (!$resultado || !$this-> confirmado){
            self:: $alertas ['error'][]= 'Password Incorrecto o tu cuenta no ha sido confirmada'; 
        }else{
            return true;
        }

       }
     
    
}