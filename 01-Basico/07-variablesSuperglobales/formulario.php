<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1><hr/>
        <!--
        <p>Envio de Datos por "GET"</p>
        <form method="GET" action="recibir.php"> 
            <!-- method="" Indico que metodo http voy a utilizar
                 GET para obtener valores-->
            <!--En el URL de la pag se mostrara asi /?nombre=valor&apellido=hola...
                se van concatenando los valores recibido-->
            <!--action="" indica a que pagina me lleva ese form (formulario) 
                a que pagina envia el contenido-->  <!--
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido"/>
             </p>
             <input type="submit" value="enviar datos"
        </form> <hr/>
        -->
        <p>Envio de datos por "POST"</p>
        <form method="POST" action="recibir2.php"> 
            <!-- method="" Indico que metodo http voy a utilizar
                 GET para obtener valores-->
            <!--En el URL de la pag se mostrara asi /?nombre=valor&apellido=hola...
                se van concatenando los valores recibido-->
            <!--action="" indica a que pagina me lleva ese form (formulario) 
                a que pagina envia el contenido-->
            <p>
            <label for="genero">Genero</label>
            <input type="text" name="genero"/>
            
            <label for="edad">Edad</label>
            <input type="text" name="edad"/>
             </p>
             <input type="submit" value="enviar datos"
        </form>
        
    </body>
</html>
<?php

?>