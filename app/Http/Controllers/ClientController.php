<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $clients = Client::all();

        return view('app.clients.index',compact('clients'));
    }

    public function create()
    {
        return view('app.clients.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Client::create($data);

        return redirect()->route('clients.index');
    }

    public function edit(Client $client)
    {
        return view('app.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $data = $request->all();

        $client->update($data);

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index');
    }
}
