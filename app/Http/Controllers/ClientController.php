<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;


class ClientController extends Controller
{
    public function index() {

        return Inertia::render('Client/Index', [
            'clients' => Client::all()->where('user_id', Auth::user()->id),
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
                'firstname' => ['required', 'max:200'],
                'lastname' => ['required', 'max:200'],
                'address' => ['required', 'max:200'],
                'zipcode' => ['required', 'numeric'],
                'city' => ['required', 'max:200'],
                'phone' => ['nullable'],
                'email' => ['nullable'],
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
            'firstname' => ['required', 'max:200'],
            'lastname' => ['required', 'max:200'],
            'address' => ['required', 'max:200'],
            'zipcode' => ['required', 'numeric'],
            'city' => ['required', 'max:200'],
            'phone' => ['nullable'],
            'email' => ['nullable'],
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
