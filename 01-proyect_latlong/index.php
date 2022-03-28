<?php
    //mysqli_connect($host, $user, $password, $database, $port, $socket);
    $coneccion = mysqli_connect("localhost", "root", "", "posbici", 3308);
    if(mysqli_connect_errno()){
        echo "No se a podido conectar por ". mysqli_connect_error();
    }
    else{
        echo "Se a conectado a la base de datos";
    }
   //mysqli_query($link, $query)
if(!empty($_POST["lat"]) && !empty($_POST["log"])){
    $query = "INSERT INTO poslatlog (latitud, longitud, fecha, hora)"
             ."VALUES (".$_POST["lat"].",".$_POST["log"].",SYSDATE(),SYSDATE());";
    $lat=$_POST["lat"];
    $log=$_POST["log"];
    
    $insertado = mysqli_query($coneccion, $query);
   
    var_dump($insertado);
    echo "Lat: ".$lat.'<br/>';
    echo "Log: ".$log.'<br/>';
    //mysqli_fetch_assoc($insertado);
    
}else{
    echo "<hr/>No hay valores<br/>";
    echo "ultimos valores<br/>";
    $consultaBd = "SELECT * FROM poslatlog";
    $valoresBd = mysqli_query($coneccion, $consultaBd);
    $resultadoMostrar=mysqli_fetch_assoc($valoresBd);
    var_dump($valoresBd);
}
?>
