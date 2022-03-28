<!---->
<?php
$error = 'Falta Valores';
    if(!empty($_POST['nombre']) &&
       !empty($_POST['apellidos']) &&
       !empty($_POST['edad']) &&
       !empty($_POST['email']) &&
       !empty($_POST['contrasena'])){
        $error='ninguno';     
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellidos'];
        $edad=$_POST['edad'];
        $email=$_POST['email'];
        $contrasena=$_POST['contrasena'];
        // Validar 
        if(!is_string($nombre) || preg_match("/[1-9]+/", $nombre)){
            // si no es un string y si es un numero 
            $error = 'nombre';
        }
        if(!is_string($apellido) || preg_match("/[1-9]+/", $nombre)){
            // si no es un string y si es un numero 
            $error = 'apellido';
        }
        if(!is_integer($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
            /*filter_var($edad, FILTER_VALIDATE_INT) valida la variable
             * edad y meter un filtro que sea una constante entero (FILTER_VALIDATE_INT)
             */
            $error = 'edad';
        }
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 'email';
        }
        if(empty($contrasena) || strlen($contrasena)<5){
            $error = 'password';
        }
    }else{
        $error = "Falta Valores";        
    }
    if($error!='ninguno'){
        header("Location:index.php?error=$error");
    }
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de formulario</title>
    </head>
    <body>
        <?php if($error=='ninguno'):?>
        <h2>DATOS VALIDADOS</h2>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            <p><?=$contrasena?></p>
        <?php endif;?>
        
    </body>

