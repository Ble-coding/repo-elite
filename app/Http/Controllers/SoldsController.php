<?php

namespace App\Http\Controllers;

use App\Models\Sold;
use App\Models\Deposit;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Withadral;

class SoldsController extends Controller   
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $deposits = Deposit::with('entreprise')->get();
        $withadrals = Withadral::with('sold')->get();
    $partSups = Withadral::onlyTrashed()->get();
    $partSupps = Deposit::onlyTrashed()->get();
  
     

        return view('sold.index' , compact('deposits', 'partSups', 'withadrals','partSupps'
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
