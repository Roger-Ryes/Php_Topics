<?php
/*
 * Escribir un programa que imprimir por pantalla
 * los cuadrados de los 40 primeros numeros naturales
 * pd: usar bucle while
 */
 echo '<h1>EJERCICIO 3</h1>';
 echo '<hr/><h2>Con el bucle while</h1>';
 $contador = 1; $valor;
 while($contador<=40){
     $valor = $contador*$contador;
     echo "El cuadrado de $contador es $valor<br/>";
     $contador++;
 }
 echo '<hr/><h2>Con el bucle for</h1>';
 for($i = 0; $i<=40 ; $i++){
     $valor= $i*$i;
      echo "El cuadrado de $i es $valor<br/>";
 }

?>