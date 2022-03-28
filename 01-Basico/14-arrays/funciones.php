<?php
$cantantes = ['2pac','Cancerbero','Biersack','Supa'];
$numeros = array(5,1,8,3,6);
echo '<p>Orden alfabetico</p>';
asort($cantantes);
var_dump($cantantes);

echo '<p>Orden alfabetico inverso</p>';
arsort($cantantes);
var_dump($cantantes);

echo '<p>ordena alfabeto y numeros</p>';
sort($numeros);
var_dump($numeros);

echo '<p>Añadir elementos a un array</p>';
$cantantes[] = "Natos";
var_dump($cantantes);

echo '<p>Array push añade un valor dentro de un array</p>';
array_push($cantantes, "Waor");
var_dump($cantantes);

echo '<p>Para eliminar una variable recien registrado en el array</p>';
array_pop($cantantes);
var_dump($cantantes);

echo '<p>Para quitar un item en concreto</p>';
unset($cantantes[2]);
var_dump($cantantes);

echo '<p>Sacar un valor aleatorio del array</p>';
    $aleatorio = array_rand($cantantes);
    echo $cantantes[$aleatorio];

echo '<p>Dar la vuelta a un array(un orden reverso)</p>';
var_dump(array_reverse($numeros));

echo '<p>Buscar dentro de un array</p>';
var_dump(array_search("2pac", $cantantes));

echo '<p>Contar numero de elementos</p>';
    echo count($cantantes).'<br/>';
    echo sizeof($cantantes);
    



?>