<?php

namespace App\Http\Controllers;

use App\Models\Sode;
use App\Models\Solde;
use App\Models\Sod;
use App\Models\Sold;
use App\Models\Send;
use App\Helpers\Helper;
use App\Models\Receive;
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
        $solds = Sold::all();
        $sods = Sod::all();
        // $sommes = Somme::with('customer','intervenant')->get();
        // $transferts = Transfert::with('somme','omme')->get();
        $transferts = Transfert::all();
        $receives = Receive::all();
        $sends = Send::all();
        $transfert = new Transfert();

        return view('transfert.index', compact('transferts','transfert','sends','receives',
    'soldes','sodes','solds','sods'));
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
        //     'receive_id' => 'required|integer',
        //     'send_id' => 'required|integer',   
        //  ]);
 
        $transfert = new Transfert();
        $code = Helper::IDGenerator(new Transfert, 'code', 6, '60');
        $transfert->code = $code ;

        $transfert->send_id = request('send_id');

        $transfert->solde_id = request('solde_id');
        $transfert->sode_id = request('sode_id');
        $transfert->sold_id = request('sold_id');
        $transfert->sod_id = request('sod_id');

        $transfert->receive_id = request('receive_id');

        $transfert->olde_id = request('olde_id');
        $transfert->ode_id = request('ode_id');
        $transfert->old_id = request('old_id');
        $transfert->od_id = request('od_id');

        $transfert->montant = request('montant'); 
       
    //   dd($transfert->montant);

        if($transfert->montant !== 0) {  
                if($transfert->send_id == 1 && $transfert->receive_id == 1){
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

                                if($transfert->sode_id == Null && $transfert->ode_id == Null){
                                    if($transfert->sold_id == Null && $transfert->old_id == Null){
                                if($transfert->sod_id == Null && $transfert->od_id == Null)  { 
                                           $transfert->save();
                                        // dd($transfert);
                                        $solde->decrement('montantD', $request->montant);
                                        $olde->increment('montantD', $request->montant);
                                    }  else{
                                        return view('406');
                                    }
                                 }else{
                                    return view('406');
                                }
                                }  else{
                                    return view('406');
                                }

                            }   else{
                                return view('405');
                            }     
                 
                        }  else{
                                return view('404');
                            }
                        
                    
                    }
                }
                else if($transfert->send_id == 1 && $transfert->receive_id == 2){
                    if($transfert->solde_id !== Null && $transfert->ode_id !== Null){

                        $solde = Solde::where([
                            ['id', '=', $request->solde_id],
                        ])->first();

                        $ode = Sode::where([
                            ['id', '=', $request->ode_id],
                        ])->first();
                  
                        
                    
                     
                        if ($solde->montantD >= $request->input('montant') && $ode  ) 
                        {
                            if($transfert->sode_id == Null && $transfert->olde_id == Null){
                                if($transfert->sold_id == Null && $transfert->old_id == Null){
                            if($transfert->sod_id == Null && $transfert->od_id == Null)  { 
                                $transfert->save();
                                $solde->decrement('montantD', $request->montant);
                                $ode->increment('montantD', $request->montant); 
                                } else{
                                    return view('406');
                                }
                             }else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }


                                           
                        }  else{
                                return view('404');
                            }
                    
                    }
                } 
                else if($transfert->send_id == 1 && $transfert->receive_id == 3){
                    if($transfert->solde_id !== Null && $transfert->old_id !== Null){


                        $solde = Solde::where([
                            ['id', '=', $request->solde_id],
                        ])->first();

                        $old = Sold::where([
                            ['id', '=', $request->old_id],
                        ])->first();
                

                        
                        if ($solde->montantD >= $request->input('montant') && $old  ) 
                        {
                            if($transfert->sode_id == Null && $transfert->olde_id == Null){
                                if($transfert->sold_id == Null && $transfert->ode_id == Null){
                            if($transfert->sod_id == Null && $transfert->od_id == Null)  { 
                                $transfert->save();
                                $solde->decrement('montantD', $request->montant);
                                $old->increment('montantD', $request->montant); 
                                } else{
                                    return view('406');
                                }
                             }else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }

                                         
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                else if($transfert->send_id == 1 && $transfert->receive_id == 4){
                    if($transfert->solde_id !== Null && $transfert->od_id !== Null){


                        $solde = Solde::where([
                            ['id', '=', $request->solde_id],
                        ])->first();

                        $od = Sod::where([
                            ['id', '=', $request->od_id],
                        ])->first();
                

                        

                        if ($solde->montantD >= $request->input('montant') && $od  ) 
                        {

                            if($transfert->sode_id == Null && $transfert->olde_id == Null){
                                if($transfert->sold_id == Null && $transfert->ode_id == Null){
                            if($transfert->sod_id == Null && $transfert->old_id == Null)  { 
                               
                                $transfert->save();
                                $solde->decrement('montantD', $request->montant);
                                $od->increment('montantD', $request->montant); 
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }
                            
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                



                else if($transfert->send_id == 2 && $transfert->receive_id == 1){
                    if($transfert->sode_id !== Null && $transfert->olde_id !== Null){


                        $sode = Sode::where([
                            ['id', '=', $request->sode_id],
                        ])->first();

                        $olde = Solde::where([
                            ['id', '=', $request->olde_id],
                        ])->first();
                
                       
                        if ($sode->montantD >= $request->input('montant') && $olde  ) 
                        {

                            if($transfert->solde_id == Null && $transfert->od_id == Null){
                                if($transfert->sold_id == Null && $transfert->ode_id == Null){
                            if($transfert->sod_id == Null && $transfert->old_id == Null)  { 
                               
                            $transfert->save();
                            $sode->decrement('montantD', $request->montant);
                            $olde->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }

                        }  else{
                                return view('404');
                            }

                    }
                }
                
                else if($transfert->send_id == 2 && $transfert->receive_id == 2){
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

                                if($transfert->solde_id == Null && $transfert->od_id == Null){
                                    if($transfert->sold_id == Null && $transfert->olde_id == Null){
                                if($transfert->sod_id == Null && $transfert->old_id == Null)  { 
            
                                    $transfert->save();
                                    $sode->decrement('montantD', $request->montant);
                                    $ode->increment('montantD', $request->montant);
                                    } else{
                                        return view('406');
                                    }
                                 } else{
                                    return view('406');
                                }
                                }  else{
                                    return view('406');
                                }

                     
                            }   else{
                                return view('405');
                            }
                        }  else{
                                return view('404');
                            }
                    
                    }
                } 
                else if($transfert->send_id == 2 && $transfert->receive_id == 3){
                    if($transfert->sode_id !== Null && $transfert->old_id !== Null){

                        $sode = Sode::where([
                            ['id', '=', $request->sode_id],
                        ])->first();

                        $old = Sold::where([
                            ['id', '=', $request->old_id],
                        ])->first();
                
                        if ($sode->montantD >= $request->input('montant') && $old  ) 
                        {

                            if($transfert->solde_id == Null && $transfert->od_id == Null){
                                if($transfert->sold_id == Null && $transfert->olde_id == Null){
                            if($transfert->sod_id == Null && $transfert->ode_id == Null)  { 
    
                            $transfert->save();
                            $sode->decrement('montantD', $request->montant);
                            $old->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }
                          
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                else if($transfert->send_id == 2 && $transfert->receive_id == 4){
                    if($transfert->sode_id !== Null && $transfert->od_id !== Null){

                        $sode = Sode::where([
                            ['id', '=', $request->sode_id],
                        ])->first();

                        $od = Sod::where([
                            ['id', '=', $request->od_id],
                        ])->first();
                
                     
                        if ($sode->montantD >= $request->input('montant') && $od  ) 
                        {
                            if($transfert->solde_id == Null && $transfert->old_id == Null){
                                if($transfert->sold_id == Null && $transfert->olde_id == Null){
                            if($transfert->sod_id == Null && $transfert->ode_id == Null)  { 
    
                                $transfert->save();
                                $sode->decrement('montantD', $request->montant);
                                $od->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }

                           
                        }  else{
                                return view('404');
                            }
                    
                    }
                }


                
        
                else if($transfert->send_id == 3 && $transfert->receive_id == 1){
                    if($transfert->sold_id !== Null && $transfert->olde_id !== Null){


                        $sold = Sold::where([
                            ['id', '=', $request->sold_id],
                        ])->first();

                        $olde = Solde::where([
                            ['id', '=', $request->olde_id],
                        ])->first();
                
                    

                        if ($sold->montantD >= $request->input('montant') && $olde  ) 
                        {
                            
                            if($transfert->sode_id == Null && $transfert->old_id == Null){
                                if($transfert->solde_id == Null && $transfert->od_id == Null){
                            if($transfert->sod_id == Null && $transfert->ode_id == Null)  { 
    
                                $transfert->save();
                            $sold->decrement('montantD', $request->montant);
                            $olde->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }

                            
                        }  else{
                                return view('404');
                            }
                    }
                }
                else if($transfert->send_id == 3 && $transfert->receive_id == 2){
                    if($transfert->sold_id !== Null && $transfert->ode_id !== Null){


                        $sold = Sold::where([
                            ['id', '=', $request->somme_id],
                        ])->first();

                        $ode = Sode::where([
                            ['id', '=', $request->ode_id],
                        ])->first();
                
                        if ($sold->montantD >= $request->input('montant') && $ode  ) 
                        {
                            
                            if($transfert->sode_id == Null && $transfert->old_id == Null){
                                if($transfert->solde_id == Null && $transfert->od_id == Null){
                            if($transfert->sod_id == Null && $transfert->olde_id == Null)  { 
                                $transfert->save();
                                $sold->decrement('montantD', $request->montant);
                                $ode->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }

                            
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                else if($transfert->send_id == 3 && $transfert->receive_id == 3){
                    if($transfert->sold_id !== Null && $transfert->old_id !== Null){
                        $sold = Sold::where([
                            ['id', '=', $request->sold_id],
                        ])->first();

                        $old = Sold::where([
                            ['id', '=', $request->old_id],
                        ])->first();
                
                   

                        if ($sold->montantD >= $request->input('montant') && $old  ) 
                        {
                            if($sold->entreprise->code !== $old->entreprise->code){

                                if($transfert->sode_id == Null && $transfert->ode_id == Null){
                                    if($transfert->solde_id == Null && $transfert->od_id == Null){
                                if($transfert->sod_id == Null && $transfert->olde_id == Null)  { 
                                    $transfert->save();
                                    $sold->decrement('montantD', $request->montant);
                                    $old->increment('montantD', $request->montant);
                                    } else{
                                        return view('406');
                                    }
                                 } else{
                                    return view('406');
                                }
                                }  else{
                                    return view('406');
                                }

                               
                            }   else{
                                return view('405');
                            }

                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                else if($transfert->send_id == 3 && $transfert->receive_id == 4){
                    if($transfert->sold_id !== Null && $transfert->od_id !== Null){
                        $sold = Sold::where([
                            ['id', '=', $request->sold_id],
                        ])->first();

                        $od = Sod::where([
                            ['id', '=', $request->od_id],
                        ])->first();
                
                      
                        if ($sold->montantD >= $request->input('montant') && $od  ) 
                        {
                            
                            if($transfert->sode_id == Null && $transfert->ode_id == Null){
                                if($transfert->solde_id == Null && $transfert->old_id == Null){
                            if($transfert->sod_id == Null && $transfert->olde_id == Null)  { 
                                $transfert->save();
                            $sold->decrement('montantD', $request->montant);
                            $od->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }
                           
                        }  else{
                                return view('404');
                            }
                    
                    }
                }



                else if($transfert->send_id == 4 && $transfert->receive_id == 1){
                    if($transfert->sod_id !== Null && $transfert->olde_id !== Null){


                        $sod = Sod::where([
                            ['id', '=', $request->sod_id],
                        ])->first();

                        $olde = Solde::where([
                            ['id', '=', $request->olde_id],
                        ])->first();
                
                
                        if ($sod->montantD >= $request->input('montant') && $olde  ) 
                        {

                            if($transfert->sode_id == Null && $transfert->ode_id == Null){
                                if($transfert->solde_id == Null && $transfert->old_id == Null){
                            if($transfert->sold_id == Null && $transfert->od_id == Null)  { 
                               
                            $transfert->save();
                            $sod->decrement('montantD', $request->montant);
                            $olde->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }
                           
                        }  else{
                                return view('404');
                            }
                    }
                }
                else if($transfert->send_id == 4 && $transfert->receive_id == 2){
                    if($transfert->sod_id !== Null && $transfert->ode_id !== Null){


                        $sod = Sod::where([
                            ['id', '=', $request->sod_id],
                        ])->first();

                        $ode = Sode::where([
                            ['id', '=', $request->ode_id],
                        ])->first();
                
                    
                        if ($sod->montantD >= $request->input('montant') && $ode  ) 
                        {
                        
                            if($transfert->sode_id == Null && $transfert->olde_id == Null){
                                if($transfert->solde_id == Null && $transfert->old_id == Null){
                            if($transfert->sold_id == Null && $transfert->od_id == Null)  { 
                               
                                $transfert->save();
                                $sod->decrement('montantD', $request->montant);
                                $ode->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }


                          
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                else if($transfert->send_id == 4 && $transfert->receive_id == 3){
                    if($transfert->sod_id !== Null && $transfert->old_id !== Null){
                        $sod = Sod::where([
                            ['id', '=', $request->sod_id],
                        ])->first();

                        $old = Sold::where([
                            ['id', '=', $request->old_id],
                        ])->first();
                

                        if ($sod->montantD >= $request->input('montant') && $old  ) 
                        {

                            
                            if($transfert->sode_id == Null && $transfert->olde_id == Null){
                                if($transfert->solde_id == Null && $transfert->ode_id == Null){
                            if($transfert->sold_id == Null && $transfert->od_id == Null)  { 
                               
                                
                            $transfert->save();
                            $sod->decrement('montantD', $request->montant);
                            $old->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }
                            
                        }  else{
                                return view('404');
                            }
                    
                    }
                }
                else if($transfert->send_id == 4 && $transfert->receive_id == 4){
                    if($transfert->sod_id !== Null && $transfert->od_id !== Null){
                        $sod = Sod::where([
                            ['id', '=', $request->sod_id],
                        ])->first();

                        $od = Sod::where([
                            ['id', '=', $request->od_id],
                        ])->first();
                

                        if ($sod->montantD >= $request->input('montant') && $od  ) 
                        {

                            if($sod->society->code !== $od->society->code){

                                 
                            if($transfert->sode_id == Null && $transfert->olde_id == Null){
                                if($transfert->solde_id == Null && $transfert->ode_id == Null){
                            if($transfert->sold_id == Null && $transfert->old_id == Null)  { 
                               
                        
                                $transfert->save();
                                $sod->decrement('montantD', $request->montant);
                                $od->increment('montantD', $request->montant);
                                } else{
                                    return view('406');
                                }
                             } else{
                                return view('406');
                            }
                            }  else{
                                return view('406');
                            }
                            
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

            'send_id' => 'required|integer',  

            'solde_id' => 'nullable|integer',
            'sode_id' => 'nullable|integer',
            'sold_id' => 'nullable|integer',
            'sod_id' => 'nullable|integer',

            'receive_id' => 'required|integer',

            'olde_id' => 'nullable|integer',
            'ode_id' => 'nullable|integer',
            'old_id' => 'nullable|integer',
            'od_id' => 'nullable|integer',

            
               
        ]);    
    }
}
