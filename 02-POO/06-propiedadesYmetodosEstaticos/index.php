<?php
require_once 'configuracion.php';

Configuracion::setColor("blue");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color .'<br>';
echo Configuracion::$entorno.'<br>';
echo Configuracion::$newsletter.'<br>';

//instanciar el objeto
$configuracion = new Configuracion();
$configuracion::$color = "green";
echo $configuracion::$color;
//echo $configuracion->color;//NO PERMITIRDO PORQUE ES ESTATICA