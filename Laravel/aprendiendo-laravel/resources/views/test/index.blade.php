<?php 
//Exportar controllers
    use App\Http\Controllers\PruebaController;
?>
<h1>Prueba de controller testing</h1>
<p>El valor es: {{$set or 'nothing value'}}</p>
@if($page)
    <h4>El numero de la pagina es: {{$page}}</h4>
@endif

<h3>Enlace</h3>
<a href="{{action([PruebaController::class, 'enlace'])}}">Ir al enlace ejm</a>