<?php
/* CALL
 * Permite detectar cuando se llama un metodo que no
 * existe, se utiliza ese metodo como sustituto  
 */

class Persona{
    private $nombre;
    private $edad;
    private $cuidad;
    
    public function __construct($nombre, $edad, $cuidad) {
        $this->nombre= $nombre;
        $this->edad= $edad;
        $this->cuidad= $cuidad;
    }
    //__call($name, $arguments) {
    public function __call($name, $arguments) {
        //Se puede buscar un parecido a lo que buscaba
        $prefix_metodo = substr($name, 0 ,3);
        if($prefix_metodo == "get"){
           $nombre_metodo = substr(strtolower($name), 3);
           if(!isset($this->$nombre_metodo)){
               return "No existe el metodo";
           }
           return $this->$nombre_metodo;
           
        }
        else{
            return "No existe el metodo";
        }
    }
}

$persona = new Persona("victor",55,"españa");
//$persona->nombre;
echo $persona->getNombre().'<br>';
echo $persona->getEdad().'<br>';
echo $persona->getCuidad().'<br>';
echo $persona->getEmail().'<br>';