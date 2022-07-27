<?php

namespace App\Http\Controllers;

use App\Models\Sod;
use App\Models\Sode;
use App\Models\Sold;
use App\Models\Solde;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AppliquersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $debit = 1000;

        // $applicate = Solde::select('soldes.*', 'solds.*')
        // ->join('solds', 'soldes.actif', '=', 'solds.actif')->get();
 
        // $applicate =  Solde::select('soldes.*', 'solds.*', 'sods.*', 'sodes.*')
        // ->join('solds', 'soldes.actif', '=', 'solds.actif')
        // ->join('sodes', 'soldes.actif', '=', 'sodes.actif')
        // ->join('sods', 'soldes.actif', '=', 'sods.actif')

        // ->get();


            // $applicateG = Solde::all();
            // $applicateR = Sode::all();
            // $applicateL = Sod::all();
            // $applicate = Sold::unionAll($applicateG)->unionAll($applicateR)->unionAll($applicateL)->groupBy('montantD')
            // ->get();

            
        //  $applicateR = Sode::selectRaw("
                        // montantD
                        // ");

                        // $applicateL = Sold::selectRaw("
                        // montantD
                        // ");

                        // $applicateG = Sod::selectRaw("
                        // montantD
                        // ");

                        //             $applicate = Solde::selectRaw("
                        // montantD
                        // ")->unionAll($applicateR)
                        // ->unionAll($applicateL)
                        // ->unionAll($applicateG)
                        // ->groupBy('montantD')
                        // ->get();

        // dd($applicate);

        return view('application.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               

        return Redirect::route('applications.create')->with('message', 'Félicitation, la demande de crédit particulier a été enregistrée.');
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
