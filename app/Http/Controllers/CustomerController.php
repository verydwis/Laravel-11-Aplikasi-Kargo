<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index()
    {
        $customers = Customer::all();
        // Cara debug apakah data udah terhubung dengan database
        // dd($customers);
        return view('customers.index', compact(['customers']));
    }
    function create()
    {
        return view('customers.create');
    }
    function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect('/customers')->with('success', 'Data Customer berhasil ditambahkan:)');
    }
    function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact(['customer']));
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);
        $customer = Customer::find($id);
        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect('/customers')->with('success', 'Data Customer berhasil diubah :)');
    }
}
