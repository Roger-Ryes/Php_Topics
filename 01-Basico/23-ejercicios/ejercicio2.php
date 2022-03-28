<?php

/*EJERCICIO 2
 * 1. Una funcion
 * 2. validar un email con filter_var
 * 3. Recoger variable por get y validarla
 * 4. Mostrar el resultado 
 */
echo '<h2>Validacion de correo electronico</h2>';
function validarFuncion($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $valido='Email valido';
    }
    else{
        $valido='Email no valido';
        }
    return $valido;
}
if(isset($_GET['email'])){
    $email = $_GET['email'];
    echo validarFuncion($email);
}
else{
    echo 'No existe ningun correo';
}
?>



