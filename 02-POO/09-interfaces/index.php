<?php
/*INTERFACES
 * Es un contrato (como las clases absolutas), en donde
 * definimos que metodos y en que orden van a estar
 * en una clase.  
 */
interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();   
}
/*Implementar la interfaz se usa "implements"
 *pero se deben declarar los valores creados en 
 * el interfaz  
 */
class iMac implements Ordenador{
    private $modelo;
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    //AQUI DECLARO MIS METODOS DEL INTERFAZ para 
    //cumplir el contrado interfaz
    public function encender() {
        ;
    }
    public function apagar() {
        ;
    }
    public function reiniciar() {
        ;
    }
    public function desfragmentar() {
        ;
    }
    public function detectarUSB() {
        ;
    }
}

$maquintos = new iMac();
$maquintos->setModelo("Macbook PRO 2019");
echo 'Modelo '.$maquintos->getModelo();
var_dump($maquintos);

