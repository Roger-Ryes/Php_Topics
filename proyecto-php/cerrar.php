<?php
session_start();

if(isset($_SESSION['usuario'])){
    session_destroy();//unset($_SESSION("usuario")); 
}

header("Location:index.php");