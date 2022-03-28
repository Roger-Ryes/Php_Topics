<?php

class NotaController{
    public function listar(){
        //Modelo
        require_once 'models/nota.php';
        //control
        $nota = new Nota();
       
        $notas = $nota->conseguirTodos('notas');//Aqui mando la tabla para mi mysql
        
        //Vista
        require_once 'view/nota/listar.php';
    }
    public function crear(){
        //Modelo
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo('Nota desde mi PHP MVC');
        $nota->setDescripcion("Descripcion de mi nota");
        $guardar = $nota->guardar();
        
        header('Location: index.php?control=Nota&action=listar');
        
    }
    public function borrar(){
        
    }
}