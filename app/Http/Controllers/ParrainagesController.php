<?php

namespace App\Http\Controllers;

use App\Models\Parrainage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ParrainagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parrains = Parrainage::all();
        return view('parrain.index', compact('parrains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parrain = new Parrainage();
   

        return view('parrain.create', compact('parrain'));
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
            'bonus' => ['required', 'string', 'max:255'],  
        ]);

        $parrain = Parrainage::create([
            'bonus' => $request->bonus,
        ]);


        return Redirect::route('parrains.edit');

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
    public function edit(Parrainage $parrain)
    {
        return view('parrain.edit', compact('parrain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parrainage $parrain)
    {
        $parrain->bonus = $request->get('bonus');
      

    
        $parrain->save();

        return redirect()->route('parrains.index')->with('message', 'Le bonus à été a bien été redéfini.');
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
