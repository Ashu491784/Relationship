<?php

namespace App\Http\Controllers;
use App\Models\customers;

use Illuminate\Http\Request;

class customerControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = customers::all(); 
        return view("customer.index", compact(var_name:'customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("customer.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            
            'customerName',
            'Contact'
        ],
        );
        

        customers::create($request->all()); 
        return redirect()->route(route:'customer.index')->with('success', 'customer Addedd success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = customers::findOrFail($id); 
        return view('customer.edit', compact(var_name:'customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([ 
            'id'=>'required',
            'customerName',
            'Contact'
        ],
        );

        $customer = customers::findOrFail($id);
        $customer->update($request->all());
        return redirect()->route(route:'customer.index')->with('success','customer updated successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = customers::findOrFail($id);
        $customer->delete();
        return redirect()->route(route:'customer.index')->with('success','customer delete success');
    }
}
