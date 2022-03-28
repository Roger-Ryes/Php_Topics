<?php
//Excepciones
/*Una excepcion son fallos que genera el codigo
 * 
 */
//throw new Exception('Erores de logica');
/*Se utiliza con try y catch el cual captura excepciones
 * en codigo suscepturbles a errores
 */
try{
    if(isset($_GET['id'])){
        echo "<H1>El valor id es: {$_GET['id']}</H1>";
    }else{
        //Codigo que puede generar una exception
        throw new Exception('Falta paramtros por la URL');
        //En caso de generarlo con "catch" lo capturo        
    }    
} catch (Exception $ex) {
    echo "Ha habido un error: ".$ex->getMessage();
}finally{
    //Sirve para indicar cuando se ha acabado esta
    //estructura
    echo '<br>Todo correcto';
}
