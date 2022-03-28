<?php
require_once 'autoload.php';
//Se puede declarar asi
use misClases\Usuario;
//Le doy un alias para que nose confunda con el anterior
use panelAdministrador\Usuario as UserAdmin; 
use misClases\Entrada;
use misClases\Categoria;

//Otro metodo
//use misClases\Usuario, misClases\Categoria, misClases\Entrada;
//ESPACIOS DE NOMBRE Y PAQUETES
class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new misClases\Usuario();        
    }
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
    function informacion(){
        //echo __DIR__;
        //echo __METHOD__;
        echo __NAMESPACE__;
    }


}
//Objeto Principal
$principal = new Principal();
var_dump($principal->informacion());

//Identifica que metodos nomas existe
$metodos = get_class_methods($principal);
var_dump($metodos);

$busqueda = array_search('getApellidos', $metodos);
var_dump($busqueda);
//Objeto otro paquete
$usuarios = new UserAdmin();
var_dump($usuarios);

/*
 * Se puede llamar a esa funcion sin usar "namespace"
   
 *   public function __construct() {
        $this->usuario = new Usuario();
    }
}
$principal = new Principal();
var_dump($principal->usuario);
*/

//Comprobar si existe una clase
$clase = @class_exists('misClases\Usuarios');
if($clase){
    echo '<h1>La clase si existe</h1>';
}
else{
    echo 'La clase no existe';
}


