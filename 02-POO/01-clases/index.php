<?php
// Programacion Orientado a Objetos en PHP (POO)
/* 
 * Elementos Principales dentro de POO 
 * Las clases -> Es un molde con el cual podemos crear
 *                un infinidad de objetos, con caracteristicas
 *                similares
 * Atributos o propiedades -> Son las variables para 
 *                nuestra clase
 * Metodos -> analogia a funciones, los metodos son 
 *            acciones que es capas de hacer nuestro
 *            objeto.
 *            Con los metodos se puede interactuar 
 *            con los atributos *   
 */

//DEFINIR UNA CLASE (Molde para crear mas objetos del
//           tipo "coche" con caracteristicas parecidas)
class Coche{ //Empieza con mayuscula
   //Atributos o propiedades
    public $color = "rojo";//Palabra reservada 
    public $modelo = "Aventador";
    public $velocidad = "300";
    public $marca = "Ferrari";
    public $caballaje = 500;
    public $plazas = 2;
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

//CREAR UN OBJETO / INSTANCIAR LA CLASE 
$coche = new Coche();
var_dump($coche);


$coche2 = new Coche();
$coche2->setColor('verde');
$coche2->setModelo("Gallardo");
var_dump($coche2);


//USAR LOS METODOS
echo $coche->getVelocidad().'<br>';
$coche->setColor("Amarillo");
echo "color de coche".$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
echo 'la velocidad del coche es '.$coche->getVelocidad().'<br>';
