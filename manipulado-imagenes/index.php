<?php
require_once '../vendor/autoload.php';
$imagen = "img-orig.jpg";
$gardarEn = 'fotoModificada.jpg';

$thumb = new PHPThumb\GD($imagen);
//Redimensionar
$thumb->resize(500,500); 

//Recortar
//$thumb->crop(250, 230, 100, 100);
$thumb->cropFromCenter(300,100);

$thumb->show();
$thumb->save($gardarEn);        

?>