<?php include_once 'includes/redireccion.php';?>
<?php require_once 'includes/conexion.php';?>
<?php require_once 'includes/helpers-php.php';?>
<!--CABECERA-->
<?php require_once 'includes/cabecera.php';?>
<!--BARRA LATERAL-->
<?php require_once 'includes/lateral.php';?>

<?php 
    $entradas_actual = consegirEntrada($db, $_GET['id']);
    if(!isset($entradas_actual['id'])){
        header("Location:index.php");
    }
?>
<div id="principal">
    <h1>Editar entradas</h1>
    <p>
        Edita tu entrada <?=$entradas_actual['titulo']?>
    </p>
    <br/> 
    <form action="guardar-entrada.php?editar=<?=$entradas_actual['id']?>" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="<?=$entradas_actual['titulo']?>"/>
         <?php echo isset($_SESSION["errores_entradas"])?mostrarErrores ($_SESSION["errores_entradas"], "titulo"):"" ?>
        
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion"><?=$entradas_actual['descripcion']?></textarea>
       <?php echo isset($_SESSION["errores_entradas"])?mostrarErrores ($_SESSION["errores_entradas"], "descripcion"):"" ?>
        
        <label for="categoria">Categoria</label>
        <?php echo isset($_SESSION["errores_entradas"])?mostrarErrores ($_SESSION["errores_entradas"], "categoria"):"" ?>
        <select name="categoria">
            <?php 
                $categorias = consegirCategorias($db);
                if(!empty(categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)): 
            ?>
            <option value="<?=$categoria["id"]?>" <?=($categoria["id"]==$entradas_actual['categoria'])? 'selected="selected"':''?>><?=$categoria["nombre"]?></option>
              
            <?php endwhile;endif;?>
        </select> 
        
        <input type="submit" value="guardar"/>
    </form>
    <?php borrarErrores();?>
</div>

    
    
<!--PIE DE PAGINA-->
<?php require_once 'includes/pie.php';?>