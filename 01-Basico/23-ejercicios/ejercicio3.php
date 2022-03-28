<?php

/*EJERCICIO 3
 * Hacer una interfaz de usuario(Formulario) con 
 * dos inputs y 4 botones uno para sumar, restar,
 * dividir y multiplicar y que muestre el resultado
 * por pantalla 
 */
$resultado = false;
if(isset($_POST['numero1']) && isset($_POST['numero2'])):
    
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
        if(isset($_POST['suma'])){$resultado=$num1+$num2;}
        if(isset($_POST['restar'])){$resultado=$num1-$num2;}
        if(isset($_POST['multiplicar'])){$resultado=$num1*$num2;}
        if(isset($_POST['dividir'])){$resultado=$num1/$num2;}
endif;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body>
        <h1>Calculadora con interfaz</h1>
        <form action="ejercicio3.php" method="POST">
         <p><input type="number" name="numero1" placeholder="Ingresar 1er numero"/></p>
         <p><input type="number" name="numero2" placeholder="Ingresar 2do numero"/></p>
         <p><input type="submit" name="suma" value="sumar"/>
            <input type="submit" name="restar" value="restar"/>
            <input type="submit" name="multiplicar" value="multiplicar"/>
            <input type="submit" name="dividir" value="dividir"/></p>
        </form>
        <?php if($resultado!=false){echo "<h3>El resultado es $resultado</h3>";}?>
        
    </body>
</html>

