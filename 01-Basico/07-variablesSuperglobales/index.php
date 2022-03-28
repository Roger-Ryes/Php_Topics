<?php

//VARIABLES DE SERVIDOR
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
        /*
         * server_addr direccion IP del servidor web que es este caso
         * sera la direccion del localhost (::1)
         */
echo '</h1>'
    .'<p>Determino mi direccion IP</p>';
 //-----------------------------
echo '<h2>';
echo $_SERVER['SERVER_NAME'].'</he>';   
/*
 * server_name determina el name o el dominio que
 * tendra nuestro servidor 
 */
echo '<p>Permite mostrar el nombre del domino</p>';
  //-----------------------------
echo '<h2>';
echo $_SERVER['SERVER_SOFTWARE'].'</h2>';
/*
 * Para determina el software que usa el servidor se utiliza
 * SERVER_SOFTWARE
 */
echo '<p>Muestra el software que utiliza nuestro servidor'; 
  //-----------------------------
echo '<h2>';
echo $_SERVER["HTTP_USER_AGENT"].'</h2>';
/*
 * Tambien puedo determinar el cliente, es decir determina
 * el navegador que uso para acceder a la pagina
 */
echo '<p>Determina el navegador que uso para acceder a la pagina</p>';
 //-----------------------------
echo '<h2>';
echo $_SERVER["REMOTE_ADDR"].'</h2>';
/*
 * Determinar la direccion remota de mi usuario
 */
echo '<p>Determina la direccion IP de mi usuario</p>'

?>

