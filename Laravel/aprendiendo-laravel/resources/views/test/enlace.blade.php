<?php
//Exportar controllers
use App\Http\Controllers\PruebaController;
?>
<!--ref: https://laravel.com/docs/8.x/urls#urls-for-controller-actions-->
<h1>Prueba de enlace Enlace</h1>
@if(isset($year))
    <p>Valor de year: {{$year}}</p>
@endif
<a href="{{action([PruebaController::class, 'index'],['page'=>4])}}">Ir a index</a>
