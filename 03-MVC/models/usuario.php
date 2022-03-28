<?php
require_once 'ModeloBase.php';

class Usuario extends ModeloBase{
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    
    
    public function __construct() {
        parent::__construct();//HEREDO LOS VALORES PARA MI DB
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }
}