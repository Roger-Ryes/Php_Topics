<?php

use Illuminate\Support\Facades\Route;

//Exportar controllers
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\MiddleController;
use App\Http\Controllers\FrutaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// a basic task list: https://laravel.com/docs/5.1/quickstart#routing
    //TASK: Displat all task
Route::get('/', function () {
    //return view('welcome');//Por defaullt
   //return view("task.app");
    echo "Hello world";
});
    //TASK: add a task
Route::post("/task",function(Request $request){
    
});
    //TASK: remove task
Route::delete("/task/{id}",function($id){});


Route::get('/mostrarfecha',function(){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'titulo'=> $titulo
    ));
});

//Parametros en las rutas 
//Se agrega el ?, indica que puede o no tener un valor
Route::get('/pelicula/{titulo?}',function($titulo = 'Sin pelicula'){
    //Se recoge el parametro
    return view('pelicula',array('titulo'=>$titulo));
});

//PARAMETROS OPCIONALES Y MAS
//Con CONDICIONES 
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

//VISTAS 
Route::get('/vistasLarabel',function(){
    $valor = "vista a";
    $valor2 = "vista b";
    $integrado = ['integradoA','integradoB','integradoC','integradoD'];
    //Metodo1 para mandar parametros
    /*
    return view('vistas.vistasLarabel', array (
        'valor'=>$valor,
        'valor2'=>$valor2,
        'integrado'=>$integrado
            ));
    */
     //Metodo2
    return view('vistas.vistasLarabel')
            ->with('valor',$valor)
            ->with('valor2',$valor2)
            ->with('integrado',$integrado);
    
});

//plantilla base o layout
Route::get('/page-generic',function(){
    return view('page-generic');    
});

//Controlador
    //Controller basico
    //ref: (https://laravel.com/docs/8.x/controllers#defining-controllers)
Route::get('/controller-prueba/{page?}',[PruebaController::class,'index']);// 'pruebaController@index' Controlles@metodor
Route::get('enlace',[PruebaController::class,'enlace']);

   //Redirection 
    //ref:(https://laravel.com/docs/8.x/responses#redirecting-controller-actions)
Route::get('redirect',[PruebaController::class,'redireccion']);


//Resource 
    //ref: https://laravel.com/docs/8.x/controllers#resource-controllers
Route::resource('resource', ResourceController::class);


//Middleware
    //ref: https://laravel.com/docs/8.x/middleware#defining-middleware
    /*
    Route::resource('middleware', MiddleController::class)
            ->parameters(['create' => 'year'])
            ->middleware('testyear');
     */
Route::get('middleware/{year?}',[MiddleController::class,'create'])
        ->middleware('testyear');


//FORMULARIOS
Route::get('formulario',[PruebaController::class, 'form']);
Route::post("recibir",[PruebaController::class,"receive"]);


//LISTAR DATOS DE BD
Route::get("frutas",[FrutaController::class,"index"]);
Route::get("frutasDet/{id?}",[FrutaController::class,"detail"]);
Route::get("crearFrutas/{fruta?}",[FrutaController::class,"create"]);
Route::post("savesFrutas",[FrutaController::class,"saves"]);
Route::get("deleteFrutas/{id?}",[FrutaController::class,"delete"]);
Route::get("editFrutas/{id?}",[FrutaController::class,"edit"]);
Route::post("uploadFrutas",[FrutaController::class,"upload"]);