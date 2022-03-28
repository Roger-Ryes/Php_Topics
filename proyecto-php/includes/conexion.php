<?php
/* Conexion a mi base de datos */
//mysqli_connect($host, $user, $password, $database, $port, $socket)
$servidor = "localhost";
$usuario = "root";
$database =  "phpmysql";
$password = "";
$db = mysqli_connect($servidor, $usuario, $password, $database, 3308);
mysqli_query($db, "SET NAMES 'utf8'"); // Permitira las ñ´s

//INICIAR SECION
if(!isset($_SESSION)){
    session_start();
}
?>

