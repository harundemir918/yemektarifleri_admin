<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index() {
        return Category::all();
    }

    public function last_added() {
        return Category::latest()->take(5)->get();
    }

    public function recipes($category_id) {
        return Recipe::all()->where('category', null, $category_id)->values();
    }
}
