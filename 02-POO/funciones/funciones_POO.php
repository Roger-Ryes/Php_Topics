<?php
//FUNCIONES DE POO
/*Elementos Principales de un POO
 * Las clases (Objetos)
 * Atributos o propiedades (Variables)
 * Metodos (funciones)
 */
    //DEFINIR UNA CLASE
    class Objeto{ //clase
        //Atributos o propiedades
        public $atributo1;
        public $propiedad;
        //Metodos
        function getAtributo1() {//GET consegir
            //$this->Significa busca en esta clase la propiedad x
            return $this->atributo1; 
        }
        function getPropiedad() {
            return $this->propiedad;
        }
        function setAtributo1($atributo1) {// SET setear 
            $this->atributo1 = $atributo1;
        }
        function setPropiedad($propiedad) {
            $this->propiedad = $propiedad;
        }
    }
    //CREAR UN OBJETO / INSTANCIAR LA CLASE 
    $objeto = new Objeto();
    //Llamar una propiedad
    $objeto->setAtributo1($atributo1);
    $objeto->getPropiedad();
    
/*CONSTRUCTOR
 * Dan valores a los atributos o propiedades que tiene un objeto.
 *  El constructor es el primer metodo que se ejecuta
 */
    class Objeto2{
        public $atributo1;
        public $propiedad1;
        public function __construct($atributo1, $propiedad1) {
            $this->atributo1 = $atributo1;
            $this->propiedad1 = $propiedad1;                 
        }
    }
    
//Visibilidad de propiedades y metodos
    /*
      PUBLIC: Podemos acceder desde cualquier lugar, dentro de la clase actual
                dentro de la clase que hereden esta clase o fuera de la clase 
      PROTECT: Podemos acceder desde la clase que los
                define y desde clases que hereden este clase.
      PRIVATE: unicamente se puede acceder desde esta clase
    */
    
//TIPADO
    /*Con PHP se puede especificar que tipo de dato es 
     *  public function obtenerInformacion(Int $objeto) entero
     *  public function obtenerInformacion(Array $objeto) array
     *  public function obtenerInformacion(nameObjeto $objeto) nameObjeto  
    */
  
//HERENCIA -> la posibilidad de compartir atributos y metodos entre clases
    class ObjetoH{
        //codigo de objeto atributos y metodos
    }
    class Heredero extends ObjetoH{
        //Codigo con atributos y metodos
        //Conserva valores de "ObjetoH"
    }
    class Otroheredero extends Heredero{
        //Obtiene valores de "ObjetoH" y "Heredero"
    }
    
//HERENCIA Y CONSTRUCTOR
    class ObjetoHere{
        public function __construct() {
            //Valores iniciales
        }
    }
    class HerederoObj{
        public function __construct() {
            //Se utiliza para heredar el constructor del padre
            //Llama de manera estatica al constuctor
            parent::__construct();
        }
    }
    /* Sin un constructor el hijo va a heredar las 
     * caracteristicas del padre 
     * Al agregar un constructor entonce ya no 
     * hereda el hijo algunos valores 
     */
    
//Propiedades y metodos Estaticos
    /*
     * Son propiedades o metodos normales solo que para 
     * llamarlo no necesito instanciar o crear un objeto
     * llamo directo al metodo estatico
     */
    class Estatico{
        public static $propiedad;
        public static $atributo;
        static function getPropiedad() {
            return self::$propiedad;
        }
        static function setAtributo($atributo) {
            self::$atributo = $atributo;
        }
    }
    //Acceder a mi objeto estatico
    Estatico::getPropiedad();
    Estatico::setAtributo($atributo);
    echo Estatico::$atributo;
    //instanciar el objeto
    $estatic  = new Estatico();
    echo $estatic::$propiedad;
    
//CONSTANTE
    class Constante{
        const propiedad = "valor_constante";
        //Demas codigo
    }
    //Ver la constante
    $constante = new Constante();
    echo $constante::propiedad; // Es estatico
    //echo $usuario->URL_COMPLETA; //NO ES POSIBLE
    
//TENER EN CUENTA
    self::URL_COMPLETA; //PROPIEDAD A NIVEL DE CLASE
    return $this->email;//PROPIEDAD A NIVEL DE OBJETO
    
//CLASE ABSTRACTA
    /*Clase que no se puede instanciar.
     * Esa clase define la estructura que puede tener una
     * clase que la herede, tambien puede definir 
     * funcionalidad.
    */
    //Definir clase abstracta
   abstract class Abstracto{
       public $propiedad; //Una propiedad o atributo no puede ser abstracta
       abstract public function verdadero();//Al definir un metodo como abstracto no 
                                 //se define que funcionalidad va a tener solo la defino
       
       public function apagar(){
            $this->propiedad=false;
       }
   }
   class Publica{
       public $atributo;
       public function verdadero(){//Aqui se da la funcionalidad
           $this->atributo = true;
       }
   }
   
