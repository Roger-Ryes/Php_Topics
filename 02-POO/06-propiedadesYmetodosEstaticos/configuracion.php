<?php
//Propiedad o metodos estaticos
/*
 * Son propiedades o metodos normales solo que para 
 * llamarlo no necesito instanciar o crear un objeto
 * llamo directo al metodo estatico
 */
class Configuracion{
    public static $color;
    public static $newsletter;
    public static $entorno;
    
    public static function getColor() {
        return self::$color; //Accedemos a un propiedad  statica
        //equivalente al "this" pero en estatico
    }

    public static function getNewsletter() {
        return self::$newsletter;
    }

    public static function getEntorno() {
        return self::$entorno;
    }

    public static function setColor($color) {
        self::$color = $color;
    }

    public static function setNewsletter($newsletter) {
        self::$newsletter = $newsletter;
    }

    public static function setEntorno($entorno) {
        self::$entorno = $entorno;
    }


}