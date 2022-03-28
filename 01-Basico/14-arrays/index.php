<?php
/*
 * ARRAYS
 * Es una colleccion o un conjunto de datos, de 
 * variables y puedo acceder a esos valores usando 
 * un indice numerico o alfanumerico
 */
echo '<h1>ARRAYS Y ARREGLOS</h1>';
echo '<h2>Arrays</h2>';
$pelicula = "batman";
$peliculas = array('batman','Spiderman','Ironman');
// Para sacar valores se usan corchetes
var_dump($peliculas[1]);

$cantantes = ['2pac','Cancerbero','Biersack'];
var_dump($cantantes);

echo $peliculas[0];
echo $cantantes[2];
echo '<h2>Recorrer datos del Arrays</h2>';
echo '<p>Para recorrer los datos de una array<br/>'
        . 'Se utilizara un for</p>';
echo '<h3>Listado de peliculas</h3>';
echo '<ul>';
for($i=0; $i < count($peliculas);$i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';

echo '<h3>Uso de foreach usado para arrays</h3>';
echo '<ul>';
foreach ($cantantes as $cantante) {
/*Recore el array "$cantantes" como "$cantante", es decir
 * crea una variable que asigna los valores del array
 */
    echo "<li>El cantante es $cantante</li>";    
}
echo '</ul>';

echo '<h2>Array asociativas</h2>';
$personas = array(
    'nombre'=> 'roger',
    'apellidos'=> 'reyes',
    'web'=> 'ryes',
);
var_dump($personas);
echo $personas['apellidos'];
echo '<p>Un GET es una array asociativo</p>';

echo '<h2>Array multidimensionales</h2>'
     .'<p>Array multidimensional tiene arrays dentro</p>';
$contactos = array(
  array(
      'nombre'=> 'Antonio',
      'email' => 'antonio@antonio',
  ),
   array(
      'nombre'=> 'luis',
      'email' => 'luis@luis',
  ),
    array(
      'nombre'=> 'salvador',
      'email' => 'salvador@salvador',
  ),
);
echo $contactos[1]['nombre'];
foreach ($contactos as $key => $contacto) {
    echo $contacto['nombre'].'<br/>';    
}
        
?>
