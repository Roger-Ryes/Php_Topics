<?php
/*COOKIES 
 *Son un mecanismos que guardan datos del usuario
 * en el navegador y en el servidor, y se puede rastrear
 * que usuarios vuelven a la web.
 * Son muy utiles para recordar los inicios de sesion.
 * utiles tambien valores temporales de un usuario en 
 * un cookie
 * desv --> se guardan en fichero del disco duro del 
 * usuario por lo que el usuario puede manipular esas 
 * cookies. Ademas solo se puede almacenar una cantidad
 * limitada de datos 
es un fichero que se almacena en el ordenador del usuario 
 * que visita la web con el fin de recordar datos o rastrear
 * cierta informacion del mismo en la web.
 */

//CREAR COOKIES
//setcookie("nombre","valorSoloSerText",caducidad,ruta,dominio);
setcookie("miCookie","valorDeMiGalleta");

//Cookie con expiracion
setcookie("unYear","valorDeMiCookieDe365",time()+(60*60*24*365));
header('Location:ver_cookies.php');
?>
