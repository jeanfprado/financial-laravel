<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Person, Account, Extract, Category, AccountReceive};

class AccountReceiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $accountReceives = AccountReceive::all();

        return view('app.accountsreceives.index', compact('accountReceives'));
    }

    public function create()
    {
        $categories = Category::receive()->pluck('title', 'id');
        $people = Person::pluck('name', 'id');
        $accounts = Account::pluck('title', 'id');

        return view('app.accountsreceives.create', compact('categories', 'people', 'accounts'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        AccountReceive::create($data);

        return redirect()->back();
    }

    public function edit(AccountReceive $accountreceife)
    {
        $categories = Category::pluck('title', 'id');
        $people = Person::pluck('name', 'id');
        $accounts = Account::pluck('title', 'id');

        return view('app.accountsreceives.edit', compact('categories', 'people', 'accounts', 'accountreceife'));
    }

    public function update(Request $request, AccountReceive $accountreceife)
    {
        $data = $request->all();
        $accountreceife->update($data);
        return redirect()->back();
    }
}
