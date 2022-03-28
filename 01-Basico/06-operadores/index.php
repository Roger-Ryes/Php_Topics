<?php
// OPERADORES ARITMETICOS
 $numero1 = 95;
 $numero2 = 30;
 echo "numero1= $numero1".'<br>';
 echo "numero2= $numero2".'<br>';
 echo 'suma: '.($numero1+$numero2).'<br/>';
 echo 'resta: '.($numero1-$numero2).'<br/>';
 echo 'Multiplicacion: '.($numero1*$numero2).'<br/>';
 echo 'Division: '.($numero1/$numero2).'<br/>';
 //Modulo o resto
 echo 'Resto: '.($numero1%$numero2).'<br/>';
 
 //OPERADORES DE INCREMENTO Y DECREMENTO
 $year = 2020;
 
 $year++; // Incremento
 $year--; //Decremento
 
 ++$year; //ó 1+$year //Pre incremento
 --$year;//Pre decremento
 echo "<h1>$year</h1>";
 
 //OPERADORES DE ASIGNACION
 $edad = 20;
 
 echo "Edad:".$edad.'<br/>';
 echo "NewSuma: ".($edad+=5).'<br/>';
 // ó edad = edad + 5;
 echo "NewRest: ".($edad-=5).'<br/>';
 echo "NewMult: ".($edad*=5).'<br/>';
 echo "NewDivi: ".($edad/=5).'<br/>';
 echo "NewResto: ".($edad%=5).'<br/>'; 
 
?>