<?php
require_once 'includes/conexion.php';

if(isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entradas_actual = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    $sql = "DELETE FROM entradas WHERE "
            ."usuario_id ='$usuario_id'"
                ."AND id='$entradas_actual';";
     mysqli_query($db, $sql);
     
}
header("Location: index.php");

?>