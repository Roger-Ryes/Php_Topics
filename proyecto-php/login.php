<?php
// Iniciar la sesion y la conexion a bd
require_once 'includes/conexion.php';

//Recoger datos del formulario
if(isset($_POST)){
    //Borrar error antiguo
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    
    $email = trim($_POST['email']);
    $password = $_POST["password"];
}
//Consultar para comprobar las crecdenciales del user
$query = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
$login = mysqli_query($db, $query);

if($login && mysqli_num_rows($login)== 1){
    $usuario = mysqli_fetch_assoc($login);
    
    //Comprobar la contraseña
    $verify_pass = password_verify($password, $usuario['password']);
    
    if($verify_pass){
        //Utilizar una sesion para guardar los datos del usuario logeado
        $_SESSION["usuario"]= $usuario;
    }else{
        //Si algo falla enviar una sesion con el fallo
        $_SESSION['error_login']= "Login incorrecto";
    }
}else{
    $_SESSION['error_login']= "Login incorrecto";
}
//Redirigir al index.php
header("Location:index.php");