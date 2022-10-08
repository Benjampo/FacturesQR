<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class BillController extends Controller
{
    public function index() {
        $bills = Bill::latest()->paginate(10);
        return Inertia::render('Bill/Index', [
            'bills' => $bills,
        ]);
    }
    public function create()
    {
        return Inertia::render('Bill/Create');
    }
    public function store(Request $request)
    {
        Bill::create(
            Request::validate([
                'title' => ['required', 'max:90'],
                'description' => ['required'],
                'price' => ['required'],
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
