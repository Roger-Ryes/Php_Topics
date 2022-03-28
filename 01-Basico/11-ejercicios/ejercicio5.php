<?php
/*
 * EJERCICIO 5
 * Hacer un programa que muestre todos los numeros entre 
 * los numeros que nos llegen por GET
 */
echo '<h1>Contador de numeros</h1>';
echo "<p>Se mostraran los numero</p>";

if(isset($_GET['inicio']) && isset($_GET['final']) ){
    $valorInicio = $_GET['inicio'];
    $valorFinal = $_GET['final'];
    
    if($valorInicio<$valorFinal){
        for($valorInicio; $valorInicio<= $valorFinal; $valorInicio++){
        echo "valor: $valorInicio<br/>";
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