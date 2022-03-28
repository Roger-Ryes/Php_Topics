<?php
class Coche{
    /*PUBLIC: Podemos acceder desde cualquier lugar, dentro de la clase actual
         dentro de la clase que hereden esta clase o fuera de la clase 
    */
    public $color;
    
    /*PROTECTE: Podemos acceder desde la clase que los
          define y desde clases que hereden este clase
    */
    protected $marca;
    /*
      PRIVATE: unicamente se puede acceder desde esta
        clase
    */
    private $modelo;
   
    public $velocidad;
    public $plaza;
    public $caballaje;
    
    public function __construct($color,$velocidad, $modelo, $marca, $plaza, $caballaje) {
        $this->color = $color;
        $this->velocidad = $velocidad;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->plaza = $plaza;
        $this->caballaje=$caballaje;
    }
    
    public function getColor() {
        return $this->color;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }
}
