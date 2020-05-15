<?php

namespace App\Http\Controllers;

use App\{Person, Account, AccountPay, Category};
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

        return 'store';
    }

    public function edit(AccountPay $accountPay)
    {
        $categories = Category::pluck('title', 'id');
        $people = Person::pluck('name', 'id');
        $accounts = Account::pluck('title', 'id');

        return 'edit View';
    }

    public function update(Request $request)
    {
        $data = $request->all();

        return 'update';
    }
}