//INTERFACES
   /* Es un contrato (como las clases absolutas), en donde
    * definimos que metodos y en que orden van a estar
    * en una clase.  
    */
    interface Interfaz{
        public function metodos1();
        public function metodos2();
        public function metodos3(); 
    }
    /*Implementar la interfaz se usa "implements"
     *pero se deben declarar los valores creados en 
     * el interfaz  
     */
     class ObjetoIn implements Interfaz{
        private $modelo;
        function getModelo() {
            return $this->modelo;
        }
        //AQUI DECLARO MIS METODOS DEL INTERFAZ para 
        //cumplir el contrado interfaz
        public function metodos1(){
            ;
        }            
        public function metodos2(){
            ;
        }
        public function metodos3(){
            ;
        }
     }
 
//METODOS MAGICOS
  /*TRAIR
        Define una serie de metodos para compartir
        entre diferentes clases
        */
         trait ObjetoTrail{
             public function metodo(){
                 echo $this->nombre;
             }
         }     
         class ObjetoContene{
             public $nombre;
             public $atributo;
             use ObjetoTrail;//Especifico el nombre de mi trait
         }
         //Utilizarlo
         $objetoc = new ObjetoContene();
         $objetoc ->nombre="string"; //Para guardar valor
         $objetoc->metodo(); //Mostrar

    /*DESTRUCTORES
    * Son parecidos a los constructores.
    * Se utiliza cuando ya no haya referencias a ese
    * objeto.
    * Cuando php detecta que ya no vamos a poder llamar al 
    * objeto (Usuario) entonces va a destruir el objeto
    */
     class Usuario{
        public function __construct(){
            //No se debe imprimir nada en el constructor
            echo "Instancia del objeto creada<br>"; 
        }
        public function __destruct(){
            echo "Destuyendo el objeto";
        }
     }

     /*toString
      * Permite que al llamar a un objeto se muestre como un string
      */
     class Tostring{
       public function __toString() {
          return "Aqui se manda lo que desee incluyendo variables";
       }
     }
     //Llamarlo
     $string= new Tostring(); 
     //Si imprimos sin "toString" no lo va a permitir por que es un objeto y no un string
     echo $string;
     
    /* CALL
     * Permite detectar cuando se llama un metodo que no exite, pero 
     * coincide con alguna variable de la funcion, se utiliza ese 
     * metodo como sustituto  
     */
     
     class objectCall{
         //__call($name, $arguments) {
        public function __call($name, $arguments) {
            //Se puede buscar un parecido a lo que buscaba
            $prefix_metodo = substr($name, 0 ,3);
            if($prefix_metodo == "get"){
               $nombre_metodo = substr(strtolower($name), 3);
               if(!isset($this->$nombre_metodo)){
                   return "No existe el metodo";
               }
               return $this->$nombre_metodo;

            }
            else{
                return "No existe el metodo";
            }
        }
     }  
   
//CAPTURAR EXCEPCIONES
   //Una excepcion son fallos que genera el codigo
   //Va de la mano con try-catch
   try{ //Solo se activa cuando detecta un error
       throw new Exception("Message");
   } catch (Exception $ex) {
       echo "Show:".$ex->getMessage();
   } finally {
       //Sirve para indicar cuando se ha acabado esta
        //estructura       
   }

//AUTOLOAD
   //----autoload-php.php-----(ARCHIVO)
   //Permite llamar muchas clases utilizando solo un require o include
   function app_autoloader($class){
    require_once 'clases/'.$class.'.php'; // Indico la direccion de mis clases a llamar
   }

    spl_autoload_register('app_autoloader');
    //Utiliza la funcion para buscar el directorio
    //----index.php-----(ARCHIVO PRINCIPAL)
    require_once 'autoload-php.php';
    
//NAMESPACES
    //----clase Categoria en categoria.php 
    //HACER UN PAQUETE
    namespace miPaquete;
        class Categoria{
            //Codigo
        }
    //---index.html
    //ESPACIOS DE NOMBRE Y PAQUETES
    use categorias;//Especifico que categoria se usara
    class Principal{
        public function __construct() {
            //Llamamos a
            $this->usuario = new miPaquete/Categoria();
        }
    }
    
//ASIGNAR UN ALIAS
    use panelAdministrador\Usuario as UserAdmin; 

//IDENTIFICA QUE METODOS EXISTEN EN UN OBJETO
    get_class_methods($principal);
    
//BUSCAR EN UN ARRAY
    array_search('ValorAbuscar', $array);
    
//COMPROBAR SI EXISTE UNA CLASE
    class_exists('misClases\Usuarios');
    
//EVITAR MOSTRAR LOS ERRORES 
    @comando;
    @class_exists('misClases\Usuarios');
 
//CONSTANTES PARA CLASES
    //echo __DIR__; //Determina el directorio
    //echo __METHOD__; //Determina que metodo usa
      echo __NAMESPACE__; //Da el nombre del archivo
    
//CREAR MYSQL COMO OBJETO
class database{
    public static function conectar(){
        //mysql con objetos
        //mysqli_connect($host, $user, $password, $database, $port, $socket)
        $conexion = new mysqli('localhost', 'root', '', 'notas_master');
        $conexion->query('SET NAMES "utf8"');//venga codificada en utf8
        
        return $conexion;
    }
    
       
}