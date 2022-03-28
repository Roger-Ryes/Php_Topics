<!--CABECERA-->
<?php require_once 'includes/cabecera.php';?>
        
<!--BARRA LATERAL-->
<?php require_once 'includes/lateral.php';?>

    <!--CAJA PRINCIPAL-->
    <div id="principal">
        <h1>Ultimas entradas</h1>
        <?php
            $entrada = consegirEntradas($db,NULL);
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

           <!--FIN principal-->     
            <div id="ver-todas">
                <a href="entradas.php">Ver todas las entradas</a>
            </div>    

    <!--PIE DE PAGINA-->
    <?php require_once 'includes/pie.php';?>
    
    </body>
    
</html>
