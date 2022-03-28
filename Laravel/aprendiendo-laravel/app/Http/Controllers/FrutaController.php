<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FrutaController;
//Call DB
use Illuminate\Support\Facades\DB;
//REQUES FOR POST


class FrutaController extends Controller{
// ref: https://laravel.com/docs/8.x/queries#retrieving-all-rows-from-a-table
    public function index(){
        $frutas = DB::table("frutas")->orderBy("precio","asc")->get();
        //orderBy ref:https://laravel.com/docs/8.x/queries#ordering-grouping-limit-and-offset
        
        return view('fruta.index', ["frutas"=>$frutas]);
    }
    
    
 //ref: https://laravel.com/docs/8.x/queries#retrieving-a-single-row-column-from-a-table
    public function detail($id=1){
        // ó $detail = DB::table('frutas')->where('id',"=",$id)->first();//or ->get();
        $detail = DB::table('frutas')->where('id',$id)->first();//or ->get();
        return view('fruta.detail',["detail"=>$detail]);
    }
    
    //Insertar valores a DB
    public function create(){
        return view("fruta.create");
    }
    
    public function saves(Request $request) {
        if(isset($request)){
             DB::table('frutas')->insert(array(              
                "nombre"=> $request->input('name'),
                "descripcion"=>$request->input('desc'),
                "precio"=>$request->input('precio'),
                "fecha"=> date("Y-m-d")
            ));
        }
        return redirect()->action([FrutaController::class, 'create'])
                ->with("status","Fruta creada correctamente");
    }    
    
    public function delete($id=1){
        if(isset($id)){
            DB::table("frutas")->where('id',$id)->delete();
        }        
        return redirect()->action([FrutaController::class, 'index'])
                ->with("status","fruta borrada correctamente");
    }
    
    public function edit($id = 1){
        //SACAR DATOS DE BD
        if(isset($id)){
            $fruta = DB::table('frutas')->where('id',$id)->first();
        } 
       //PASAR A VISTA 
        return view("fruta.create",[
            "fruta"=>$fruta
        ]);        
    }
    
    public function upload(Request $request){
        DB::table('frutas')->where('id',$request->input('id'))->update([
            'nombre'=>$request->input('name'),
            'precio'=>$request->input('precio'),
            'descripcion'=>$request->input('desc')
        ]);
        return redirect()->action([FrutaController::class,'index'])
                ->with("status","Fruta actualizada");
    }
}
