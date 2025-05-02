<?php

namespace Model;

class Propiedad extends ActiveRecord{

    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento', 'tamaño'];
    protected $id;
    protected $titulo;
    protected $precio;
    protected $imagen;
    protected $descripcion;
    protected $habitaciones;
    protected $wc;
    protected $estacionamiento;
    protected $tamaño;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->precio = $args['precio'] ?? null;
        $this->imagen = $args['imagen'] ?? null;
        $this->descripcion = $args['descripcion'] ?? null;
        $this->habitaciones = $args['habitaciones'] ?? null;
        $this->wc = $args['wc'] ?? null;
        $this->estacionamiento = $args['estacionamiento'] ?? null;
        $this->tamaño = $args['tamaño'] ?? null;

    }
    public function validar() {
        $errores = [];
    
        if (!$this->titulo || strlen(trim($this->titulo)) === 0) {
            $errores[] = "El título es obligatorio.";
        }
    
        if (!$this->precio || !is_numeric($this->precio) || $this->precio <= 0) {
            $errores[] = "El precio debe ser un número positivo.";
        }
    
        if (!$this->imagen || strlen(trim($this->imagen)) === 0) {
            $errores[] = "La imagen es obligatoria.";
        }
    
        if (!$this->descripcion || strlen(trim($this->descripcion)) < 50) {
            $errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres.";
        }
    
        if (!$this->habitaciones || !is_numeric($this->habitaciones) || $this->habitaciones <= 0) {
            $errores[] = "El número de habitaciones debe ser un número positivo.";
        }
    
        if (!$this->wc || !is_numeric($this->wc) || $this->wc <= 0) {
            $errores[] = "El número de baños debe ser un número positivo.";
        }
    
        if (!$this->estacionamiento || !is_numeric($this->estacionamiento) || $this->estacionamiento < 0) {
            $errores[] = "El número de lugares de estacionamiento debe ser 0 o mayor.";
        }
    
        if (!$this->tamaño || !is_numeric($this->tamaño) || $this->tamaño <= 0) {
            $errores[] = "El tamaño debe ser un número positivo.";
        }
    
        return $errores;
    }

    

     // Getters
     public function getTitulo()
     {
         return $this->titulo;
     }
 
     public function getPrecio()
     {
         return $this->precio;
     }
 
     public function getImagen()
     {
         return $this->imagen;
     }
 
     public function getDescripcion()
     {
         return $this->descripcion;
     }
 
     public function getHabitaciones()
     {
         return $this->habitaciones;
     }
 
     public function getWc()
     {
         return $this->wc;
     }
 
     public function getEstacionamiento()
     {
         return $this->estacionamiento;
     }
 
     public function getTamaño()
     {
         return $this->tamaño;
     }
 
     // Setters
     public function setTitulo($titulo)
     {
         $this->titulo = $titulo;
     }
 
     public function setPrecio($precio)
     {
         $this->precio = $precio;
     }
 
     public function setImagen($imagen)
     {
         $this->imagen = $imagen;
     }
 
     public function setDescripcion($descripcion)
     {
         $this->descripcion = $descripcion;
     }
 
     public function setHabitaciones($habitaciones)
     {
         $this->habitaciones = $habitaciones;
     }
 
     public function setWc($wc)
     {
         $this->wc = $wc;
     }
 
     public function setEstacionamiento($estacionamiento)
     {
         $this->estacionamiento = $estacionamiento;
     }
 
     public function setTamaño($tamaño)
     {
         $this->tamaño = $tamaño;
     }

}

