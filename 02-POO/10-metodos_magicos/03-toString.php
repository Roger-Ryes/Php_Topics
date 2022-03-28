<?php

/*
 * Permite que al llamar a un objeto se muestrecomo un string
 */
class Usuario{
    public $nombre="Roger";
    public $email="roger@reyes.com";
    
    public function __construct(){
        //No se debe imprimir nada en el constructor
        echo "Instancia del objeto creada<br>"; 
    }
    public function __toString() {
       return "hola, {$this->nombre}, esta registrado con {$this->email} ";
    }
    public function __destruct(){
        echo "<br>Destuyendo el objeto";
    }
}

$usuario = new Usuario(); 
//Si imprimos sin "toString" no lo va a permitir por que es un objeto y no un string
echo $usuario;