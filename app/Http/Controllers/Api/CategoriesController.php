<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
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
}