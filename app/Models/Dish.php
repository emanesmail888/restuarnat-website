<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $table='dishes';
    protected $primaryKey='id';
    protected $fillable=['dish_name','dish_code','dish_price','image','dish_info','spl_price','meal_id'];


    public function meals(){
        return $this->belongsToMany('Meal','meals');
    }

    public function meal(){
        return $this->belongsTo(Meal::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


 
}
