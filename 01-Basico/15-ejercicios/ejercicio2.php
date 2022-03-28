<?php
/*
 * Escribir un programa con PHP que añada valores 
 * a un array mientras que su longitud sea menor a 120 
 * y luego mostrarlo por pantalla
 */
$newArray=[];
for($i=0; $i<120; $i++){
    $newArray[]= $i;  
    echo $newArray[$i].'<br/>';
}
echo 'Tamaño '.count($newArray);

?>
