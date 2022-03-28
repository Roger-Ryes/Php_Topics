<?php
 /*
  * Recoger dos numeros por la URL (paramreto GET)
  * y hacer todas las operaciones de una calculadora basica
  * suma,resta,multiplicacion y division de dos numeros
  */
echo '<h1>CALCULADORA BASICA</h1>';
if(isset($_GET['numero1']) && isset($_GET['numero2']) ){
    $num1=$_GET['numero1'];
    $num2=$_GET['numero2'];

    echo "Valores son $num1 y $num2";
    echo '<h3>Suma</h3>'."$num1 + $num2 = ".($num1+$num2);
    echo '<h3>Resta</h3>'."$num1 - $num2 = ".($num1-$num2);
    echo '<h3>Multiplicacion</h3>'."$num1 x $num2 = ".($num1*$num2);
    echo '<h3>Division</h3>'."$num1 / $num2 = ".($num1/$num2);
}
else{
    echo 'No existen datos';
}


?>

