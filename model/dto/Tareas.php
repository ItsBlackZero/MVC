<?php
// dto data transfer object
class Tareas {
    //properties
    private $id, $nombre,$descripcion, $estado , 
    $prioridad, $estimado;

    function __construct() {
        
    }

   function getId() {
        return $this->id;
    }

   
    function getNombre() {
        return $this->nombre;
    }


    function getEstado() {
        return $this->estado;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrioridad() {
        return $this->prioridad;
    }

    function getEstimado() {
        return $this->estimado;
    }


    function setId($id) {
        $this->id = $id;
    }


    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

  
    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrioridad($prioridad) {
        $this->prioridad = $prioridad;
    }

    function setEstimado($estimado) {
        $this->estimado = $estimado;
    }


   
    
    
}