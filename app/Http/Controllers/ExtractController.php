<?php

namespace App\Http\Controllers;

use App\{Person, Account, Extract, Category};
use Illuminate\Http\Request;

class ExtractController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $extracts = Extract::all();
        $accounts = Account::all();
        $people = Person::pluck('name', 'id');

        return view('app.extracts.index', compact('extracts', 'accounts', 'people'));
    }

    public function destroy(Extract $extract)
    {
        $extract->delete();

        return redirect()->back();
    }
}
