<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishList extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'wishlist';
    protected $fillable = ['user_id','dish_id'];

}
