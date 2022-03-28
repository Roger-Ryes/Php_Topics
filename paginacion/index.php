<?php
//Llamar libreria
require '../vendor/autoload.php';

//Conexion a base de datos
//mysqli_connect($host, $user, $password, $database, $port, $socket)
$conexion = new mysqli('localhost','root','','notas_master',3308); 
$conexion->query("SET NAMES 'utf8'");

//Consulta a paginar
$query = "SELECT COUNT(id) AS total FROM notas";
$consulta = $conexion->query($query);

$numero_elementos = $consulta->fetch_object()->total;
var_dump($numero_elementos);
$records_per_page= 1; //Se indicara el numero de elementos
//var_dump($numero_elementos);

//Cargar libreria
$paginacion = new Zebra_Pagination();

//Numero total de elementos
$paginacion->records($numero_elementos);

//Numero de elementos por pagina 
$paginacion->records_per_page($records_per_page);

$page = $paginacion->get_page();
$inicion_resul = (($page)-1) * $records_per_page; 

$sql = "SELECT * FROM notas LIMIT  $inicion_resul,$numero_elementos;";
$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while($nota = $notas->fetch_object()){
    echo '<h2>'.($nota->titulo).'<h2>';
    echo '<p>'.($nota->descripcion).'<p>';
}

$paginacion->render();

