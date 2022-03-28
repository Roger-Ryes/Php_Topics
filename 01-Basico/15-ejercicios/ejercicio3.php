<?php

/* 
 * Programa que compruebe si una variable esta vacia
 * y si esta vacia, rellenarla con texto en minusculas
 * y mostrarlo en mayusculas y negrita
 */
$arrayText=["texto","Arriba","Comando","FRIO","Payaso","Jefe"];
$arrayEmpty = array();
$string='';

for($i=0;$i<count($arrayText);$i++){
    if(empty($arrayEmpty[$i])){
    $arrayEmpty[] = $arrayText[rand(0, 5)];
    strtolower($arrayEmpty[$i]);
    }
    echo strtolower($arrayEmpty[$i]).'<br/>';
    $string .= $arrayEmpty[$i].'<br/>';    
}
echo strtoupper($string).'<br/>';
    


?>

