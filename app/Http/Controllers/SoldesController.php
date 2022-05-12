<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use App\Models\Retrait;
use App\Models\Solde;  
use App\Models\Particulier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class SoldesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        // $sumMontantDepot = DB::table('soldes')->sum('montant');

        // $depots = DB::table('depots')
        // ->join('soldes', 'depots.particulier_id', '=', 'soldes.particulier_id')
        // ->join('particuliers', 'depots.particulier_id', '=', 'particuliers.id')
        // ->select('depots.*', 'soldes.montant AS total_quantity', 'particuliers.name',
        //  'particuliers.prename', 'particuliers.tel'
        // , 'particuliers.code'
        //  , 'particuliers.email')
        // ->get();
    
    // $depot = new Depot();
    // $retraits = Retrait::all();
    // $retraits = DB::table('retraits')
    // ->join('soldes', 'retraits.particulier_id', '=', 'soldes.particulier_id')
    // ->join('particuliers', 'retraits.particulier_id', '=', 'particuliers.id')
    // ->select('retraits.*', 'soldes.montant AS total_quantity', 'particuliers.name',
    //  'particuliers.prename', 'particuliers.tel',
    //   'particuliers.code',
    //   'particuliers.email')
    // ->get();
     

    $depots = Depot::with('particulier')->get();
    $retraits = Retrait::with('solde')->get();
    $partSups = Retrait::onlyTrashed()->get();
    $partSupps = Depot::onlyTrashed()->get();
  
  

        return view('solde.index' , compact('depots', 'retraits',
        'partSups','partSupps'
    ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Solde $solde)
    {
        return view('solde/show', compact('solde'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Solde $solde)
    {
       
        if (Gate::denies('edit-soldes')){
            return redirect()->route('depot.depots.index');
        } 
        $particuliers = Particulier::all();
        return view('solde/edit',compact('solde','particuliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solde $solde)
    {

        $solde->particulier_id = $request->input('particulier_id');
        $solde->montant = $request->input('montant');

        $solde->save();

        return Redirect::route('depot.depots.index')->with('message', 'Le solde du client ' . $solde->particulier->name . ' '. $solde->particulier->prename.' a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solde $solde)
    {
        if (Gate::denies('delete-soldes')){
            return redirect()->route('depot.depots.index');
        } 
        $solde->delete();
        return redirect()->route('depot.depots.index')->with('message', 'Les infos du dépot du client ont été supprimées');
    }
}
