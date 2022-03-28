<?php
    if(isset($_POST)){
        require_once 'includes/conexion.php';
        //Inicio secion
        if(isset($_SESSION)){
            session_start();
        }
        //Recoge los valores del formulario de Registro
        //operador ternario
        $nombre=  isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']):false;
            // mysqli_real_escape_string --> toma todo lo que le pase (incluyendo " ') como string
        $apellido=isset($_POST['apellido'])? mysqli_real_escape_string($db,$_POST['apellido']):false;
        $email=   isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])):false;
        $password=isset($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']):false;
    
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
        
        // validar campo email
        if(!empty($password)){
            echo "El password es valido";
            $password_validado = true;
        }else{$errores['password'] = "Contraseña vacia";
              $password_validado = false;
        }
    }
    
    $guardar_usuario = false;
    if(count($errores)== 0){
        // INSERTA USUARIOS EN LA BASE DE DATOS
        $guardar_usuario = true;
        
        // CIFRAR CONTRASEÑA 
        //password_hash($errores, $algo, $options)
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        //indicamos la contraseña, el metodo en este caso sera bcrypt, las veces que lo incriptara
        // Para verificar si el cifrado se relaciona con la contraseña se usa
        $verificar_password= password_verify($password, $password_segura);
        var_dump($password);
        var_dump($password_segura);
        var_dump($verificar_password);
        
        //INSERTAR USUARIO EN LA TABLA DE LA BD
        $sql = "INSERT INTO usuarios VALUES(null,'$nombre', '$apellido', '$email', '$password_segura', CURDATE())";
        $guardar = mysqli_query($db, $sql);
        if($guardar){
            $_SESSION["completado"]= "Registro completado!";
        }else{
            $_SESSION["errores"]['general']="Fallas en guardar el usuario";
        }
        if(mysqli_errno($db)){
            echo '<br/>'.mysqli_error($db);
            die();
        }
    }else{
        $_SESSION['errores'] = $errores;        
    }
    header('Location:index.php');

?>
