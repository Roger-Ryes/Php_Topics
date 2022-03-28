<!--BARRA LATERAL-->
<aside id="sidebar">
    <!--BUSCADOR-->
     <div id="buscador" class="bloque">
        <h3>Buscar</h3>

        <!--MOSTRAR SI SE REGISTRO EL USER-->
        <form action="buscar.php" method="POST">
            <input type="text" name="busqueda"/>
            <input type="submit" value="Buscar"/>
        </form>
    <?php borrarErrores();?>                
    </div>
    
    
    <!--Si logras logearte-->
    <?php if(isset($_SESSION["usuario"])):?>
    <div id="usuario-logeado" class="bloque">
        <h3>Bienvenido <?= $_SESSION["usuario"]["nombre"].' '.$_SESSION["usuario"]["apellido"]?></h3>
        <!--Botones-->
        <a href="crear-entradas.php" class="boton boton-naranja">Crear entradas</a>
        <a href="crear-categoria.php" class="boton">Crear categoria</a>
        <a href="misdatos.php" class="boton boton-verde">Mis datos</a>
        <a href="cerrar.php" class="boton boton-rojo">Cerrar sesion</a>
    </div>
    <?php endif;?>
    
    <?php if(!isset($_SESSION["usuario"])):?><!--SI NO EXISTE-->
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <!--Si no logra logearse-->
         <?php if(isset($_SESSION["error_login"])):?>
            <div class="alert-errores">
                <h3><?= $_SESSION["error_login"]?></h3>
            </div>
         <?php endif;?>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email"/>
            <label for="password">Contraseña</label>
            <input type="password" name="password"/>
            <input type="submit" value="Entrar"/>
        </form>
    </div>
    <div id="register" class="bloque">
        <h3>Registrate</h3>

        <!--MOSTRAR SI SE REGISTRO EL USER-->
        <?php if(isset($_SESSION["completado"])):?>
            <?= '<div class="alert-exito">'.$_SESSION["completado"].'</div>';?>
        <?php elseif (isset($_SESSION["errores"]['general'])):?>
            <?= '<div class="alert-errores">'.$_SESSION["errores"]['general'].'</h4>';?>
        <?php endif; ?>

        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            <?= isset($_SESSION['errores'])? mostrarErrores($_SESSION["errores"],"nombre"):'';?>

            <label for="apellido">Apellido</label>
            <input type="text" name="apellido"/>
            <?= isset($_SESSION['errores'])? mostrarErrores($_SESSION["errores"],"apellido"):'';?>

            <label for="email">Email</label>
            <input type="email" name="email"/>
            <?= isset($_SESSION['errores'])? mostrarErrores($_SESSION["errores"],"email"):'';?>

            <label for="password">Contraseña</label>
            <input type="password" name="password"/>
            <?= isset($_SESSION['errores'])? mostrarErrores($_SESSION["errores"],"password"):'';?>
            <input type="submit" name='submit' value="Registrar"/>
        </form>
    <?php borrarErrores();?>                
    </div>
    <?php endif;?>
</aside>