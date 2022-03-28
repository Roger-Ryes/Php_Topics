<!-- Defining A Layout -->
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Titulo - @yield('title')</title>
    </head>
    <body>
        {{--ref: https://laravel.com/docs/8.x/blade#defining-a-layout--}}
        
        {{--The @section directive, as the name implies, defines a section of content,--}}
        {{--mientras the @y ield directive is used to display the contents of a given section.--}}
        
        @section('header')
            <h1>CABECERA DE LA WEB (MASTER)</h1>
        @show
        <hr>
        
        <div class="container">
            @yield('content')
        </div>
        
        <hr>
        @section('footer')
        <h2>PIE DE PAGINA DE LA WEB (MASTER) &COPY;<h2>
        @show
        
    </body>
</html>