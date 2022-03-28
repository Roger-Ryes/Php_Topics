<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     /**
     * ref: https://laravel.com/docs/8.x/eloquent#table-names 
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "comments";
    
    //Relation many to one 
    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
    public function images(){
        return $this->belongsTo(Image::class,"image_id");
    }
}
