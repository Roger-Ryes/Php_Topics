<?php
$archivo = $_FILES['archivo'];
// Lo que almacena la variable $archivo seran 
// arrays de asignacion
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" ||
   $tipo == "image/png" || $tipo == "image/gif"){
    if(!is_dir('imagenes')){
        mkdir("imagenes",0777);
    }else{
        move_uploaded_file($archivo['tmp_name'], 'imagenes/'.$nombre);
        //Mueve un archivo recien subido y lo guarda en un destino
        //imagenes/nombreQueTendra
        //tmp_name es el archivo donde esta ubicado ahora
        header('Refresh: 5; URL=index.php');
        echo '<h3>Imagen subido correctamente</h3>';
    }
}else{
    header("Refresh: 5; URL=index.php");
//Espera 5 segundos | y se direcciona al index.php
    echo '<h3>Subir archivo con formato jpg, jpeg, png, gif</h3>'; 
}
//Opciones PHP/Configuracion de PHP
//post_max_size --> tamaño de informacion que puedo enviar por post

//upload_max_filesize --> tamaño max de fichero que pued subir 
//          con 256M se puede subir videos 

//date.timezone= UTC --> Se puede configurar el tiempo

?>

