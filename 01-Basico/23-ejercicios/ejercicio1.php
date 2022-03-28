<?php

/*EJECICIO 1 
 * Crear una sesion que aumente su valor en uno 
 * o disminuya en uno en funcion al parametro GET counter
 * esta a uno o a cero 
 */
session_start();
if(!isset($_SESSION["numero"])){
    $_SESSION["numero"]=0;
}
if(isset($_GET['counter']) && $_GET['counter'] == '1'){
    $_SESSION["numero"]++;
}
else if(isset($_GET['counter']) && $_GET['counter'] == '0'){
    $_SESSION["numero"]--;
}
else{
    echo 'Valor no encontrado';
}
//session_destroy();
?>
<h2>El valor de la sesion es igual: <?=$_SESSION["numero"]?></h2>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<a href="ejercicio1.php?counter=0">Disminuir valor</a>
