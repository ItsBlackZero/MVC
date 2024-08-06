<?php 
//DTo de usuario se representa los datos de la bse de dato son reprsentando en esta clase 

 class Usuario{
    private $id,$usuario,$clave,$correo;

    function __construct()
    {
        //contructor que se usa en php ;3

    }

    function getId(){
        return $this-> id;
    }

    function getUsuario(){
        return $this-> usuario;
    }

    function getClave(){
        return $this-> clave;
    }

    function getCorreo(){
        return $this-> correo;
    }

    function setId($id){
        $this-> id=$id;
    }

    function setUsuario($us){
        $this-> usuario=$us;
    }

    function setClave($cla){
        $this-> clave=$cla;
    }

    function setCorreo($correo){
        $this-> correo=$correo;
    }
 }
?>