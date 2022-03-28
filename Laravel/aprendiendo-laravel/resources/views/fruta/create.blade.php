<?php
    use App\Http\Controllers\FrutaController;
    
    $url = action([FrutaController::class, 'saves']);
    if(isset($fruta)){
        $nombreFruta = $fruta->nombre;
        $precioFruta = $fruta->precio;
        $descFruta = $fruta->descripcion;
        $idFruta = $fruta->id;
        $url = action([FrutaController::class, 'upload']);
    }
?>
@if(isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else
    <h1>Crear una fruta</h1>
@endif

<a href="{{action([FrutaController::class, 'index'])}}">Ir a Index</a>

<form action="{{$url}}" method="POST">
    <!--ref: https://laravel.com/docs/8.x/routing#csrf-protection-->
    @csrf <!-- include a CSRF token field -->
    
    @if(isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{ $idFruta }}"/>
    @endif
    <p> 
        <label for="name">Nombre</label><br>
        <input type="text" name="name" value="<?=isset($fruta)?$nombreFruta:''?>"/>
    </p>
    <p>
    <label for="precio">Precio</label><br>
    <input type="number" name="precio" value="<?=isset($fruta)?$precioFruta:''?>"/>
    </p>
    <p>
    <label for="desc">Descripcion</label><br>
    <textarea type="text" name="desc"><?=isset($fruta)?$descFruta:''?></textarea>
    </p>
    
    <input type="submit" name="Guardar"/>    
</form>