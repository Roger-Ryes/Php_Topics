<!--CABECERA-->
<?php require_once 'includes/cabecera.php';?>
<!--CONEXION-->
<?php require_once 'includes/conexion.php';?>
<!--helpers-php-->
<?php require_once 'includes/helpers-php.php';?>


 <!--CAJA PRINCIPAL-->
 <div id="principal">
<h1>Todas las entradas</h1>
        <?php
            $entrada = consegirEntradas($db,true);
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
           elseif (empty($entrada)):?><p>Oops!! Existe problemas en la pagina</p>
           <?php endif;?>
</div>
           
<!--FIN principal-->     
<div id="ver-todas">
    <a href="index.php">Volver</a>
</div>  

<!--PIE-->
 <?php require_once 'includes/pie.php';?>

