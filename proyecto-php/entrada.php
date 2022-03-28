<!--CABECERA-->
<?php require_once 'includes/cabecera.php';?>
<!--BARRA LATERAL-->
<?php require_once 'includes/lateral.php';?>

<div id="principal">
    <?php 
        $entradas_actual = consegirEntrada($db, $_GET['id']);
        if(!empty($entradas_actual)):
    ?>
        <!--TITULO DE ENTRADA-->
        <h1><?=$entradas_actual['titulo']?></h1>
        <a href="categoria.php?id=<?=$entradas_actual["categoria_id"]?>">
            <h2><?=$entradas_actual['categoria']?></h2>
         </a>
        <h3><?=$entradas_actual['fecha']?></h3>
        <p><?=$entradas_actual['descripcion']?></p>
        <h4>Autor | <?=$entradas_actual['autor']?></h4>

    <?php elseif(empty($entradas_actual)):
        header("Location: index.php");
    endif;?>
    
    <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entradas_actual['usuario_id']):?>
        <a href="editar-entradas.php?id=<?=$entradas_actual['id']?>" class="boton boton-naranja">Editar entrada</a>
        <a href="borrar-entradas.php?id=<?=$entradas_actual['id']?>" class="boton">Borrar entrada</a>
    <?php endif;?>
      
</div>

<!--PIE DE PAGINA-->
<?php require_once 'includes/pie.php';?>