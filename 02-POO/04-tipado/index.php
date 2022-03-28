<?php
include_once 'compu.php';

$computadora1 = new Computadora("h1", "hp", "i3", 32, 550);
$computadora2 = new Computadora("Exc", "Lenovo", "i7", 64, 1550);
$computadora3 = new Computadora("yxa", "Sony", "i9", 64, 1230);

//TIPADO
/*
    Permite imprimir los datos por medio de un metodo
 *  del objeto creado anteriormente
 */

echo $computadora1->obtenerInformacion("hola mundo"); //No permite debido a que es un string
echo $computadora1->obtenerInformacion($computadora2);
