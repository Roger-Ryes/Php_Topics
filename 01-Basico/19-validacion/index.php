<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de formulario</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == "Falta Valores"){
                    echo '<strong style="color:red">Ingresar todos los datos en los campos</strong>';
                }
                if($error == "nombre"){
                    echo '<strong style="color:red">Ingresar el nombre</strong>';
                }
                if($error == "apellido"){
                    echo '<strong style="color:red">Ingresar el apellido</strong>';
                }
                if($error == "edad"){
                    echo '<strong style="color:red">Ingresar la edad</strong>';
                }
                if($error == "email"){
                    echo '<strong style="color:red">Correo no valido</strong>';
                }
                if($error == "password"){
                    echo '<strong style="color:red">La contraseña es menor a 5 digitos</strong>';
                }                
            }                
        ?>
        <form method="POST" action="procesar_formulario.php">
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"/><br/>
            
            <label for="apellidos">Apellido</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"/><br/>
            
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>
            
            <label for="email">Correo</label><br/>
            <input type="email" name="email"/><br/>
            
            <label for="contrasena">Contraseña</label><br/>
            <input type="password" name="contrasena" minlength="5"/><br/>
            
            <input type="submit" value="Enviar"/> 
        </form>
    </body>
</html>
