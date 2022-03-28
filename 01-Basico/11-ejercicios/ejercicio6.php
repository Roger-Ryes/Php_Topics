<?php
/*
 * EJERCICIO 6
 * Mostrar la tabla de multiplicar del 1 al 10
 * dentro de una tabla
 */

echo '<h1>TABLA DE MULTIPLICAR</h1>';
echo '<p>Table de multiplicar del 1 al 10</p>';
$multiplicado=0; $multiplicador=0;

echo "<table border='2'> <tr>";
echo"<tr>";
    for($i=0; $i<=10; $i++){
        echo "<td>Table del $i</td>";
    }
echo "</tr>";

echo"<tr>";
    for($i=0; $i<=10; $i++){
       echo "<td>";
       $multiplicado++;
       for($multiplicador=0; $multiplicador <= 10; $multiplicador++){
           echo "$multiplicado x $multiplicador ="
                .($multiplicado*$multiplicador)."<br/>";
       }
       echo "</td>";       
    }
echo "</tr>";

echo "</table>";

?>
