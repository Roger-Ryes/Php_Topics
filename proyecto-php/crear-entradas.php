<?php include_once 'includes/redireccion.php';?>
<?php include_once 'includes/cabecera.php';?>
<?php include_once 'includes/lateral.php';?>

<div id="principal">
    <h1>Crear entradas</h1>
    <p>
        Añade nuevas categorias al blog para que los 
        usuarios puedan usarlas al crear sus entradas
    </p>
    <br/> 
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo"/>
         <?php echo isset($_SESSION["errores_entradas"])?mostrarErrores ($_SESSION["errores_entradas"], "titulo"):"" ?>
        
        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion"></textarea>
       <?php echo isset($_SESSION["errores_entradas"])?mostrarErrores ($_SESSION["errores_entradas"], "descripcion"):"" ?>
        
        <label for="categoria">Categoria</label>
        <?php echo isset($_SESSION["errores_entradas"])?mostrarErrores ($_SESSION["errores_entradas"], "categoria"):"" ?>
        <select name="categoria">
            <?php 
                $categorias = consegirCategorias($db);
                if(!empty(categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):?>
                    
                <option value="<?=$categoria["id"]?>"><?=$categoria["nombre"]?></option>
            <?php endwhile;endif;?>
            
        </select> 
        
        <input type="submit" value="guardar"/>
    </form>
    <?php borrarErrores();?>
</div>

<?php include_once 'includes/pie.php'; ?>
        
       