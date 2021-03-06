<?php

namespace App\Http\Controllers\Api;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RecipesController extends Controller
{
    public function index() {
        return Recipe::where("active", 1)->get();
    }

    public function show(Recipe $recipe) : Recipe {
        return $recipe;
    }

    public function recommended() {
        return Recipe::where("active", 1)->where("recommended", 1)->take(5)->get();
    }

    public function last_added() {
        return Recipe::where("active", 1)->latest()->take(5)->get();
    }

    public function store(Request $request) {
        $recipe = new Recipe();
        $recipe->user_id = $request->user_id;
        $recipe->category = $request->category;
        $recipe->title = $request->title;
        $recipe->ingredients = $request->ingredients;
        $recipe->recipe = $request->recipe;
        $recipe->calories = $request->calories;
        $recipe->duration = $request->duration;
        $recipe->person = $request->person;
        $recipe->carbohydrate = $request->carbohydrate;
        $recipe->protein = $request->protein;
        $recipe->fat = $request->fat;

        if ($request->hasFile("picture")) {
            $picture = $request->file("picture");
            $pictureName = $picture->getClientOriginalName();
            $picture->move(public_path('storage/recipes'), $pictureName);

            $recipe->picture = $pictureName;
        }
        $recipe->save();
        if ($recipe) {
            return response("Tarif başarıyla oluşturuldu.", 201);
        } else {
            return response("Bir hata oluştu.", 500);
        }
    }
}
