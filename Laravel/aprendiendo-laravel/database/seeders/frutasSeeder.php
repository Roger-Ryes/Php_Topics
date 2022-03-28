<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//dbs
use Illuminate\Support\Facades\DB;

class frutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         CREATE TABLE frutas (
            id int(255) auto_increment not null,
            nombre varchar(255),
            descripcion TEXT,
            precio   float,
            fecha    date,
            CONSTRAINT pk_frutas PRIMARY KEY(id)
          )
        */
        for($i=0;$i<10;$i++){
            DB::table('frutas')->insert(array(
            "nombre"=> "Fruta $i",
            "descripcion"=>"Es una fruta $i muy buena",
            "precio"=>$i,
            "fecha"=> date("Y-m-d")
        ));
            
        }
        
        //Ejecutar con php artisan db:seed --class=frutasSeeder
        //ref: https://laravel.com/docs/8.x/seeding#running-seeders
        $this->command->info("Comando seed frutas ejecutado");
    }
}
