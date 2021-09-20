<?php

namespace App\Http\Controllers\Api;

use App\Models\Recipe;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function show(User $user) : User {
        return $user;
    }

    public function recipes($user_id) {
        return Recipe::all()->where('user_id', null, $user_id)->values();
    }

    public function update_recipe(Request $request, $user_id, $recipe_id)
    {
        $recipe = Recipe::findOrFail($recipe_id);
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
            return response("Tarif başarıyla güncellendi.", 200);
        } else {
            return response("Bir hata oluştu.", 500);
        }
    }

    public function delete_recipe($user_id, $recipe_id) {
        $recipe = Recipe::where('user_id', $user_id)->where('id', $recipe_id)->delete();
        if ($recipe) {
            return response("Tarif başarıyla silindi.", 200);
        } else {
            return response("Bir hata oluştu.", 500);
        }
    }
}
