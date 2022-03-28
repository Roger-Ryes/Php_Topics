<?php
    /*
     * SESION
     * Almacena y persiste datos del usuario mientras
     * que navega en un sitio web hasta que cierra sesion
     * o cierra el navegador.
     * Todo se guarda en el servidor web, por que los 
     * datos no puede ser vistos.
     * desve --> al cerrar el navegador la 
     * sesion desaparece
     */
     //Inicio de sesion
     session_start();
     //Variable local
     $variable_normal ="Soy una cadena de texto";
     
//Una sesion es una variable superGlobal 
     //Variable de sesion
     $_SESSION['variable_persistente']='HOLA SOY UNA SESION ACTIVA';

     echo $variable_normal.'<br/>'; 
     echo $_SESSION['variable_persistente'];
     
?>

