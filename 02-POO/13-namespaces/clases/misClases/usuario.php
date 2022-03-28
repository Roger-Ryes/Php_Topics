<?php
//HACER UN PAQUETE
namespace misClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Roger Ryes";
        $this->email="roger@reyes.com";
    }
}