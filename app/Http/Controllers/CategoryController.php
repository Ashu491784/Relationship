<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::all(); 
        return view("category.index", compact(var_name:'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            
            'CategoryName'
        ],
        );
        

        category::create($request->all()); 
        return redirect()->route(route:'category.index')->with('success', 'category Addedd success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = category::findOrFail($id); //data tika set wenna field walata
        return view('category.edit', compact(var_name:'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([ 
            'isbn'=>'required',
            'CategoryName'
        ],
        );

        $category = category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route(route:'category.index')->with('success','category updated successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect()->route(route:'category.index')->with('success','category delete success');
    }
}
