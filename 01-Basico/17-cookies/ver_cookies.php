<?php
    /*Para mostrar el valor de las cookies debo usar
     * $_COOKIE, es una variable superglobal, es un
     * array asociativo.
     */
if(isset($_COOKIE['miCookie'])){
    echo 'Valor de mi cookie: '.$_COOKIE['miCookie'].'<br/>';
}
else{
    echo 'No existe';
}
if(isset($_COOKIE['unYear'])){
    echo 'Valor de mi cookie2: '.$_COOKIE['unYear'].'<br/>';
}
else{
    echo 'No existe';
}
?>
<a href="index.php">Crear Cookies</a>
<a href="borrar_cookies.php">borrar Cookies</a>


  

