<?php
    /* BUCLE WHILE
     * Estructura de control que itera o repite la 
     * ejecucion de una serie de instrucciones tantas
     * veces como sea necesaria, en base a una condicion
     * 
     * while(condicion){
     *  bloque de instrucciones
     * } 
     */
echo '<h2> BUCLE WHILE</h2>';
    $numero = 0;
    while($numero <= 10){
        echo "$numero";
        if($numero != 10){
            echo',<br/>';
        }
        $numero++;          
    }
    // que nos llege un numero por get
    echo '<br/><strong>Ejercicio 1 BUCLE WHILE<strong>';
    if(isset($_GET['numero'])){ //isset() determina si existe una variable
        $numero = (int) $_GET['numero']; // lo casteamos(casting) a GET cono int
    }else{
        $numero = 1;
    }
    
    echo"<h3>Tabla de multiplicar del numero $numero<h3>";
    $contador = 0;
    while($contador<=10){
        echo "$numero x $contador ="
            . $numero*$contador.'<br/>';
        $contador++;    
    }
//DO WHILE
 echo '<hr/><h2> BUCLE WHILE</h2>';
    /* do[
     * 
     * }
     * while(condicion);
     */
    $edad = 18;
    $contador = 1;
    do{
        echo "Tienes acceso al local privado $contador<br/>";
        $contador++;
    }while($edad >= 18 && $contador <=10);
     
// BUCLE FOR
 echo '<hr/><h2> BUCLE FOR</h2>';
 /*BUCLE FOR
  * for(inicio, condicion, incrementar/decrementar){
  *     instrucciones;
  * }
  */
    $resultado = 0;
    for($i = 0; $i <= 10; $i++){
        $resultado+=$i;
        echo 'valor:'.$resultado.'<br/>';
    }
// BREAK
 echo '<hr/><h2> BREAK</h2>';
 //Permite salir de un bucle 
    echo '<p>Contador hasta el 100</p>';
    for($i = 0; $i <= 100; $i++){
        echo 'valor:'.$i.'<br/>';
        if($i == 24){
            echo "No se puede continuar con el conteo";
            break;
        }
    }
     
      
    



    
?>
