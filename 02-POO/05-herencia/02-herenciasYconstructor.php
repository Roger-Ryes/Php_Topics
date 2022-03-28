<?php

class Persona{
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }    
    public function hablar(){
        return "estoy hablando";
    }
    public function caminar(){
        return "estoy caminado";
    }
}

class Informatico extends Persona{
    public $lenguajes;
    public $experienciaProgramador;
    
    public function __construct() {
        $this->lenguajes = "HTML, CSS y JS";
        $this->experienciaProgramador = 10;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;    
    }
    public function programar(){
        return "Soy programador";
    }
    public function repararOrdenadores(){
        return "Reparar ordenadores";
    }
    public function hacerOfimatica(){
        return "Soy escribiendo";
    }
}
//PARA HEREDAR DE LA OTRA CLASE UTILIZO LA CLASE "extends"

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experienciaRedes;
    public function __construct() {
        //Se utiliza para heredar el constructor del padre
        //Llama de manera estatica al constuctor
        parent::__construct();
        $this->auditarRedes = 'experto';
        $this->experiencia= 5;
    }

    public function auditoria(){
        return "Estoy auditando una red";
    }
}
/*
Sin un constructor el hijo va a heredar las 
caracteristicas del padre 
 * Al agregar un constructor entonce ya no 
 * hereda el hijo algunos valores 
 */
