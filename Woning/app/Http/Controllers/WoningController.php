<?php

namespace App\Http\Controllers;
use App\Models\Woning;

use Illuminate\Http\Request;

class WoningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $woning =  Woning::all();

        return view('woning.index', compact('woning')); // -> resources/views/stocks/index.blade.php 
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('woning.create'); // -> resources/views/woning/create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validatie van de invoervelden
        $request->validate([
            'titel' => 'required|string|max:255',
            'omschrijving' => 'required|string|max:99999',
            'oppervlakte' => 'required|numeric|min:0',
            'prijsperweek' => 'required|numeric|min:0|max:999999.99'
        ]);
    //  dd($request);
        // Creëren van een nieuwe Woning
        $woning = new Woning();
        $woning->titel = $request->get('titel');
        $woning->omschrijving = $request->get('omschrijving');
        $woning->oppervlakte = $request->get('oppervlakte');
        $woning->prijsperweek = $request->get('prijsperweek');
        $woning->save();

        // dd($woning);
    
        $woning->save();
    
        return redirect('/woning')->with('success', 'Woning succesvol opgeslagen.');
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
    public function edit($id)
    {
        $woning = woning::find($id);
        return view('woning.edit',['woning'=>$woning]);  // -> resources/views/woning/edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'titel'=>'required',
            'omschrijving'=>'required',
            'oppervlakte'=>'required',
            'prijsperweek'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
        ]); 
        $woning = Woning::find($id);
        $woning->titel =  $request->get('titel');
        $woning->omschrijving = $request->get('omschrijving');
        $woning->oppervlakte = $request->get('oppervlakte');
        $woning->prijsperweek = $request->get('prijsperweek');
        $woning->save();
    
        return redirect('/woning'); // -> resources/views/woning/index.blade.php
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $woning = Woning::find($id);
        $woning->delete(); // Easy right?
    
        return redirect('/woning');  // -> resources/views/stocks/index.blade.php
    } 
}
