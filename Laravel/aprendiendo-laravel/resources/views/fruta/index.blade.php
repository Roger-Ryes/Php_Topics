<?php
    use App\Http\Controllers\FrutaController;
?>

<h1>Listado de frutas</h1>
@if(session('status'))
    <p>{{session('status')}}</p>
@endif
<h2><a href="{{action([FrutaController::class, 'create'])}}">Crear fruta</a></h2>

<ul>
    @foreach($frutas as $fruta)
        <li>{{$fruta->nombre}}</li>
        <a href="{{action([FrutaController::class, 'detail'], ['id'=>$fruta->id])}}">Ir a {{$fruta->nombre}}</a>         
    @endforeach
</ul>