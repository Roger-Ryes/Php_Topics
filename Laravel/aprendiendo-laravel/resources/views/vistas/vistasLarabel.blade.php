{{--IMPRIMIR VALORES--}}
<h1>Valores pasados</h1>
<h3>Este es <?=$valor?></h3>
<h3>Este es <?=$valor2?></h3>
<h3>Este es <?=$integrado[1]?></h3>
<br>

{{--IMPRIMIR VALOR EN BLADE--}}
<h3>Imprimir con  Blade syntax en vez de utilizar esto</h3>
<p><?=$integrado[0]?></p>
<P><strong>Se utiliza esto</strong></P>
<p>{{ $valor }}</p>
<br>

{{--COMENTARIOS EN BLADE--}}
<h3>Comentario en Blade</h3>
<!--En PHP es de esta forma-->
<p>Si se deseea utilizar comantarios se ejecuta con:</p>
<p>{{--De esta manera es un comentario--}}</p>
<br>

{{--SI EXISTE CONTENIDO--}}
<h3>Agregar condiciones</h3>
<p>Tradicionamente:</p>
<p><?=isset($valor3) ? $valor2:"Sin contenido";?></p>
<p>Con blade:</p>
{{$valor2 or 'Sin valor'}}
<br>

{{--CONDICIONALES--}}
<h3>Condiciones</h3>
@if (isset($integrado[1]) && count($integrado)<=3)    
    <p>El valor existe {{$integrado[1]}} y 'intregrado' contenido:{{count($integrado)}}</p> 
@elseif(isset($integrado[1]) && count($integrado)<=4)
    <p>'intregrado' contenido:{{count($integrado)}}</p> 
@else
    <p>Sin contenido</p>
@endif
<br>

{{--BUCLES--}}
<h3>BUCLES</h3>
<p>Con FOR</p>
@for($i=0; $i < count($integrado); $i++)
    <p>{{$integrado[$i]}}</p>
@endfor

<p>Con FOREACH</p>
@foreach($integrado as $int)
    <p>{{$int}}</p>
@endforeach

<p>Con WHILE</p>
<?php $cont=1; $limit ?>
@while($cont<=20)
    {{$cont}}
    @if($cont < 20)
        ,
    @endif
    <?php $cont++;?>
@endwhile

{{--Se puede incluir vista en las vistas--}}
{{--INCLUDE--}}
<h3>INCLUDES</h3>
<p>Como ejemplo se incluira el 'encabezado' y 'pie de pagina'</p>
@include('includes.header')
@include('includes.footer')



