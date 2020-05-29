<?php

namespace App\Http\Controllers;

use App\{Person, Account, Extract, Category, AccountPay};
use Illuminate\Http\Request;

class AccountPayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $accountPays = AccountPay::all();

        return view('app.accountspays.index', compact('accountPays'));
    }

    public function create()
    {
        $categories = Category::expense()->pluck('title', 'id');
        $people = Person::pluck('name', 'id');
        $accounts = Account::pluck('title', 'id');

        return view('app.accountspays.create', compact('categories', 'people', 'accounts'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        AccountPay::create($data);

        return redirect()->back();
    }

    public function edit(AccountPay $accountpay)
    {
        $categories = Category::pluck('title', 'id');
        $people = Person::pluck('name', 'id');
        $accounts = Account::pluck('title', 'id');

        return view('app.accountspays.edit', compact('categories', 'people', 'accounts', 'accountpay'));
    }

    public function update(Request $request, AccountPay $accountpay)
    {
        $data = $request->all();
        $accountpay->update($data);
        return redirect()->back();
    }
}
