<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;


class ClientController extends Controller
{
    public function index() {
        $clients = Client::latest()->paginate(20);
        return Inertia::render('Client/Index', [
            'clients' => $clients,
        ]);
    }
    public function create()
    {
        return Inertia::render('Client/Create');
    }
    public function store(Request $request)
    {
        Client::create(
            $request->validate([
                'title' => ['required', 'max:64'],
                'description' => ['required', 'max:255'],
                'price' => ['required', 'numeric'],
            ])
        );

        return Redirect::route('clients.index');
    }
    public function show(Client $client)
    {
        return Inertia::render('Client/Show', [
            'client' => $client,
        ]);
    }
    public function update(Request $request, Client $client)
    {
        $data = Request::validate([
            'title' => ['required', 'max:90'],
            'description' => ['required'],
            'bill' => ['required'],
        ]);
        $client->update($data);


        return Redirect::route('clients.index');
    }


    public function destroy(Client $client)
    {
        $client->delete();

        return Redirect::route('clients.index');
    }
}
