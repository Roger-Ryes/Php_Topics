<h1>listados de Usuarios (tabla)</h1>
<?php while($usuario = $todos_los_usuario->fetch_object()):?>
    <?=$usuario->nombre?> | <?=$usuario->email ?> <br>
<?php endwhile;?>