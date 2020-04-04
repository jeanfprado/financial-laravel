<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $accounts = Account::all();

        return view('app.accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('app.accounts.create');
    }

    public function store(AccountRequest $request)
    {
        $data = $request->all();

        Account::create($data);

        return redirect()->route('accounts.index');
    }

    public function edit(Account $account)
    {
        return view('app.accounts.edit', compact('account'));
    }

    public function update(Request $request, Account $account)
    {
        $data = $request->all();

        $account->update($data);

        return redirect()->route('accounts.index');
    }

    public function destroy(Account $account)
    {
        $account->delete();

        return redirect()->route('accounts.index');
    }
}