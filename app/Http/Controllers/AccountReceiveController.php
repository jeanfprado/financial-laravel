<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Person, Account, Extract, Category, AccountReceive};

class AccountReceiveController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth:web' );
    }

    public function index(){

        $extracts = AccountReceive::all();

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
        AccountReceive::create($data);

        return redirect()->back();
    }

    public function edit(AccountReceive $accountreceive)
    {
        $categories = Category::pluck('title', 'id');
        $people = Person::pluck('name', 'id');
        $accounts = Account::pluck('title', 'id');

        return 'edit View';
    }

    public function update(Request $request, AccountReceive $accountreceive)
    {
        $data = $request->all();

        $accountreceive->update($data);

        return redirect()->back();
    }
}
