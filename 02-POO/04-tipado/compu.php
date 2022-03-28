<?php
class Computadora{
    public $modelo;
    public $marca;
    public $procesador;
    public $ram;
    public $disco;
    
    public function __construct($modelo, $marca, $procesador, $ram, $disco) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->procesador = $procesador;
        $this->ram = $ram;
        $this->disco = $disco;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;         
    }
    public function getRam(){
        return $this->ram;
    }
    /*Con PHP se puede especificar que tipo de dato es 
     *  public function obtenerInformacion(Int $objeto) entero
     *  public function obtenerInformacion(Array $objeto) array
     *  public function obtenerInformacion(nameObjeto $objeto) nameObjeto  
    */
    public function obtenerInformacion(Computadora $objeto) {
        if(is_object($objeto)){
            $informacion = "<h1>INFORMACION DESDE UN METODO</h1>";
            $informacion .= "<p>Modelo ".$this->modelo."</p>";
            $informacion .= "<p>Marca: ".$this->marca."</p>";
            $informacion .= "<p>Procesador: ".$this->procesador."</p>";
            $informacion .= "<p>Ram: ".$this->ram."</p>";
        }
        else{
            $informacion = "Tu dato es ".$objeto;
        }
        return $informacion;

    }
}
