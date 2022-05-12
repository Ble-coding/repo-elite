<?php

namespace App\Http\Controllers;

use App\Models\Depose;
use App\Models\Society;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Widraw;
  
class SodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $sumMontantdepose = DB::table('sods')->sum('montant');
    //     $deposes = DB::table('deposes')
    //     ->join('sods', 'deposes.society_id', '=', 'sods.society_id')
    //     ->join('societies', 'deposes.society_id', '=', 'societies.id')
    //     ->select('deposes.*', 'sods.montant AS total_quantity', 'societies.name',
    //     //  'societies.prename',
    //       'societies.tel'
    //     , 'societies.code'
    //      , 'societies.email')
    //     ->get();
    // // $deposess = DB::table('deposess')->select('entreprise_id', 'montant')->join('sods', 'deposess.entreprise_id', '=', 'sods.entreprise_id')->groupBy('entreprise_id')->get();

    // // $deposess = deposes::all();
    // $societys = Society::all();
    // $depose = new Depose();
    // // $widraws = Retrait::all();
    // $widraws = DB::table('widraws')
    // ->join('sods', 'widraws.society_id', '=', 'sods.society_id')
    // ->join('societies', 'widraws.society_id', '=', 'societies.id')
    // ->select('widraws.*', 'sods.montant AS total_quantity', 'societies.name',
    // //  'societies.prename', 
    //  'societies.tel',
    //   'societies.code',
    //   'societies.email')
    // ->get();

    $deposes = Depose::with('society')->get();
    $widraws = Widraw::with('sod')->get();
$partSups = Widraw::onlyTrashed()->get();
$partSupps = Depose::onlyTrashed()->get();

     

        return view('sod.index' , compact('deposes','widraws', 'partSups', 'partSupps'
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
    public function destroy($id)
    {
        //
    }
}
