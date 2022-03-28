<?php require_once 'conexion.php';?>
<?php require_once 'helpers-php.php';?>
<!DOCTYPE>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Blog de VideoJuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    </head>
    <body>
        <!--CABEZERA-->
        <header id="cabecera">
            <!--LOGO-->
            <div id="logo">
                <a href="index.php">
                    Blog de VideoJuegos
                </a>
            </div>
            <!--MENU-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <?php 
                        $categoria=consegirCategorias($db);
                        if(!empty($categoria)):
                            while($categorias = mysqli_fetch_assoc($categoria)):?>
                                <li>
                                    <a href="categoria.php?id=<?=$categorias["id"]?>"><?=$categorias["nombre"]?></a>
                                </li>
                        <?php endwhile;endif;?>
                    <li>
                        <a href="index.php">Sobre mi</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>

<div id="contenedor">           
