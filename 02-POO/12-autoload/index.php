<?php
/*
require_once 'clases/usuario.php';
require_once 'clases/entrada.php';
require_once 'clases/categoria.php';
*/
require_once 'autoload-php.php';
/*Si quiero utilizar las clases creadas dentro del 
 * index principal, debo utilizar un "require". Lo 
 * cual puede ser molesto.
 * Por ello existe el "autoload"
 */

$usuario = new Usuario();
echo '<br>'.$usuario->nombre;
echo '<br>'.$usuario->email;

$categoria = new Categoria();
echo '<br>'.$categoria->nombre;
