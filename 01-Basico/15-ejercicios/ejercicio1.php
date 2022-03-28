<?php
/*EJERCICIO1
 * Hacer un programa en PHP que tenga un array con
 * 8 numeros enteros y que haga lo siguiente:
 * - Recorrerlo y mostrarlo
 * - Ordenarlo y mostrarlo 
 * - Mostrar su longitud
 * - Buscar algun elemento
 */
$elementos = ["Batmam","StarWars","Interestellar",
              "IronMan", "Advengers", "Hulk",
              "Thor", "Flash"];
function mostrarArray($elementos){
   $text='';
    foreach ($elementos as $key => $value) {
       $text.= "La pelicula es: $value <br/>";
    } 
    return $text;
}
echo '<h1>EJERCICIO1 - ARRAYS</h1>'
     .'<h3>Recorrer y mostrar el array</h3>';
    echo mostrarArray($elementos);    

echo '<h3>Ordenarlo y recorrerlos</h3>';
    asort($elementos);  
    echo mostrarArray($elementos);
    
echo '<h3>Mostrar su longitud</h3>';
    echo 'La longitud del array es: '.count($elementos);

echo '<h3>Buscar algun elemento</h3>';
    if(isset($_GET['buscar'])){
        $valorABuscar = $_GET["buscar"];
        if(array_search($valorABuscar, $elementos)){
            echo 'Si existe '.$elementos[array_search($valorABuscar, $elementos)]; 
        }else{
            echo "Valor no existente";
        }      
        
    }
    else{
        echo 'Debe ingresar una palabra';
    }
?>

