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
        $recipe = Recipe::findOrFail($id);
        $input = $request->only('active', 'recommended');
        $input['active'] = $request->get('active') == 'on' ? 1 : 0;
        $input['recommended'] = $input['active'] == 0 ? 0 : ($request->get('recommended') == 'on' ? 1 : 0);
        $recipe->fill($input)->save();
        return redirect('recipes')->with('success','Tarif güncellendi.');
    }

    public function delete($id) {
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();
        return redirect('recipes')->with('success','Tarif silindi.');
    }
}
