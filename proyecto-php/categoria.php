<!--CABECERA-->
<?php require_once 'includes/cabecera.php';?>
<!--BARRA LATERAL-->
<?php require_once 'includes/lateral.php';?>

<div id="principal">
    <?php 
        $categoria = consegirCategoria($db, $_GET['id']);
        if(!empty($categoria)):
    ?>
        <h1>Entradas de <?=$categoria['nombre']?></h1>
    
     <?php elseif(empty($categoria)):
            header("Location: index.php");
     endif;?>
        
     <?php
        $entrada = consegirEntradas($db, !NULL, $_GET['id']);
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