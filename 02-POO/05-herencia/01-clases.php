<?php
//La herencia 
/* Nos permite compartir funcionalidades entre clases
 * se puede compartir atributos y metodos entre clases
 * Con el fin de repetir el minimo codigo posible 
 * HERENCIA: la posibilidad de compartir atributos y
 *          metodos entre clases
 */
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
    public function auditoria(){
        return "Estoy auditando una red";
    }
}
