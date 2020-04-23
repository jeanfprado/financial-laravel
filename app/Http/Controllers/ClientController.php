<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function index()
    {
        $people = Person::where('parent_id', null)->get();

        return view('app.people.index', compact('categories'));
    }
}
