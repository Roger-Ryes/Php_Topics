<?php
include 'include/cabezera.php'; //permite incluir un fichero de php
/*
 * El include permite leer el contenido de un fichero y colocar su codigo
 * en la posicion donde lo estamos llamando
 */?>
        <!--CONTENIDO-->
        <div>
            <h2>Esta es la pagina de inicio</h2>
            <p>Texto de prueba de la pagina inicio</p>
             <hr/>
        </div>
       <?="Mi nombre es $nombre"?>
<?php
        include 'include/footer.php';
?>

