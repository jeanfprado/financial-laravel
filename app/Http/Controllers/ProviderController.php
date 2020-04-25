<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $provider = Provider::all();

        return $provider;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Provider::create($data);

        return redirect()->route('providers.index');
    }

    public function edit(Provider $provider)
    {
        return view('app.providers.edit', compact('provider'));
    }

    public function update(Request $request, Provider $provider)
    {
        $data = $request->all();

        $provider->update($data);

        return redirect()->route('providers.index');
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();

        return redirect()->route('providers.index');
    }
}
