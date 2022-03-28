<?php 
if(isset($_POST)){
    //ESTABLESCO UNA CONEXION
    require_once 'includes/conexion.php';
    //COMPROVACION DE LLEGADA A DATOS
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']):false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST["descripcion"]):false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria']:false;
            
    //USUARIO IDENTIFICADP
    $usuario = $_SESSION["usuario"]["id"];
        
    //VALIDADCION 
    $errores = array();
    if(empty($titulo)){
        $errores["titulo"]="El titulo esta vacio";
    }
    if(empty($descripcion)){
        $errores["descripcion"]="La descripcion esta vacia";
    }
    if(empty($categoria) && !is_numeric($categoria)){
        $errores["categoria"]="Categoria no valida";
    }
    
    if(count($errores)==0){
        if(isset($_GET['editar'])){
            $entrada_id = $_GET["editar"];
            $usuario_id =$_SESSION['usuario']['id'];
            $sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$categoria"
                    ." WHERE id=$entrada_id AND usuario_id=$usuario_id;";
        }else{
            $sql = "INSERT INTO entradas VALUES(null,$usuario,$categoria,'$titulo','$descripcion',CURDATE())";
        }
        $guardar=mysqli_query($db, $sql);
        header("Location:index.php");
    } 
    else {
        if(isset($_GET['editar'])){
            $_SESSION[errores_entradas]=$errores;
            header("Location: editar-entradas.php?id=".$_GET['editar']);            
        }else{
            header("Location: editar-entradas.php");
        }        
    }
}    

?>