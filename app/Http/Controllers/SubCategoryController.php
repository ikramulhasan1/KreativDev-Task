<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::all();

        return view('admin.sub-category.index', compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category_name = Category::find($request->category_id)->name;
        $subCategory = new SubCategory();
        $subCategory->fill($request->all());
        $subCategory->category = $category_name;

        $subCategory->save();
        return redirect()->route('sub-categories.index');
    }

    public function show(SubCategory $subCategory)
    {
        //
    }

    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.sub-category.edit', compact('subCategory', 'categories'));
    }

    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategory->update($request->all());
        return redirect()->route('sub-categories.index');
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete($subCategory);
        return back();
    }
}
