<?php
/*EJERCICIO 5 
 * Crear una array con el contenido de la tabla:
 * ACCION   AVENTIRA    DEPORTES
 * GTA      ASSASINS    FIFA 19
 * COD      CRASH       PES 19
 * PUGB     PRINCEofPER MOTO GP 19
 * 
 * Cada columna debe ir en un fichero separado (include)
 */?>
<!DOCTYPE html>
<html>
    <head>
        <title>PRUEBA CON MATRIZ</title>
    </head>
    <body>
        <?php
        $matriz = array(
                    "ACCION" =>   array("GTA","COD","PUGB"),
                    "AVENTURA" => array("ASSASINS","CRASH","PRINCE"),
                    "DEPORTES" => array("FIFA19","PES19","MOTO GP19"),
                  );
        $categoria = array_keys($matriz);
        ?>
        <table border="1">
            <tr>
                <?php foreach ($categoria as $catalogo):?>
                    <th><?=$catalogo?></th>";
                <?php endforeach;?>                
            </tr>
            <tr>
                <td><?=$matriz["ACCION"][0]?></td>
                <td><?=$matriz["AVENTURA"][0]?></td>
                <td><?=$matriz["DEPORTES"][0]?></td>
            </tr>
            <tr>
                <td><?=$matriz["ACCION"][1]?></td>
                <td><?=$matriz["AVENTURA"][1]?></td>
                <td><?=$matriz["DEPORTES"][1]?></td>
            </tr>
            <tr>
                <td><?=$matriz["ACCION"][2]?></td>
                <td><?=$matriz["AVENTURA"][2]?></td>
                <td><?=$matriz["DEPORTES"][2]?></td>
            </tr>

        </table>
    </body>
</html>


