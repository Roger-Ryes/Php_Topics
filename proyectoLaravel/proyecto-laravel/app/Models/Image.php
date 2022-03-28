<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
     /**
     * ref: https://laravel.com/docs/8.x/eloquent#table-names 
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "images";
    
    //Relation One To Many
    //ref: https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function likes(){
        return $this->hasMany(Like::class);
    }
    
    //Relation Many to One
    //ref: https://laravel.com/docs/8.x/eloquent-relationships#one-to-many-inverse
    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }    
}
