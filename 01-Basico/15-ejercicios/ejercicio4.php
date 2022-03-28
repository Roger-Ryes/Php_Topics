<?php

/* EJERCICIO 4
 * Crear un script en php que tenga 4 variables, uno de 
 * tipo array, otra de tipo string, otra int y otra 
 * booleana y que imprima un mensaje segun el tipo de 
 * variable que se
 */
$matris = ["hola mundo", 88];
$string = "master en php";
$numero = 77;
$booleana = true;

function detectar ($var){
    $texto = '';
    if(is_array($var)){
        $texto.='Es una matriz.<br/>';
        foreach ($var as $key => $value) {
             $texto.=$value.'<br/>';
        }
    }
    if(is_bool($var)){
        $texto.= 'Es boolean '.$var;
    }
    if(is_string($var)){
        $texto.= 'Es string '.$var; 
    }
    if(is_integer($var)){
        $texto.= "Es un entero ".$var;
    }
    return $texto;
}
echo detectar($matris);

