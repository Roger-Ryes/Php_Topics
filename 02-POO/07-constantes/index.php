<?php
class Usuario{
    const URL_COMPLETA = "http://localhost";
    public $email;
    
    public $password;
    function getEmail() {
        self::URL_COMPLETA; //PROPIEDAD A NIVEL DE CLASE
        return $this->email;//PROPIEDAD A NIVEL DE OBJETO
    }

    function getPassword() {
        return $this->password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }    
}
$usuario = new Usuario();
var_dump($usuario);

//para ver la constante
echo $usuario::URL_COMPLETA;//Es estatica
echo Usuario::URL_COMPLETA;
//echo $usuario->URL_COMPLETA; //NO ES POSIBLE



self::URL_COMPLETA; //PROPIEDAD A NIVEL DE CLASE
return $this->email;//PROPIEDAD A NIVEL DE OBJETO
 
