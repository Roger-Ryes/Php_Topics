<?php
/* trait
permite definir una serie de metodos para compartir
entre diferentes clases
*/
trait Utilidades{
    public function mostrarNombre(){
        echo "<h1> El nombre es ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    
    use Utilidades;//Especifico el nombre de mi trait
}
class Persona{
    public $nombre;
    public $apellido;
    
    use Utilidades;
}
class VideoJuegos{
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche();
$coche->nombre="Ferrari Testo Rosa";

$persona = new Persona();
$persona->nombre="Antonio";

$videojuego = new VideoJuegos();
$videojuego->nombre="Call of duty";

$coche->mostrarNombre();
$persona->mostrarNombre();
$videojuego->mostrarNombre();
