<?php
    /* 
     * Constantes
     * contenedor de informacion que no puede variar
     */
// Asi se creara una constante
define('nombre','roger reyes'); //"NombreConstante","ValorDeConstante"
define('web','practica.es');
// Para mostrar la constante creada se usa su nombre asignado
echo nombre;
echo web;
// Podemos incluir html
echo '<h1>'.nombre.'</h1>';
/*
 * No se puede cambiar el valor de la constante
 * web = paginaPrueba.es  Esto no vale
 */

//CONSTANTES PREDEFINIDAS
echo PHP_OS.'<br/>'; // Indica el Sistema Operativo que usamos
echo PHP_VERSION.'<br/>'; //Version del php
echo PHP_EXTENSION_DIR.'<br/>'; //Indica la extencion del PHP instalada
echo __LINE__.'<br/>'; //Imprime la linea de codigo del valor
echo __FILE__.'<br/>';  // ruta completa de estes archivo
function holaMundo(){
    echo __FUNCTION__.'<br/>'; //Muestra el nombre de la funcion que contiene esta instruccion
}
holaMundo();

echo $_SERVER['SERVER_ADDR'];



?>