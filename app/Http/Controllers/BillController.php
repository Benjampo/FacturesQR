<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class BillController extends Controller
{
    public function index() {
        $bills = Bill::all()->where('user_id', Auth::user()->id);
        $bills->map(function ($bill) {
            return $bill->client;
        });
        return Inertia::render('Bill/Index', [
            'bills' => $bills,
        ]);
    }
    public function create()
    {
        return Inertia::render('Bill/Create', [
            'clients' => Client::all()->where('user_id', Auth::user()->id),
        ]);
    }
    public function store(Request $request)
    {
        Bill::create(
            $request->validate([
                'title' => ['required', 'max:64'],
                'description' => ['required', 'max:255'],
                'price' => ['required', 'numeric'],
                'client_id' => ['required', 'numeric'],
            ])

        );

        return Redirect::route('bills.index');
    }
    public function show(Bill $bill)
    {
        return Inertia::render('Bill/Show', [
            'bill' => $bill,
        ]);
    }
    public function update(Request $request, Bill $bill)
    {
        $data = Request::validate([
            'title' => ['required', 'max:90'],
            'description' => ['required'],
            'bill' => ['required'],
        ]);
        $bill->update($data);


        return Redirect::route('bills.index');
    }


    public function destroy(Bill $bill)
    {
        $bill->delete();

        return Redirect::route('bills.index');
    }


}
