<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function store(Request $request) {
        $category = new Category();
        $category->title = $request->title;

        if ($request->hasFile("picture")) {
            $picture = $request->file("picture");
            $pictureName = $picture->getClientOriginalName();
            $picture->move(public_path('storage/categories'), $pictureName);

            $category->picture = $pictureName;
        }
        $category->save();
        if ($category) {
            return redirect('categories')->with('success','Tarif güncellendi.');
        } else {
            return redirect('categories')->with('error','Bir hata oluştu.');
        }
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->title;

        if ($request->hasFile("picture")) {
            $picture = $request->file("picture");
            $pictureName = $picture->getClientOriginalName();
            $picture->move(public_path('storage/categories'), $pictureName);

            $category->picture = $pictureName;
        }
        $category->save();
        if ($category) {
            return redirect('categories')->with('success','Tarif güncellendi.');
        } else {
            return redirect('categories')->with('error','Bir hata oluştu.');
        }
    }

    public function delete($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('categories')->with('success','Tarif silindi.');
    }
}
