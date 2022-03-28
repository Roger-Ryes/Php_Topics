<?php

/*
 * Destructores
 * Son parecidos a los constructores.
 * Se utiliza cuando ya no haya referencias a ese
 * objeto.
 * Cuando php detecta que ya no vamos a poder llamar al 
 * objeto (Usuario) entonces va a destruir el objeto
 */
class Usuario{
    public $nombre;
    public $email;
    
    public function __construct(){
        //No se debe imprimir nada en el constructor
        echo "Instancia del objeto creada<br>"; 
    }
    public function __destruct(){
        echo "Destuyendo el objeto";
    }
}

$usuario = new Usuario(); 
for($i=0;$i<10;$i++){
    echo $i.'<br>';
}


