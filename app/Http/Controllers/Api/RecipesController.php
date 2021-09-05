<?php

namespace App\Http\Controllers\Api;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipesController extends Controller
{
    public function index() {
        return Recipe::all();
    }

    public function show(Recipe $recipe) : Recipe {
        return $recipe;
    }

    public function recommended() {
        return Recipe::all()->where('recommended', null, 1);
    }

    public function last_added() {
        return Recipe::latest()->take(5)->get();
    }
}
