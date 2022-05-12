<?php

namespace App\Http\Controllers;

use App\Models\Sode; 
use App\Models\Client;
use App\Models\Remove;
use App\Models\Depositary;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\DB;

class SodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
    //     $sumMontantDepot = DB::table('sodes')->sum('montant');
    //     $depositarys = DB::table('depositaries')
    //     ->join('sodes', 'depositaries.client_id', '=', 'sodes.client_id')
    //     ->join('clients', 'depositaries.client_id', '=', 'clients.id')
    //     ->select('depositaries.*', 'sodes.montant AS total_quantity', 'clients.name',
    //      'clients.prename', 'clients.tel'
    //     , 'clients.code'
    //      , 'clients.email')
    //     ->get();
    // // $depots = DB::table('depots')->select('client_id', 'montant')->join('soldes', 'depots.client_id', '=', 'soldes.client_id')->groupBy('client_id')->get();

    // // $depots = Depot::all();
    // $clients = Client::all();
    // $depositary = new Depositary();
    // // $retraits = Retrait::all();
    // $removes = DB::table('removes')
    // ->join('sodes', 'removes.client_id', '=', 'removes.client_id')
    // ->join('clients', 'removes.client_id', '=', 'clients.id')
    // ->select('removes.*', 'sodes.montant AS total_quantity', 'clients.name',
    //  'clients.prename', 'clients.tel',
    //   'clients.code',
    //   'clients.email')
    // ->get();

    $depositarys = Depositary::with('client')->get();
    $removes = Remove::with('sode')->get();
    $partSups = Remove::onlyTrashed()->get();
    $partSupps = Depositary::onlyTrashed()->get();
     

        return view('sode.index' , compact('depositarys','removes', 
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sode $sode)
    {
        if (Gate::denies('delete-sodes')){
            return redirect()->route('depositary.depositarys.index');
        } 
        $sode->delete();
        return redirect()->route('depositary.depositarys.index');
    }
}
