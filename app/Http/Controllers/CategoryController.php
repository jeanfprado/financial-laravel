<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $categories = Category::where('user_id', Auth::id())->get();

        return view('app.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('app.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['user_id'] = Auth::id();

        Category::create($data);

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('app.categories.edit', compact('category'));
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
