<?php

/* 
 * FUNCIONES: Es un conjuto de instrucciones agrupadas bajo
 * un nombre en concreto y que pueden reutilizarse solo invocando
 * a la funcion tantas veces como queramos
 * 
 * Sintaxis
 * function nombreDeMiFuncion(){
 *  // Conjunto de instrucciones o ordenes
 * ]
 * Para llamarlo
 * nombreDeMiFuncion($mi_parametro);
 */
//EJEMPLO 1
function muestraNombres(){
    echo 'Victor Robles<br/>';
    echo 'Antonio Ruedas<br/>';
    echo 'Miguel Robles<br/>';
    echo 'Daniela Robles<hr/>';
}
//Invoca Funcion
echo '<hr/><h2>UTILIZAR FUNCIONES</h2>';
muestraNombres();

//EJEMPLO 2
function tabla($numero){
    var_dump($numero);
    echo "<h3>Tabla de multiplicar de $numero</h3>";
    for($i=0 ;$i<=10; $i++){
        echo "$numero x $i = ".$numero*$i.'<br/>';
    }
}
echo '<hr/><h2>UTILIZAR FUNCIONES PASANDO PARAMETROS</h2>';
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}
else{
    echo 'No hay numero para multiplicar';
}

//EJEMPLO 3
for($i=0; $i<=10; $i++){
     tabla($i);
}

echo '<hr/><h2>UTILIZAR FUNCIONES CON VARIOS PARAMETROS/ARGUMENTOS</h2>';
function calculadora($valor1, $valor2){
    echo '<h4>SUMA</h4>';
    echo "$valor1 + $valor2 =".($valor1+$valor2)."<br/>";
    echo '<h4>RESTA</h4>';
    echo "$valor1 - $valor2 =".($valor1-$valor2)."<br/>";
    echo '<h4>MULTIPLICACION</h4>';
    echo "$valor1 * $valor2 =".$valor1*$valor2."<br/>";
    echo '<h4>DIVISION</h4>';
    echo "$valor1 / $valor2 =".$valor1/$valor2."<hr/>";
}
calculadora(33, 20);
calculadora(10, 45);
calculadora(84, 78);

echo '<hr/><h2>UTILIZAR FUNCIONES CON PARAMETROS OPCIONES</h2>';
function calculadoraBasica($valor1, $valor2, $negrita = false){
    if($negrita){ // Si solo se escribe una variable especifica que sera VERDADERO
        echo "<h1>";
    }
    echo '<p>SUMA</p>';
    echo "$valor1 + $valor2 =".($valor1+$valor2)."<br/>";
    echo '<p>RESTA</p>';
    echo "$valor1 - $valor2 =".($valor1-$valor2)."<br/>";
    echo '<p>MULTIPLICACION</p>';
    echo "$valor1 * $valor2 =".$valor1*$valor2."<br/>";
    echo '<p>DIVISION</p>';
    echo "$valor1 / $valor2 =".$valor1/$valor2."<hr/>";
    if($negrita){
        echo "</h1>";
    }
}
calculadoraBasica(24, 67, true);
calculadoraBasica(13, 54);
calculadoraBasica(74, 54, false);

echo '<hr/><h2>UTILIZAR FUNCIONES CON RETORNO</h2>';
// La funcion debe devolver un valor
function devuelveNombre($nombre){
    return "El nombre es: $nombre";
}
devuelveNombre("Roger Reyes"); // Solo asi no imprime nada
echo devuelveNombre("Roger Reyes");

//Ejercicio 
function calculadoraRetorno($valor1, $valor2, $negrita = false){
    $suma =$valor1+$valor2;
    $resta =$valor1-$valor2;
    $multiplicacion =$valor1*$valor2;
    $division =$valor1/$valor2;
    $cadenaText ="";
    if($negrita){ // Si solo se escribe una variable especifica que sera VERDADERO
        $cadenaText.= "<h1>";
    }
    $cadenaText.= 'SUMA<br/>'."$valor1 + $valor2 =".$suma."<br/>";
    $cadenaText.= 'RESTA<br/>'."$valor1 - $valor2 =".$resta."<br/>";
    $cadenaText.= 'MULTIPLICACION<br/>'."$valor1 * $valor2 =".$multiplicacion."<br/>";
    $cadenaText.= 'DIVISION<br/>'."$valor1 / $valor2 =".$division."<br/>";
    if($negrita){
        $cadenaText.= "</h1>";
    }
    var_dump($cadenaText);
    return $cadenaText;
}
echo calculadoraRetorno(24, 67, true);
echo calculadoraRetorno(13, 54);

echo '<hr/><h2>UTILIZAR FUNCIONES DENTRO DE OTRA</h2>';
function getNombre($nombre){
    $texto = "El nombre es $nombre";
    return $texto;
}
function getApellido($apellido){
    $texto = "El apellido es $apellido";
    return $texto;
}
function devolverNombre($nombre,$apellido){
    $texto = getNombre($nombre)
            .'<br/>'
            .getApellido($apellido);
    return $texto;
}
echo devolverNombre("Juan","Maldonado");

?>

