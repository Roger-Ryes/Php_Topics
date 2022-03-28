<?php
include_once 'coches.php';
$coche = new Coche("cafe",300, "BVB", "Mercedes", 10, 300);
$coche->color="azul";
//$coche->marca="Audi"; //Al editarlo directamente no lo permite porque esta protegido 
//var_dump($coche->modelo); // No se puede porque es "privado"

/*Para acceder o modificar a metodos privados o protected 
  se debe llamar un metodo publico GET o SET
 */
$coche->setMarca("BMW");
var_dump($coche->getModelo());
var_dump($coche);



?>