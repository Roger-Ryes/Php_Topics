<?php
/*
 *  TIPOS DE DATOS
 * Entero (int / integer) Ej. 10
 * flotante(float/ decimal) Ej. 0,9
 * Caracteres (String) Ej. "Hola"
 * Boleano (bool) Ej. True / False
 * Nulo (Null) Ej. sin contenido
 * Vectores (Array)
 * Objetos 
 */

$numero = 1000;
$decimal = 72.1;
$texto = "hola";
$verdadero = true;
$nulo = null;

echo gettype($numero).'<br/>'; 
echo gettype($decimal).'<br/>';
echo gettype($texto).'<br/>';
echo gettype($verdadero).'<br/>';
echo gettype($nulo).'<br/>';

/*
 *  Al definir una variable nose puede 
 * Iniciar con numero
 * No usar guio medio variable-pp
 * No usar signos como *´&% o otros 
 * No usar "ñ"
 * Si usar gion bajo variable_pp
 */
//Debugear es ver que tiene dentro pero no imprimirlo
$miNombre = "Roger Reyes"; 
var_dump($miNombre); //Detecta que contiene la variable en linea esta, 

$miApellido[] = "Roger Reyes";
$miApellido[] = "Roger Reyes";
var_dump($miNombre);

echo '<h2>Saber de las string<h2/>';
echo '<p>Se puede agragar una variable'
       ." dentro del echo como el numero $numero"
       .'<hr/>'
       .'Dato importante con comillas dobres (") se pude agragar la variable'
       ." y con una comilla (') no se puede agregar variables</p>";
echo '<hr/><p> Ademas al usar un \n salto de linea en el string'
    .'no se mostrar en la pagina web, pero si en consola</p>';
$stringSalto ="Texto con salto de linea \n y variable $numero";
echo $stringSalto."<hr/>";

$retornoDeCarro = "string con \r retorno de carro $numero";
echo $retornoDeCarro."<hr/>";

$tabulador = "string con \t tabulador $numero";
echo $tabulador."<hr/>";

$dobleBarras = "Se va a colocar \"doble barras enter las barras\"";
echo $dobleBarras."<hr/>";

?>
