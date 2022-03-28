<?php
/*
 * FUNCIONES PREDEFINIDAS
 * Son funciones que ya vienen por defecto 
 * en PHP
 */ 
echo "<H1>FUNCIONES PREDEFINIDAS</H1>";
$nombre ="Roger Reyes";
echo "<H2>funcion de debugger</H2>";
var_dump($nombre); 
echo "<H2>funcion para fechas</H2>";
echo date('d-m-Y');
echo date('d-M-Y');
echo '<p>Se puede buscar mas especificaciones en el buscador como <i>funcion date php</i></p>';

echo "<H2>funcion de time</H2>";
echo "<p>En formato unix</p>";
echo time();

echo "<H2>funcion matematicas</H2>";
echo "<p>Se puede buscar las librerias para sacar raiz cuadrada, un numero aleatoria, pi, etc</p>";
echo 'La raiz cuadrada de 10 es '. sqrt(10).'<br/>';
echo 'Numero aleatorio entre 10 y 100'.rand(10,100).'ó'.rand().'<br/>';
echo 'El valor pi es '. pi().'<br/>';
echo 'El redondeo de 6,563 es '. round(6.563).' con decimales '.round(6.563,2);

echo "<H1>FUNCIONES INTERNAS</H1>";
echo "<H2>funcion de tipo de variable</H2>";
echo gettype($nombre);

echo "<H2>identifica la variable</H2>";
if(is_string($nombre)){
    echo 'Esta variable es un estring';
}
if(!is_float($nombre)){
    echo 'la variable no es un numero decimal';
}

echo "<H2>funcion de si existe variable</H2>";
if(isset($edad)){
    echo "La variable existe";
}else{
    echo 'No existe';
}

echo "<H2>funcion borrar espacios</H2>";
echo '<p>Borra los espacion innecesarios</p>';
$frase="       contenido     ";
trim($frase);
var_dump(trim($frase)); // Usado al limpiar espacion cuando ingresan espacias por error

echo "<H2>funcion para eliminir variable o arrays</H2>";
$año= 2020;
unset($año); // Elimina del codigo tanto el nombre y su contenido
var_dump($año);

echo "<H2>funcion para comprobar variable vacia</H2>";
$texto=NULL;
if(empty($texto)){
    echo "la variable texto esta vacio";
}else{
    echo 'Variable texto no esta absio';
}

echo "<H2>funcion contar caracteres de una cadena</H2>";
$cadena = "12345";
echo strlen($cadena);

echo "<H2>funcion encontrar un caracter del string</H2>";
$frase = "La vida es bella";
echo strpos($frase, "vida");

echo "<H2>funcion para reemplazar palabras en un string</H2>";
$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo "<H2>funcion para coonvertir de Mayuscula a minuscula</H2>";
echo strtolower($frase).'<br/>';
echo strtoupper($frase);

?>