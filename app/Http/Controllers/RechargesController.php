<?php

namespace App\Http\Controllers;

use App\Models\Caisse;
use App\Models\Credit;
use App\Models\Retire;
use App\Helpers\Helper;
use App\Models\Recharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class RechargesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credits = Credit::all();
        $caisses = Caisse::all();
        $recharges = Recharge::all();
        $retires = Retire::all();
        $recharge = new Recharge();
        $retire = new Retire(); 
        return view('recharge.index', compact('retires',
        'caisses','credits','recharges','recharge','retire'));

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

    public function storeded(Request $request)
    {
      
     

        $caisse = Caisse::where([
            ['id', '=', 1],
        ])->first();

        if($request->input('montant') > $caisse->montant){
            return view('404');    
        } elseif($request->input('montant') <= $caisse->montant){
            $retire = new Retire();  

        $code = Helper::IDGenerator(new Retire, 'code', 6, '111');
        $retire->code = $code;
        
        // $retire->caisse_id = request('caisse_id');
        $retire->name_debiteur = request('name_debiteur');
        $retire->motif = request('motif');

        $retire->montant = request('montant'); 


    
            // $restant = $solde->montantD - $widraw->montant ;
            // // dd( $restant );
            // if( $restant >= 5000){
                $retire->save();
            $caisse->decrement('montant', $retire->montant);
            // Mail::to($solde->society->email)->send(new WidrawMarkdownMail($widraw));
            // }else{ return view('407');}
    
        }

            return Redirect::route('recharges.index')->with('message', 'Félicitation, retrait de caisse effectué.');
    }

    public function store(Request $request)
    {
        $recharge = new Recharge();

        $code = Helper::IDGenerator(new Recharge, 'code', 6, '110');
        $recharge->code = $code;
        
        $recharge->credit_id = request('credit_id');
        $recharge->caisse_id = request('caisse_id');

        $recharge->montant = request('montant'); 

        $credit = Credit::where([
            ['id', '=', $request->credit_id],
        ])->first();

        $caisse = Caisse::where([
            ['id', '=', $request->caisse_id],
        ])->first();


         if($recharge->montant >= $request->input('montant') && $caisse ) {    
                   $recharge->save();
                $credit->decrement('montant', $request->montant);
                $caisse->increment('montant', $request->montant);
            }else{
                return view('404');
            }

            return Redirect::route('recharges.index')->with('message', 'Félicitation, rechargement de caisse effectué.');
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

    private function validator(){
        return request()->validate([
            'montant' => ['required', 'string', 'max:255'],
            'name_debiteur' => ['required', 'string', 'max:255'],
            'credit_id' => 'integer',
            'caisse_id' => 'integer',
            'motif'  => ['required', 'string', 'max:255'],
               
        ]);    
    }
}
