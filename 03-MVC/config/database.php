<?php
//CREAR CLASE ESTATICA
class database{
    public static function conectar(){   
        //mysql con objetos
        //mysqli_connect($host, $user, $password, $database, $port, $socket)
        $conexion = new mysqli('localhost', 'root', '', 'notas_master','3308');
        $conexion->query('SET NAMES "utf8"');//venga codificada en utf8
        
        return $conexion;
    }
    
       
}