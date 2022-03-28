<?php
require_once 'coche.php';

//$coche = new Coche(); // sin pasar variables
$coche1 = new Coche("amarrillo","BEB","Ferrari",200,100,5);
$coche2 = new Coche("Negro","X","Toyota",430,320,2);
$coche3 = new Coche("Gris","Z","BMW",400,600,1);
var_dump($coche1);
var_dump($coche2);
var_dump($coche3);

/*Es poco recomendable tener las propiedades o atributos
 * publicas y poder cambiarlos desde el exterior (aqui)
 */
