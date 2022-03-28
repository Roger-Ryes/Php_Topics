<?php
//Para borrar un cookie
if(isset($_COOKIE['miCookie'])){
    unset($_COOKIE['miCookie']);
    //Se debe caducar la cookie
    setcookie('miCookie','',time()-100);
}
//Ya borrado debo de redireccionar
header('Location:ver_cookies.php')

?>

