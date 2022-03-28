<?php
/*
 * CONDICIONALES 
 * 
 * if
 * if(condicion){
 *  instruccion
 * }else{
 *  otra instruccion
 * }
 */

$color = "rojo";

if($color == "rojo"){
    echo "El color es rojo";
}else{
    echo "El color no es rojo"; 
}

echo '<h2> Operadores de comparacion</h2>'
    .'<p> == igual</p>'
    .'<p> === identico (es mas exacto)</p>'
    .'<p> != diferente</p>'
    .'<p> <> diferente</p>'
    .'<p> !== no identico</p>'
    .'<p> < menor que </p>'
    .'<p> > mayor que </p>'
    .'<p> <= menor o igual que </p>'
    .'<p> >= mayor o igual que </p>';
// ejercicio-------------
echo '<hr/><h2>Ejercicio con if</h2><br/>';
$year = 2019;
if($year == 2019){ // ó !=
    echo "Es el año 2019";
}
else{
    echo "No estamos en el año 2019";
}
// ejercicio 2---------------
echo '<hr/><h2>Ejercicio con if de edad</h2><br/>';
$edad = 20; $mayorEdad = 18;
$nombre = "David"; 
$cuidad = "Madrid"; $continente = "Europa";

if($edad >= $mayorEdad){ // ó !=
    echo "<h3> $nombre ya es mayor de edad </h3>";
    echo "<p>Tu cuidad es de $cuidad</p>";
    if($continente == "Europa"){
        echo "Es de Europa";
    }
    else{
        echo "No es de Europa";
    }
}
else{
    echo "<h3> $nombre no es mayor de edad </h3>";
}

// CONDICION ELSE IF-----------------------------
echo '<hr/><h2>Ejercicio con ELSE IF</h2><br/>';
$dia = 3;
if ($dia == 1){echo "Es Lunes";}
elseif ($dia == 2) {echo "Es Martes";}
elseif ($dia == 3) {echo "Es Miercoles";}
elseif ($dia == 4) {echo "Es Jueves";}
elseif ($dia == 5) {echo "Es Viernes";}
 else {echo "Es Fin de semana";}
 
 // ejemplor
echo '<hr/><h3>Ejercicio 2 con Operadores Logicos</h3><br/>'; 
$edad1 = 18; $edad2 = 64; $edadOficial = 17;
if($edadOficial >= $edad1 && $edadOficial <= $edad2){
echo 'Esta en edad de trabajar';
}
else{ echo 'No puede trabajar';}
// Operadores logicos
echo '<h3> Operadores logicos</h3>'
    .'<p> && AND</p>'
    .'<p> || OR </p>'
    .'<p> ! NO O NEGACION </p>'
    .'<p> and, or</p>';

echo '<h4>Ejercicio 2 con Operadores Logicos</h4><br/>'; 
$pais = "Mexico";
if($pais == "Mexico" || $pais == "Espana" || $pais == "colombia"){
    echo 'Habla español';
}
else{    echo 'No habla español';}

// CONDICION SWITCH-----------------------------
echo '<br/><h2> CONDICION SWITCH </h2>';
$dia = 8;

switch($dia){
    case 1: echo 'Dia Lunes'; break;
    case 2: echo 'Dia Martes';  break;
    case 3: echo 'Dia Miercoles';  break;
    case 4: echo 'Dia Jueves';  break;
    case 5: echo 'Dia Viernes';  break;
    case 6: echo 'Dia Fin de semana';  break;
    default : echo 'No existe'; break;
}

// CONDICION GOTO-----------------------------
echo '<br/><h2> CONDICION GOTO</h2>';
goto marca; // goto busca la "marca"
echo "Primer salto";
echo "Segundo salto";
echo "Tercer salto";
echo "Cuarto salto";
marca: echo "Me he saltado 4 echos";







?>
