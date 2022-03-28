<?php
function mostrarErrores ($errores, $campo){
    $alert = "";
    if(isset($errores[$campo]) && !empty($campo)){
        $alert = '<div class="alert-errores">'.$errores[$campo].'</div>';
    }
    return $alert;
} 

function borrarErrores(){
    //$_SESSION['errores'] = null;
    unset($_SESSION["completado"]);
    unset($_SESSION["errores"]['general']);
    unset($_SESSION['errores']); 
    //return $borrado;
    unset($_SESSION['errores_entradas']); 
    //Otro metodo
    //session_unset();
}
//Consige todas las categorias
function consegirCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);
    $result = array();
    if($categorias && mysqli_num_rows($categorias)>1){
        $result = $categorias;
    }
    return $result;
}

//Consigue una categoria en especifico
function consegirCategoria($conexion, $id){
    $sql = "SELECT * FROM categorias WHERE id=$id;";
    $categorias = mysqli_query($conexion, $sql);
    $result = array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $result = mysqli_fetch_assoc($categorias);
    }
    return $result;
}

//Consigue una entrada en especifico
function consegirEntrada($conexion, $id){
    $sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre,' ',u.apellido) AS 'autor' FROM entradas e".
            " INNER JOIN categorias c ON e.categoria_id = c.id".
            " INNER JOIN usuarios u ON e.usuario_id = u.id".
            " WHERE e.id= $id";
    $entrada = mysqli_query($conexion, $sql);
    
    $result = array();
    if($entrada && mysqli_num_rows($entrada)>=1){
        $result = mysqli_fetch_assoc($entrada);
    }
    return $result;
}


function consegirEntradas($conexion, $limit=NULL, $categoria = NULL,$busqueda = NULL){
   $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id";
    //$sql = "SELECT * FROM entradas LIMIT 4";
    //$sql = "SELECT * FROM entradas LIMIT 4";
   if($categoria != NULL){
       //Seleccione la categoria por ID
       $sql .= " WHERE e.categoria_id = ".$categoria;   
   }
   if($busqueda!=NULL){
       //Seleccione la categoria por ID
       $sql .= " WHERE e.titulo LIKE '%$busqueda%'";   
   }   
   $sql.=" ORDER BY e.id DESC"; // ORDER BY va despues de WHERE
   
   if($limit==NULL){
       //Es lo mismo que $sql = $sql."LIMIT 4"
       $sql .= " LIMIT 4"; 
   }                
   $entradas = mysqli_query($conexion, $sql);
    $resultado = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado = $entradas;
    }
    
    return $resultado;
}


?>
