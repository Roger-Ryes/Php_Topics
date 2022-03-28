<?php
//HACER UN PAQUETE
namespace panelAdministrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Antonio Robles";
        $this->email="antonio@antonio.com";
    }
}

