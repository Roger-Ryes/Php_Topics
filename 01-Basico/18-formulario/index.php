<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>FORMULARIO PHP Y HTML</title>
    </head>
    <body>
        <h1>FORMULARIO</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <!--action indica la pagina que va ir la informacion
                enctype="multipart/form-data" permite enviar archivos del formulario al servidor
            -->
            <label for="nombre">Nombre</label>
                <p><input type="text" name="nombre" autofocus="autofocus"/><p/>
                <!--autofocus ilumina la barra al seleccionar-->
            <label for="apellido">Apellido</label>
                <p><input type="text" name="apellido" disabled="disabled"/><p/>
                <!--disabled bloque la barra-->
            <label for="genero">Genero</label>
                <p><input type="text" name="genero" maxlength="5"/><p/>
                <!--maxlength maximos caracteres a ingresar-->
            <label for="cuidad">Cuidad</label>
                <p><input type="text" name="cuidad" minlength="5"/><p/>
                <!--minlength minimos caracteres a ingresar-->
            <label for="parientes">Parientes</label>
                <p><input type="text" name="parientes" pattern="[A-Z ]+"/><p/>
                <!--pattern="[A-Z]+" Solicita que se ingrese ese rango de manera iliminara(con el +)
                    pero no permite espacios
                    pattern="[A-Z ]+" igual que antes solo que ahora si permite espacios-->
            <label for="edad">Edad</label>
                <p><input type="text" name="edad" required="required"/><p/>
                <!--required solicita obligatoriamente que se llene ese campo-->
            <label for="codigo">Codigo</label>
            <p><input type="text" name="codigo" placeholder="codigo"/><p/>
                <!--required solicita obligatoriamente que se llene ese campo-->    
            <input type="submit" name="enviar" />
            </form>
        
        <hr/><h2>TIPOS DE CAMPOS</h2>
        <form action="" method="POST" enctype="multipart/form-data">
           
            <label for="boton">Boton</label>
                <input type="button" name="boton" value="Button"/><br/>
                    <!--Es un boton -->
            <label for="sexo">Sexo</label>
                <input type="checkbox" name="sexo" value="hombre"/>
                <input type="checkbox" name="sexo" value="mujer" checked="checked"/><br/>
                    <!--checked="checked" lo checkea por defaul-->
            <label for="color">Color</label>
                <p><input type="color" name="color"/></p>
                    <!--Paleta de colores-->
            <label for="fecha">Fecha: </label>
                <p><input type="date" name="fecha"/></p>
                    <!--Muestra un calendario-->
            <label for="correo">Correo: </label>
                <p><input type="email" name="correo"/></p>
                    <!--Para correos-->
            <label for="archivo">Archivo </label>
                <p><input type="file" name="archivo"/></p>
                    <!--Seleccion de un archivo-->        
            
            <label for="archivoMult">Archivos Multiples </label>
                <p><input type="file" name="archivoMult" multiple="multiple"/></p>
                    <!--Seleccion varios archivo-->        
            
            <label for="archivo">Archivo </label>
                <p><input type="hidden" name="archivo"/></p>
                    <!--Oculta el dato a la vista del user pero no del server-->        
            
            <label for="numero">Numero</label>
                <p><input type="number" name="numero"/></p>
                    <!--solo permite numeros-->
            
            <label for="pass">Password</label>
                <p><input type="password" name="pass"/></p>
                    <!--Seleccion de un archivo-->        
            
            <label for="continent">Continente</label>
                <p><input type="radio" name="continent" value="america"/>America</p>
                <p><input type="radio" name="continent" value="europa"/>Europa</p>
                <p><input type="radio" name="continent" value="asia"/>Asia</p>
                    <!--Seleccion de un archivo-->        
          
            <label for="url">Url</label>
                <p><input type="url" name="url"/></p>
                    <!--Coloca la url-->        
            
            <textarea></textarea><br/>
            <select name="peliculas">
                <option value="ironMan">Iron Man</option>
                <option value="hulk">Hulk</option>
                <option value="thor">Thor</option>
                <option value="spiderman">Spiderman</option>
            </select>
            <input type="submit" name="enviar" />
        </form>
    </body>
    
</html>