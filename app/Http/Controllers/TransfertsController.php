<?php

namespace App\Http\Controllers;

use App\Models\Sode;
use App\Models\Solde;
use App\Models\Somme;
use App\Models\Envoie;
use App\Helpers\Helper;
use App\Models\Reception;
use App\Models\Transfert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TransfertsController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $soldes = Solde::all();
        $sodes = Sode::all();
        $sommes = Somme::with('customer','intervenant')->get();
        $transferts = Transfert::with('somme','omme')->get();
        $receptions = Reception::all();
        $envoies = Envoie::all();
        $transfert = new Transfert();

        return view('transfert.index', compact('transferts','transfert','envoies','receptions',
    'soldes','sodes','sommes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        // $request->validate([
        //                    'montant' => ['required', 'string', 'max:255'],
        //     'solde_id' => 'nullable|integer',
        //     'sode_id' => 'nullable|integer',
        //     'somme_id' => 'nullable|integer',
        //     'reception_id' => 'required|integer',
        //     'envoie_id' => 'required|integer',   
        //  ]);
 
        $transfert = new Transfert();
        $code = Helper::IDGenerator(new Transfert, 'code', 6, '60');
        $transfert->code = $code ;

        $transfert->envoie_id = request('envoie_id');

        $transfert->solde_id = request('solde_id');
        $transfert->sode_id = request('sode_id');
        $transfert->somme_id = request('somme_id');

        $transfert->reception_id = request('reception_id');

        $transfert->olde_id = request('olde_id');
        $transfert->ode_id = request('ode_id');
        $transfert->omme_id = request('omme_id');


        $transfert->montant = request('montant'); 
       
    //   dd($transfert->montant);

        if($transfert->montant !== 0) {  
                if($transfert->envoie_id == 4 && $transfert->reception_id == 4){
                    if($transfert->solde_id !== Null && $transfert->olde_id !== Null){

                        $solde = Solde::where([
                            ['id', '=', $request->solde_id],
                        ])->first();

                        $olde = Solde::where([
                            ['id', '=', $request->olde_id],
                        ])->first();
                
                    
                        if ($solde->montantD >= $request->input('montant') && $olde  ) 
                        {                    
                            if($solde->particulier->code !== $olde->particulier->code){
                                $transfert->save();
                                $solde->decrement('montantD', $request->montant);
                                $olde->increment('montantD', $request->montant); 
                            }   else{
                                return view('405');
                            }     
                 
                        }  else{
                                return view('404');
                            }
                        
                    
                    }
                }
                else if($transfert->envoie_id == 4 && $transfert->reception_id == 5){
                    if($transfert->solde_id !== Null && $transfert->ode_id !== Null){

                        $solde = Solde::where([
                            ['id', '=', $request->solde_id],
                        ])->first();

                        $ode = Sode::where([
                            ['id', '=', $request->ode_id],
                        ])->first();
                
                    
                     
                        if ($solde->montantD >= $request->input('montant') && $ode  ) 
                        {
                                            $transfert->save();
                                            $solde->decrement('montantD', $request->montant);
                                            $ode->increment('montantD', $request->montant); 
                        }  else{
                                return view('404');
                            }
                    
                    }
                } 
                else if($transfert->envoie_id == 4 && $transfert->reception_id == 6){
                    if($transfert->solde_id !== Null && $transfert->omme_id !== Null){


                        $solde = Solde::where([
                            ['id', '=', $request->solde_id],
                        ])->first();

                        $omme = Somme::where([
                            ['id', '=', $request->omme_id],
                        ])->first();
                


                        if ($solde->montantD >= $request->input('montant') && $omme  ) 
                        {
                                            $transfert->save();
                                            $solde->decrement('montantD', $request->montant);
                                            $omme->increment('soustract', $request->montant); 
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                

                else if($transfert->envoie_id == 5 && $transfert->reception_id == 4){
                    if($transfert->sode_id !== Null && $transfert->olde_id !== Null){


                        $sode = Sode::where([
                            ['id', '=', $request->sode_id],
                        ])->first();

                        $olde = Solde::where([
                            ['id', '=', $request->olde_id],
                        ])->first();
                

                        if ($sode->montantD >= $request->input('montant') && $olde  ) 
                        {
                            $transfert->save();
                            $sode->decrement('montantD', $request->montant);
                            $olde->increment('montantD', $request->montant);
                        }  else{
                                return view('404');
                            }

                    }
                }
                
                else if($transfert->envoie_id == 5 && $transfert->reception_id == 5){
                    if($transfert->sode_id !== Null && $transfert->ode_id !== Null){

                        $sode = Sode::where([
                            ['id', '=', $request->sode_id],
                        ])->first();

                        $ode = Sode::where([
                            ['id', '=', $request->ode_id],
                        ])->first();
                
                        if ($sode->montantD >= $request->input('montant') && $ode  ) 
                        {
                            if($sode->client->code !== $ode->client->code){
                                $transfert->save();
                                $sode->decrement('montantD', $request->montant);
                                $ode->increment('montantD', $request->montant);
                            }   else{
                                return view('405');
                            }
                        }  else{
                                return view('404');
                            }
                    
                    }
                } 
                else if($transfert->envoie_id == 5 && $transfert->reception_id == 6){
                    if($transfert->sode_id !== Null && $transfert->omme_id !== Null){

                        $sode = Solde::where([
                            ['id', '=', $request->sode_id],
                        ])->first();

                        $omme = Somme::where([
                            ['id', '=', $request->omme_id],
                        ])->first();
                
                
                        if ($sode->montantD >= $request->input('montant') && $omme  ) 
                        {
                            $transfert->save();
                            $sode->decrement('montantD', $request->montant);
                            $omme->increment('soustract', $request->montant);
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
        
                else if($transfert->envoie_id == 6 && $transfert->reception_id == 4){
                    if($transfert->somme_id !== Null && $transfert->olde_id !== Null){


                        $somme = Somme::where([
                            ['id', '=', $request->somme_id],
                        ])->first();

                        $olde = Solde::where([
                            ['id', '=', $request->olde_id],
                        ])->first();
                
                
                        if ($somme->soustract >= $request->input('montant') && $olde  ) 
                        {
                            $transfert->save();
                            $somme->decrement('soustract', $request->montant);
                            $olde->increment('montantD', $request->montant);
                        }  else{
                                return view('404');
                            }
                    }
                }
                else if($transfert->envoie_id == 6 && $transfert->reception_id == 5){
                    if($transfert->somme_id !== Null && $transfert->ode_id !== Null){


                        $somme = Somme::where([
                            ['id', '=', $request->somme_id],
                        ])->first();

                        $ode = Sode::where([
                            ['id', '=', $request->ode_id],
                        ])->first();
                
                    
                        if ($somme->soustract >= $request->input('montant') && $ode  ) 
                        {
                            $transfert->save();
                            $somme->decrement('soustract', $request->montant);
                            $ode->increment('montantD', $request->montant);
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                else if($transfert->envoie_id == 6 && $transfert->reception_id == 6){
                    if($transfert->somme_id !== Null && $transfert->omme_id !== Null){
                        $somme = Somme::where([
                            ['id', '=', $request->somme_id],
                        ])->first();

                        $omme = Somme::where([
                            ['id', '=', $request->omme_id],
                        ])->first();
                

                        if ($somme->soustract >= $request->input('montant') && $omme  ) 
                        {
                            if($somme->intevenant->code !== $omme->intevenant->code
                            || $somme->particulier->code !== $omme->particulier->code
                            || $somme->client->code !== $omme->client->code){  
                                  
                                $transfert->save();
                                $somme->decrement('soustract', $request->montant);
                                $omme->increment('soustract', $request->montant);
                            }   else{
                                return view('405');
                            }
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
            }
        else{
           return 'Transfert invalide ';
        }

    
        return Redirect::route('transferts.index')->with('message', 'Félicitation, les informations du transfert ont bien été enregistrées.');

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

            'envoie_id' => 'required|integer',  

            'solde_id' => 'nullable|integer',
            'sode_id' => 'nullable|integer',
            'somme_id' => 'nullable|integer',

            'reception_id' => 'required|integer',

            'olde_id' => 'nullable|integer',
            'ode_id' => 'nullable|integer',
            'omme_id' => 'nullable|integer',

            
               
        ]);    
    }
}
