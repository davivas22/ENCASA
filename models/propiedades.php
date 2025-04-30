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