<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Person, Account, Extract, Category, AccountRecieve};

class AccountRecieveController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth:web' );
    }

    public function index(){

        $extracts = AccountRecieve::all(); 

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
        Recieve::create($data);

        return 'store';
    }

    public function edit(AccountRecieve $recieve)
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

    public function destroy( AccountRecieve $recieve )
    {
       $recieve->delete();

       return 'destroy';
    }

}
