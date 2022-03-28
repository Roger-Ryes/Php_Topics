# INTRODUCCION LARAVEL
1. Primeros pasos
2. Routing
3. Plantillas y vistas
4. Controladores
5. Formularios
6. Bases de datos
7. Empezando el proyecto
8. Entidades y modelos con elocuent
9. Login y Registro
10.Configuracion usuarios
11.Imagen y Comentarios
12.Sistemas de likes
13.Perfil de usuarios
14.Buscador y extras 


# Rutas basicas 
En
C:\Windows\System32\Drivers\etc
En aprendiendo-laravel/routes/api.php

Para enviar parametros de por una ruta a una vista
se utiliza un array

Route::get('/mostrarfecha',function(){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(  //Se enviara el parametro
        'titulo'=> $titulo              //En la vista se recoge con el nombre del array asosiativa(titulo)
    ));
}); 

# Metodos HTTP
    GET: Conseguir datos
    POST: Guardar datos
    PUT: Actualizar recursos
    DELETE: Eliminar recursos 



# Vista 
Al crear una vista en aprendiendo-laravel/resources/views
Se debe de agregar el motor de plantillas blade:
ejm
    nombre.blade.php

# En condiciones en rutas 
Se utiliza el "where" para establecer la condicion
ejem
    Route::get('/palabra/{palabra?}/{year?}',function($palabra = 'Sin palabra',$year=2019){
        //Se recoge el parametro
        return view('palabra',array(
            'palabra'=>$palabra,
            'year'   =>$year            
        ));
    })->where(array( //Aqui van las condiciones
        'palabra'=>'[a-z]+', //Solo permite palabras en minisculas
        'year'=>'[0-9]+'
    ));


# Consola Artisan

php artisan help
php artisan list //Comandos mas importantes
ejm
    php artisan route:list
    php artisan make:controller 
