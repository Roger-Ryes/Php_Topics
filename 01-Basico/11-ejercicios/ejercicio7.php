<?php
/*
 * EJERCICIO 7
 * Hacer un programa que muestre todos los 
 * numeros entre los numeros que nos llegen por GET
 * que sean impares
 */

echo '<h1>Contador de numeros Impares</h1>';
echo "<p>Se mostraran los numeros impares</p>";

if(isset($_GET['inicio']) && isset($_GET['final']) ){
    $valorInicio = $_GET['inicio'];
    $valorFinal = $_GET['final'];
    
    if($valorInicio<$valorFinal){
        for($valorInicio; $valorInicio<= $valorFinal; $valorInicio++){
            if($valorInicio%2 != 0){
              echo "inpar: $valorInicio<br/>";   
            } 
            else{
              echo "par: $valorInicio<br/>";
            }
        }
    }
    else{
        echo "El valor de inicio es mayor al valor final<br/>";
        echo "Cambiar valores valor inicial debe ser menor";
    }
}
else{
    echo 'No existen valor.<br/><strong>Ingresar valores</strong>';
}

?>

