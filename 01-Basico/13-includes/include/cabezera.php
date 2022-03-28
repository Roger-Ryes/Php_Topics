<!--Un "Include" permite que el codigo no se repita
    en php permite incorporar ficheros en cualquier pagina
    que queramos, de forma que se puede reutilizar un fichero
    php tantas veces como queramos.
    llamando al include permite incluir el fichero en otro
    archivo.
-->

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Include en PHP</title>
    </head>
    <body>
        <!--CABECERA-->
        <div class="cabecera">
             <h1>Include en PHP</h1>
             <ul>
                 <li><a href="index.php">Inicio</a>
                 <li><a href="sobremi.php">Sobre mi</a>
                 <li><a href="contacto.php">Contacto</a>
             </ul>
        </div>
        <?php
        /*Se puede incluir variables que pueden utilizar
         * cualquiera que llama al include
         */
        $nombre="Roger Reyes";        
        ?>

