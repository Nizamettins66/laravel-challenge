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
            'oppervlakte' => 'required|numeric|min:0',
            'prijsperweek' => 'required|numeric|min:0|max:999999.99'
        ]);
    //  dd($request);
        // Creëren van een nieuwe Woning
        $woning = new Woning();
        $woning->titel = $request->get('titel');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
