<?php
/*Regoge todos los valores como un string 
  toma todo lo que le pase (incluyendo " ') como string */
mysqli_real_escape_string($escapestr);

//HEADER
     header('Location:misdatos.php'); //Posicion a cambiar

//SUBSTR
      substr($string,desde, hasta);
      substr($entradas,1,100);
      
//PASSWORD_VERIFY
    password_verify($password, $hash);
//PASSWORD ENCRYPTION
    password_hash($password, $algo, $options);
    password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
    //indicamos la contraseña, el metodo en este caso sera bcrypt, las veces que lo incriptara
    // Para verificar si el cifrado se relaciona con la contraseña se usa

