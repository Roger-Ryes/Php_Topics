<h1>Pagina con MVC</h1>
<?php
//Esto es un controlador frontal-> se controla por la URL
/* //QUITO PARA AGRAGAR UN AUTOLOAD
require_once 'controllers/usuarioController.php';
require_once 'controllers/notaController.php';
*/
//autoload
require_once 'autoload.php';

if(isset($_GET['control'])){
    
    $controlador_name = $_GET['control'].'Controller';
    
    if(class_exists($controlador_name)){
    
    //$controlador = new UsuarioController();
    $controlador = new $controlador_name();
        
        if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
            $accion = $_GET['action'];
            $controlador->$accion();
        }else {
            echo 'Metodo no existe';
        }
    }else{
        echo 'Controlador no existe';
    }
    
}
else{
    echo 'Pagina no existe';
    exit();
}