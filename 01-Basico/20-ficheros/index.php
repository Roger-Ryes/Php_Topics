
<?php
//FICHEROS
/* Desde php voy a abrir el fichero de texto 
 * creado
 */
/* 
$mode = "a+"; // permisos xrw ejecucion|lectura|escritura
 //ABRIR ARCHIVO
 $archivo = fopen("fichero_text.txt", $mode);
//LEER CONTENIDO DE ARCHIVO
 while(!feof($archivo)){/*tests for end-of-file on a file pointer
  * devuelve TRUE en el final del archivo caso contrario solo FALSE
  */
    /*   
    $contenido = fgets($archivo); 
    echo $contenido.'<br/>'; // Solo imprime una linea del fichero
 }
 //ESCRIBIR EN EL ARCHIVO
 fwrite($archivo, "\nCon el comando fwrite escribo en el archivo");
//Al ejecutar este comando debo cambiar los permisos de 'r' a 'a+(rw)'
//CERRAR ARCHIVO
 fclose($archivo); */
 ?>

<?php
//MANIPULAR ARCHIVOS
/*
echo '<h2>Se va a copiar un fichero</h2>';
//COPIAR UN ARCHIVO
//copy('fichero_text.txt', "fichero_copiado.txt") or die("Error de copia"); //die si ocurre un error      
// RENOMBRAR
//rename("fichero_copiado.txt","Nuevo_archivo_copiado.txt");
//ELIMINAR ARCHIVOS
unlink("Nuevo_archivo_copiado")or die ("Error al borrar");
*/
?>
//COMPROBAR SI EXISTE UN FICHERO
<?php
//COMPROBAR SI EXISTE UN FICHERO
if(file_exists("fichero_text.txt")){
    echo 'El fichero existe';
}else{
    echo 'El fichero no existe';
}
?>

