<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
//    protected $table = "recipes";
//
    protected $fillable = [
        'user_id',
        'category',
        'title',
        'ingredients',
        'recipe',
        'calories',
        'duration',
        'person',
        'carbohydrate',
        'protein',
        'fat',
        'active',
        'recommended',
        'picture',
    ];
}
