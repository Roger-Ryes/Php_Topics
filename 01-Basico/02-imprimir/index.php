<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master PHP</title>
    </head>
    <body>
        <h1>Master en PHP</h1>        
        <?php
            echo '<h3>Listado de video juegos:</h3>';
            echo "<ul>"
                    ."<li>GTA</li>" 
                    ."<li>Fifa</li>"
                    ."<li>The last of us</li>"
                  ."</ul>";
            echo '<p>Se utiliza'.' - '.'concatenacion'.' pata unir string'.'</p>';
        ?>
        <?="Esta linea de codigo es un atajo de 'echo' de php"?>
        <?php
            // Asi se coloca un comentario de php
            echo "solo con dobre barra// ya comentamos";
        ?>
    </body>
</html>