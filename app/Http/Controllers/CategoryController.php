<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $categories = Category::where('parent_id', null)->get();

        return view('app.categories.index', compact('categories'));
    }

    public function create()
    {
        $parents = Category::where('parent_id', null)->pluck('title', 'id');


        return view('app.categories.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Category::create($data);

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        $parents = Category::where('parent_id', null)->pluck('title', 'id');
        return view('app.categories.edit', compact('category', 'parents'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->all();

        $category->update($data);

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
       $category->delete();

       return redirect()->route('categories.index');
    }
}
