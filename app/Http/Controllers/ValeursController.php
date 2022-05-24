<?php

namespace App\Http\Controllers;

use App\Models\Valeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ValeursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valeurs = Valeur::all();
        return view('valeur.index', compact('valeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valeur = new Valeur();
   

        return view('valeur.create', compact('valeur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([     
            'pourcentage' => ['required', 'string', 'max:255'],  
            'typing' => ['required', 'string', 'max:255'], 
        ]);

        $valeur = Valeur::create([
            'pourcentage' => $request->pourcentage,
        ]);


        return Redirect::route('valeurs.edit');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Valeur $valeur)
    {
        return view('valeur.edit', compact('valeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Valeur $valeur)
    {
        $valeur->pourcentage = $request->get('pourcentage');
      

    
        $valeur->save();

        return redirect()->route('valeurs.index')->with('message', 'La valeur de rachat à été a bien été redéfini.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
