<?php
//All about migration
//https://laravel.com/docs/8.x/migrations#introduction
use Illuminate\Database\Migrations\Migration;
//about blueprint ref:https://laravel.com/docs/8.x/migrations#creating-columns
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


//To running,rollback or refresh our "migration"
//ref:https://laravel.com/docs/8.x/migrations#running-migrations

class CreateUsuariosTable extends Migration
//A migration class contains two methods: up and down. 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
            //The up method is used to add new tables, columns, or indexes to your database
    {
        //type of table: https://laravel.com/docs/8.x/migrations#available-column-types

        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre",255);
            $table->string("email",255);
            $table->string("password",255);
            $table->integer("edad");
            $table->timestamps();
        });


        //Another way to create table
        /*
         * DB::statement(
            "CREATE TABLE usuarios ("
            . "ip int(255) auto_increment not null, "
            . "nombre varchar(255), "
            . "email varchar(255), "
            . "password varchar(255), "
            . "edad int(255), "
            . "PRIMARY KEY(id) )"
        );
         */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
            //the down method should reverse the operations performed by the up method.
    {
        /*Schema::table('usuarios', function (Blueprint $table) {
            //
        });
        */
        Schema::drop("usuarios");
    }
}
