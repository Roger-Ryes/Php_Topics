<?php
    //Exportar controllers
    use App\Http\Controllers\PruebaController;
?>

<h1>Formulario</h1>
<form action="{{action([PruebaController::class, 'receive'])}}" method="POST">
    <!--ref: https://laravel.com/docs/8.x/csrf#csrf-introduction-->
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name"/><br>
    
    <label for="email">Correo</label>
    <input type="email" name="email"/><br>
    
    <input type="submit" value="Enviar"/>
    
</form>