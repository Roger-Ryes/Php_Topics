<?php

/*CONSTRUCTORES -> Es un metodo especial dentro de mi
          clase y se utiliza para dar un valor a los 
 *        atributos o propiedades que tiene un objeto
 *        El constructor es el primer metodo que se 
 *        ejecuta al crear el objeto y se llama al 
 *        creador.
 *      El constructor nunca devuelve un dato solo es 
 *      un metodo magico que permite setear 
 *      (Establecer configuraciones correctas)  
*/        
class Coche{ //Empieza con mayuscula
   //Atributos o propiedades
    public $color;
    public $modelo;
    public $velocidad;
    public $marca;
    public $caballaje;
    public $plazas;
    
    //Constructor --> siempre debe ser public
    //public function __construct() {//Sin pasar variables
       public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {//Pasando variables
        $this->color = $color;
        $this->marca=$marca;
        $this->modelo= $modelo;
        $this->velocidad= $velocidad;
        $this->caballaje= $caballaje;
        $this->plazas = $plazas;
    }
    
   //Metodos (Son acciones que hace el objeto)
   public function getColor(){//GET consegir
       //$this-> significa busca en esta clase la 
       //propiedad x
       return $this->color;
   }
   public function setColor($color){// SET setear 
       $this->color = $color;       
   }
   public function setModelo($modelo){
       $this->modelo=$modelo;
   }
   public function acelerar(){
       $this->velocidad++;               
   }
   public function frenar(){
       $this->velocidad--;
   }
   public function getVelocidad(){
       return $this->velocidad;
   }    
}//Final de la clase
