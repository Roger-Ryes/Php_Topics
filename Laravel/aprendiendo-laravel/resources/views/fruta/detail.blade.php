<?php
    use App\Http\Controllers\FrutaController;
?>
<h1>{{$detail->nombre}}</h1>
<p>{{$detail->descripcion}}</p>
<a href="{{action([FrutaController::class,'edit'],['id'=>$detail->id])}}">Actualizar</a>
<a href="{{action([FrutaController::class,'delete'],['id'=>$detail->id])}}">Borrar</a>
<hr>
<a href="{{action([FrutaController::class,'index'])}}">Regresar</a>
