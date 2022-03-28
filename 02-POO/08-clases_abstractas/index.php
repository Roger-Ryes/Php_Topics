<?php
/*
 * Clase abstracta
 * es una clase que no se puede instanciar es decir
 * no se puede crear objetos con ella pero se la puede
 * utilizar para heredar de ella.
 * Esa clase define la estructura que puede tener una
 * clase que la herede, tambien puede definir 
 * funcionalidad.
 * Debe ser definida en la clase hija tambn
 *  
 */
abstract class Ordenador{ //Asi se define una clase abstracta
    public $encendido; //Una propiedad o atributo no puede ser abstracta
    
    abstract public function encender();//Al definir un metodo como abstracto no 
                                //se define que funcionalidad va a tener solo la defino
        
    public function apagar(){
        $this->encendido=false;
    }
}

class PcAsus extends Ordenador{
    public $software;
    
    public function arrancarSoftware(){
        $this->software = true;
    }
    public function encender(){ //Aqui se da la funcionalidad
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();

var_dump($ordenador);