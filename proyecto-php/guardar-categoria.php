<?php 
if(isset($_POST)){
    //ESTABLESCO UNA CONEXION
    require_once 'includes/conexion.php';
    
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']):false;
    
    //COMPROVACION DE DATOS
    //array de errores
    $errores = array();
        //Validar datos antes de guardar en base de datos
        // validar campo nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        echo "El nombre es valido";
        $nombre_validado = true;
    }else{$errores['nombre'] = "Nombre de categoria no valido";
          $nombre_validado = false;  
    }
        
    if(count($errores)== 0){
          var_dump($nombre);
        $sql = "INSERT INTO categorias VALUES(NULL,'$nombre');";
        $guardar = mysqli_query($db, $sql);       
    }
}
header("Location:index.php");
?>