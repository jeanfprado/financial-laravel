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
        $client = Client::all();

        return $client;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Client::create($data);

        return redirect()->route('clients.index');
    }

    public function edit(Client $client)
    {
        return $client;
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
