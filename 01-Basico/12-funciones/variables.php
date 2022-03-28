<?php
/*
 * VARIABLES GLOBALES
 * Se declaran fuera de una funcion y estan disponibles
 * dentro y fuera de las funciones.
 * 
 * VARIABLES LOCALES
 * Son las que se definen dentro de una funcion
 * y no pueden ser usadas fuera de la funcion.
 * Solo estan disponibles dentro. A no ser que haga
 * un return.
 */

echo'<H1>VARIABLES LOCALES Y GLOBALES</H1>';
echo '<h2>VARIABLES GLOBALES</h2>'
    .'<p>Se declaran fuera de una funcion y estan disponibles'
    . 'dentro y fuera de las funciones.</p>';
$frase="Ni los genios son tan genios, ni los mediocres tan mediocres";

function variableGlobal(){
    global $frase; //Para llamar una variable global debo usar "global"
    echo "<h3>Ejemplo: $frase</h3>";
}

variableGlobal();

echo '<h2>VARIABLES LOCALES</h2>'
    .'<p>Son las que se definen dentro de una funcion'
    . 'y no pueden ser usadas fuera de la funcion.'
    . 'Solo estan disponibles dentro. A no ser que haga return.</p>';
function variableLocal(){
    $year = 2020;
    echo "<h3>Ejemplo: El año es $year</h3>";
}    
variableLocal();

echo "Ejemplo fueraDeFuncion: $year";
//Marcara un error debido a que la variable es local
function variableLocal2(){
    $mes = "junio";
    echo"<h3>Ejemplo: El mes es $mes</h3>";
    return $mes;
}    
echo "Ejemplo fueraDeFuncion con Return: ".variableLocal2();
//Ya no marcara un error debido a que usa un return

echo '<hr/><h2>FUNCIONES VARIABLES</h2>';
echo '<p>Usado para almacenar los nombres de las funciones</p>';

function buenosDias(){
    return "Hola, buenos dias";
}
function buenosTardes(){
    return "Hola, ya almorzaste";
}
function buenosNoches(){
    return "Hola, ve a dormir";    
}
//Se crea variable que almacenara la funcion
$horario = "buenosNoches";
echo $horario().'<br/>';

//como la palabra comun es "buenos"
$horario2 = "Dias";
$union = "buenos". $horario2;
echo $union().'<br/>';

//Se puede usar GET
$union2 = "buenos".$_GET['horario3'];
echo $union2().'<br/>';

?>