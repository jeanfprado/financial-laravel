<?php

namespace App\Http\Controllers;

use App\{Account, TransferAccounts};
use Illuminate\Http\Request;

class TransferAccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $transferAccounts = TransferAccounts::All();
        $accounts = Account::all();

        return view('app.transferAccounts.index', compact('transferAccounts'));
    }
}
