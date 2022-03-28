<?php 
    if(!isset($_POST['busqueda'])){
        header("Location: index.php");
    }
?>   
<!--helpers-php-->
<?php require_once 'includes/helpers-php.php';?>
<!--conexion.php-->
<?php require_once 'includes/conexion.php';?>
<!--CABECERA-->
<?php require_once 'includes/cabecera.php';?>
<!--BARRA LATERAL-->
<?php require_once 'includes/lateral.php';?>

<div id="principal">
    <h1>Busqueda de <?=$_POST['busqueda']?></h1>
     <?php
        $entrada = consegirEntradas($db,!NULL,NULL, $_POST['busqueda']);
        if(!empty($entrada)):
            while($entradas = mysqli_fetch_assoc($entrada)):               
        ?>
            <article class="entrada">
                <a href="entrada.php?id=<?=$entradas['id']?>">
                    <h2><?=$entradas["titulo"]?></h2>
                    <span class="tituloEntrada"><?=$entradas["fecha"]?> | <?=$entradas["categoria"]?></span>
                        <p><?=substr($entradas["descripcion"],1,100).'... "Ver mas"';?></p>
                        <!--substr($string,desde, hasta)-->
                </a>
            </article>
            <?php  endwhile;
       elseif (empty($entrada)):?><p>Oops!! No existe contenido en esta categoria</p>
       <?php endif;?>
</div>

<!--PIE DE PAGINA-->
<?php require_once 'includes/pie.php';?>

