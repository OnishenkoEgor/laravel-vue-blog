<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category/index', ['categories' => Category::all()]);
    }

    public function create()
    {
        return view('category/create');
    }

    public function store()
    {
        $new_category = request()->validate([
            'title' => 'string'
        ]);
        Category::create($new_category);

        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('category/show', ['category' => $category, 'posts' => $category->posts]);
    }
}
