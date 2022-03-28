<?php
 /*
  * Si deseo utilizar la variable del sesion en otras
  * paginas hay que realizar un sesion_start()
  */
 session_start();
 echo '<p>Si deseo imprimir una variable normal'
      .'de otra pagina, entonces no valdra</p>';
 echo $variable_normal;
 echo '<p>Una variable de sesion si se puede imprimir</p>';
 echo $_SESSION['variable_persistente'];
 
?>

