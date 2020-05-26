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
        $extracts = AccountPay::all();

        return 'View Index';
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id');
        $people = Person::pluck('name', 'id');
        $accounts = Account::pluck('title', 'id');

        return 'View create';
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

        return 'edit View';
    }

    public function update(Request $request, AccountPay $accountpay)
    {
        $data = $request->all();
        $accountpay->update($data);
        return redirect()->back();
    }
}
