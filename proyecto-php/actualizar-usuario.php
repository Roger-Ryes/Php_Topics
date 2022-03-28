<?php
    if(isset($_POST)){
        require_once 'includes/conexion.php';
        //Inicio secion
        if(isset($_SESSION)){
            session_start();
        }
        //operador ternario
        //Recoge los valores del formulario de actualizaciones 
        $nombre=  isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']):false;
            // mysqli_real_escape_string --> toma todo lo que le pase (incluyendo " ') como string
        $apellido=isset($_POST['apellido'])? mysqli_real_escape_string($db,$_POST['apellido']):false;
        $email=   isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])):false;
        
        //Array de errores
        $errores = array();
        
        //Validar datos antes de guardar en base de datos
        // validar campo nombre
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
            echo "El nombre es valido";
            $nombre_validado = true;
        }else{$errores['nombre'] = "Nombre no valido";
              $nombre_validado = false;  
        }
        
        // validar campo email
        if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
            echo "El apellido es valido";
            $apellido_validado = true;
        }else{$errores['apellido'] = "Apellido no valido";
              $apellido_validado = false;
        }
        
        // validar campo email
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "El email es valido";
            $email_validado = true;
        }else{$errores['email'] = "Email no valido";
              $email_validado = false;
        }
    }
    
    $guardar_usuario = false;
    if(count($errores)== 0){
        $usuario = $_SESSION['usuario'];
        
        //COMPROBAR SI EMAIL YA EXISTE
        $sql = "SELECT id, email FROM usuarios WHERE email LIKE '$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_num_rows($isset_email);
        if($isset_user["id"] == $usuario["id"] || empty($isset_user)){
        
            // INSERTA USUARIOS EN LA BASE DE DATOS
            $guardar_usuario = true;

            //ACTUALIZAR EL USUARIO EN LA TABLA DE LA BD
            $sql = "UPDATE usuarios SET"
                    . " nombre='$nombre',"
                    . " apellido='$apellido',"
                    . "email='$email'"
                    . "Where id=".$usuario["id"];
                    ;
            $guardar = mysqli_query($db, $sql);
            if($guardar){
                $_SESSION["usuario"]["nombre"]= $nombre;
                $_SESSION["usuario"]["apellido"]= $apellido;
                $_SESSION["usuario"]["menu"]= $menu;
                $_SESSION["completado"]= "Datos actualizados con exito!";
            }else{
                $_SESSION["errores"]['general']="Fallas actualizar";                       
            }
            if(mysqli_errno($db)){
                echo '<br/>'.mysqli_error($db);
            }
        }
        else{
            $_SESSION["errores"]['general']= "Este email ya existe";
        }
    }else{
        $_SESSION['errores'] = $errores;
    }
    header('Location:misdatos.php');
    
?>