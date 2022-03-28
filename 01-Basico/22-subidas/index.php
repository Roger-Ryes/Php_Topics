<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir Imagenes con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <!--enctype sera lo mas importante para subir datos-->
            <input type="file" name="archivo"/>
            <input type="submit" value="Enviar"/>
        </form>
        <h1>Listado de imagenes</h1>
        <?php
            $gestor = opendir('./imagenes');
            if($gestor):
                while(($imagen = readdir($gestor))!= false):
                    if($imagen != '.' && $imagen != '..'):
                        echo "<img src='imagenes/$imagen' width='200px'></br/>";
                    endif;
                endwhile;
            endif;
        ?>
    </body>
</html>

