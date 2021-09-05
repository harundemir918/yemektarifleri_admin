<?php

namespace App\Http\Controllers\Admin;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipesController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('admin.recipes.index', compact('recipes'));
    }

    /**
     * Edit user
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('admin.recipes.edit', compact('recipe'));
    }

    /**
     * Edit user
     */
    public function update(Request $request, $id)
    {
        $user = Recipe::findOrFail($id);
        if (request()->has('avatar')) {
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        }
        return redirect('recipes')->with('success','Tarif güncellendi.');
    }
}
