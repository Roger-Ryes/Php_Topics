<?php
namespace App\Http\Controllers;

use App\Http\Controllers\PruebaController;
use Illuminate\Http\Request;//Para el formulario

class PruebaController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index($page = 1){
        $set = "Controller is really function";
        
        return view('test.index', [
            'set'=>$set,
            'page'=>$page,
        ]);
    }
    
    public function enlace(){
        return view('test.enlace');
    }
    
    //Redirection
    public function redireccion(){
        //Se va a redireccionar a la pagina enlace
        return redirect()->action([PruebaController::class, 'enlace']);
        //ó
        //return redirect()->route('enlace');//(NO FUNCTION)
    }
    
    //FORMULARIO
    public function form(){
        return view('vistas.formulario');
    }
    //se le pasa un valor del tipo reques, por ello se importa "use Request;"
    public function receive(Request $request){
        $nombre = $request->input("name");
        $correo = $request->input("email");
        return "El nombre es $nombre con correo $correo";
    }
}
