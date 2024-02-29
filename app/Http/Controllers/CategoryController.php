<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('index');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        // dd($category);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        $category->delete($category);
        return back();
    }
}
