<?php
//require_once '01-clases.php';
require_once '02-herenciasYconstructor.php';
$persona = new Persona();
//$persona->setNombre("Roger");
var_dump($persona); 

$informatico = new Informatico;
//$informatico->setAltura(1.90);
//$informatico->sabeLenguajes("HTTP, JS, CSS, PHP,etc");
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);