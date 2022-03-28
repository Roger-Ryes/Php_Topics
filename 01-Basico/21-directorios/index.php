<?php
if(!is_dir("mi_carpeta2")){//Si no existe 
    //se crea carpeta o directorio 
    mkdir("mi_carpeta2",0777) or die("No se puede crear la carpeta");
    // 0777 son los permisos, en 0777 tiene todos los permisos 
    echo 'Carpeta creada';    
} else {
    echo 'Ya existe la carpeta';
}

//Para borrar el directorio
//rmdir("mi_carpeta");

//Recorrer todo el camino que contiene un directorio
echo '<h2>CONTENIDO DEL DIRECTORIO</h2>';
if($gestor = opendir('./mi_carpeta2')){
    while(FALSE !== ($archivo = readdir($gestor))){
        if($archivo != '..' && $archivo != '.'){
            echo $archivo.'<br/>';
        }        
    }
}
?>