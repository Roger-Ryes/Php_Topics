<?php
// Conectar a la base de datos
// Para ello se utiliza una libreria 
//En formato de funciones

//$conexion = mysqli_connect($host, $user, $password, $database, $port, $socket);

$conexion = mysqli_connect("localhost", "root" , "", "phpmysql",3308);

//Comprobar si la conexion es correcta
if(mysqli_connect_errno()){
    echo 'La conexion a la base de datos Mysql a fallado '.
    mysqli_connect_error();
}else{
    echo 'Conexio realizada correctamente';
}

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP
$notas = mysqli_query($conexion, "SELECT * FROM notas");
var_dump($notas);

//Para mostrar como una array
//mysqli_fetch_assoc($result);
/*
$query = mysqli_fetch_assoc($notas);
var_dump($query);

*/
// Para recorrer la base de datos como array
while($nota = mysqli_fetch_assoc($notas)){
    //var_dump($nota);
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo '<p>'.$nota['descripcion'].'</h2>';
}
?>

<?php
//Insertar en la base de datos desde PHP
$sql = 'INSERT INTO notas VALUES(null,"Nota desde PHP","Esto es una nota de PHP", "green")';
$insert = mysqli_query($conexion, $sql);

//Conprovar si el inser se introdugo correctamente
if($insert){
    echo "<p>Datos insertados correctamente</p>";
}else{
    echo "<p>Error".mysqli_error($conexion)."</p>";
}
$verificar = mysqli_query($conexion, 'SELECT * FROM notas');
while($mostrar=mysqli_fetch_assoc($verificar)){
    echo '<h3>'.$mostrar['titulo'].'</h3>';
    echo '<p>'.$mostrar['descripcion'].'</p>';
    
}


?>