<?php include_once 'includes/redireccion.php';?>
<?php include_once 'includes/cabecera.php';?>
<?php include_once 'includes/lateral.php';?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Mis datos</h1>
    
    <!--MOSTRAR SI SE REGISTRO EL USER-->
    <?php if(isset($_SESSION["completado"])):?>
        <?= '<div class="alert-exito">'.$_SESSION["completado"].'</div>';?>
    <?php elseif (isset($_SESSION["errores"]['general'])):?>
        <?= '<div class="alert-errores">'.$_SESSION["errores"]['general'].'</div>';?>
    <?php endif;?>

    <form action="actualizar-usuario.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?=$_SESSION["usuario"]["nombre"]?>"/>
        <?= isset($_SESSION['errores'])? mostrarErrores($_SESSION["errores"],"nombre"):'';?>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" value="<?=$_SESSION["usuario"]["apellido"]?>"/>
        <?= isset($_SESSION['errores'])? mostrarErrores($_SESSION["errores"],"apellido"):'';?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?=$_SESSION["usuario"]["email"]?>"/>
        <?= isset($_SESSION['errores'])? mostrarErrores($_SESSION["errores"],"email"):'';?>

        <input type="submit" name='submit' value="Actualizar"/>
    </form>
    <?php borrarErrores();?>
</div>

<!--PIE-->
<?php include_once 'includes/pie.php'; ?>