<?php

namespace App\Http\Controllers;

use App\{Person, Account, Extract, Category};
use Illuminate\Http\Request;

class ExtractController extends Controller
{

    public function __construct()
    {
        $this->middleware( 'auth:web' );
    }

    public function index(){

        $extracts = Extract::all(); 

        return 'View Index';
    }

    public function create(){
        $categories = Category::pluck( 'title','id' );
        $people = Person::pluck( 'name','id' );
        $accounts = Account::pluck( 'title','id' );

        return 'View create';
    }

    public function store( Request $request ){       
        $data = $request->all();
        Extract::create( $data );

        return 'store';
    }

    public function edit( Extract $extract ){
        $categories = Category::pluck( 'title','id' );
        $people = Person::pluck( 'name','id' );
        $accounts = Account::pluck( 'title','id' );
        
        return 'edit View';
    }

    public function update( Request $request, Extract $extract ){
        $data = $request-all();
        $extract->update($data);

        return 'update';
    }

    public function destroy( Extract $extract )
    {
       $extract->delete();

       return 'destroy';
    }
}
