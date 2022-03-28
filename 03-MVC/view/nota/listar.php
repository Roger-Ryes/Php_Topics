<h1>listados de notas (tabla)</h1>
<?php while($nota = $notas->fetch_object()):?>
    <?=$nota->titulo?> | <?=$nota->fecha?> <br>
<?php endwhile;?>