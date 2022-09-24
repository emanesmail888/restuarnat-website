<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'email','dish_id', 'comment'];


    public function dish(){
        return $this->belongsTo(Dish::class);
    }

    public function user (){
        return $this->belongsTo('App\Models\User');
    }

}
