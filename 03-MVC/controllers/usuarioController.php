<?php
//Un controlador contiene acciones
//Por cada controlador se debe crear una carpeta con las vistas
class UsuarioController{
    public function mostrarTodos(){
        //Modelo
        require_once 'models/usuario.php';
        //control
        $usuario = new Usuario();
        $todos_los_usuario = $usuario->conseguirTodos('usuarios');
        //Vista
        require_once 'view/usuarios/mostrar_todos.php';
    }   
    public function crear(){
        //Vista
        require_once 'view/usuarios/crear.php';
    }
}