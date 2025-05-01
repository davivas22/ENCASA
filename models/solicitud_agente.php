<?php 

namespace Model;

class Solicitud_agente extends ActiveRecord{

    protected static $tabla = 'solicitud_agente';
    protected static $columnasDB = ['id' , 'usuario_id' , 'telefono' , 'zona', 'mensaje', 'estado' , 'fecha_solicitud'];
    protected $id;
    protected $usuario_id;
    protected $telefono;
    protected $zona;
    protected $mensaje;
    protected $estado;
    protected $fecha_solicitud;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? "";
        $this->usuario_id = $args['usuario_id'] ?? "";
        $this->telefono = $args['telefono'] ?? "";
        $this->zona = $args['zona'] ?? "";
        $this->mensaje = $args['mensaje'] ?? "";
        $this->estado = $args['estado'] ?? "pendiente";
        $this->fecha_solicitud= $args['fecha_solicitud'] ?? date('Y-m-d H:i:s');
    }

    // ✅ Método de validación
    public function validar() {
        $errores = [];

        if (!$this->usuario_id) {
            $errores[] = "El ID del usuario es obligatorio.";
        }

        if (!$this->telefono || strlen($this->telefono) < 7) {
            $errores[] = "El teléfono es obligatorio y debe ser válido.";
        }

        if (!$this->zona) {
            $errores[] = "La zona de trabajo es obligatoria.";
        }

        if (!$this->mensaje || strlen($this->mensaje) < 10) {
            $errores[] = "Debés escribir una razón válida para ser agente.";
        }

        return $errores;
    }

    // ✅ Getters y setters

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsuarioId() {
        return $this->usuario_id;
    }

    public function setUsuarioId($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getZona() {
        return $this->zona;
    }

    public function setZona($zona) {
        $this->zona = $zona;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getFechaSolicitud() {
        return $this->fecha_solicitud;
    }

    public function setFechaSolicitud($fecha) {
        $this->fecha_solicitud = $fecha;
    }
    public function todos(){
        $query = "SELECT * FROM " . static::$tabla;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }
   public function getUsuario(){
    return usuario::find('id',$this->usuario_id);
   }

}