<?php

namespace App\Http\Controllers;

use Validator;
use App\Helpers\Nut;
use App\Models\Sold;
use App\Models\Piece;
use App\Models\Credit;
use App\Models\Deposit;
use App\Helpers\Helper; 
use App\Models\Withadral;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use App\Mail\DepositMarkdownMail;
use Illuminate\Support\Facades\DB;
use App\Mail\WithadralMarkdownMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class DepositsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index() 
    {
        
        $deposits = Sold::with('entreprise')->get();
        $listDeposits = Deposit::with('entreprise')->get();
        $pieces = Piece::all(); 
        $withadrals = Withadral::with('sold')->get();
        $entreprises = Entreprise::all();
        $deposit = new Deposit();
        $soldes = Sold::where('montantD', '!=', 0)->with('entreprise')->get();

 
    
  
    return view('deposit.index', compact(
        'soldes',
        'deposit',
        'deposits',
    'entreprises',
   'listDeposits',
    'withadrals',
    'pieces'
    ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //     $entreprises = Entreprise::all();
    //     $deposit = new Deposit();

    //     return view('deposit.create', compact('deposit','entreprises'
    // ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response  
     */

    public function store(Request $request)
    {

        $deposit = new Deposit();
        $reference = Helper::Generator(new Deposit, 'reference', 8, 'REF');

   
        $deposit->entreprise_id = request('entreprise_id');
        $deposit->motif = request('motif');
        $deposit->name_deposant = request('name_deposant');
        $deposit->prename_deposant = request('prename_deposant');
        $deposit->add_deposant = request('add_deposant');
        $deposit->tel_deposant = request('tel_deposant');
        $deposit->numpiece = request('numpiece');
        $deposit->piece_id = request('piece_id');
        $deposit->reference = $reference;
  

        $montantD = request('montantD');
        $montantR = request('montantR');
        
        $deposit->timbre = request('timbre');
        $timbre = 100;

        
        if ($deposit->timbre == 'Oui') {
            // $deposit->montantD = $montantD + $timbre;
            // if($montantD >= 65000){
                $deposit->montantD = $montantD;
            // }else{
            //     return view('404'); 
            // }
            $deposit->montantR = $montantR;
        //    dd(  $deposit->montantR);
            if($deposit->montantR > $montantD){
                $deposit->rendu = $deposit->montantR  - $montantD  ;
                // dd( $deposit->rendu);
            }
             elseif($deposit->montantR < $montantD){
                // dd( $deposit->rendu);
                return view('404'); 

            }
            elseif($deposit->montantR =  $montantD){

                $deposit->rendu = 0;      
                // dd( $deposit->rendu);
            } 
            
        } else{ 
            $deposit->montantD = $montantD - $timbre;
            $deposit->montantR = $montantR;
            
            if($deposit->montantR > $deposit->montantD){
                $deposit->rendu = $deposit->montantR  - $montantD  ;
            } elseif($deposit->montantR < $deposit->montantD){
                return view('404'); 
            }elseif($deposit->montantR =  $deposit->montantD){
                $deposit->rendu = 0;
            } 
        }
        
        $deposit->save();
            $recois = Credit::where([
                ['id', '=', 1],
            ])->first();
        
        $solde = Sold::where([
            ['entreprise_id', '=', $request->entreprise_id],
        ])->with('entreprise')->first();

    
        if ($solde) {
        
            $solde->increment('montantD',  $deposit->montantD);        
            $recois->increment('montant',  $timbre );
        } 
        else {
            
        if($deposit->montantD  ){
            
                    $sodle = new Sold();    
                    
                
                    $sodle->motif = request('motif');
                    $sodle->name_deposant = request('name_deposant');
                    $sodle->prename_deposant = request('prename_deposant');
                    $sodle->add_deposant = request('add_deposant');
                    $sodle->tel_deposant = request('tel_deposant');
                    $sodle->numpiece = request('numpiece');
                    $sodle->piece_id = request('piece_id');
        
            
                    $sodle->reference = $reference;

                    $montantD = request('montantD');
                    $montantR = request('montantR');
            
                    $sodle->timbre = request('timbre');
                    $sodle->entreprise_id = request('entreprise_id');

                       $formesJ = Entreprise::where([
                         ['id', '=', $sodle->entreprise_id],
                        ])->first();

                        if($formesJ->forme_id == 4){
                            $diminuer = 35000;
                        }else{
                            $diminuer = 60000;
                        }
                    

                        // dd($formesJ->forme_id);
                    
                    
        if ($sodle->timbre == 'Oui') {
        // $sodle->montantD = $montantD + 100;

        if( $montantD > 65000 || $montantD = 65000 ){
                     $cred = $montantD - $diminuer;
                $sodle->montantD = $cred;
            }else{
                return view('404'); 
            }
            
   


        $sodle->montantR = $montantR;
        //    dd(  $sodle->montantR);
        if($sodle->montantR > $montantD){
            $sodle->rendu = $sodle->montantR  - $montantD  ;
            // dd( $sodle->rendu);
        }
        elseif($sodle->montantR < $montantD){
            // dd( $sodle->rendu);
            return view('404'); 

        }
        elseif($sodle->montantR =  $montantD){

            $sodle->rendu = 0;      
            // dd( $sodle->rendu);
        } 

        } else{ 
        // $sodle->montantD = $montantD - 100;

        
            // $cred = ($montantD - $timbre) - $diminuer;
            // $sodle->montantD = $cred;

            if( $montantD > 65000 || $montantD = 65000 ){
                $cred = ($montantD - $timbre) - $diminuer;
                $sodle->montantD = $cred;
          }else{
              return view('404'); 
          }


            $sodle->montantR = $montantR;

            if($sodle->montantR > $sodle->montantD){
                $sodle->rendu = $sodle->montantR  - $montantD  ;
            } elseif($sodle->montantR < $sodle->montantD){
                return view('404'); 
            }elseif($sodle->montantR =  $sodle->montantD){
                $sodle->rendu = 0;
            } 
        }
        // $credit = new Credit();

        // $recois = Credit::where([
        //     ['id', '=', 1],
        // ])->first();

       
        $recois->increment('montant',  ($diminuer + $timbre));
        // $credit->save();

            $sodle->save();





            // if( $deposit ){
            //     Mail::to($deposit->entreprise->email)->send(new DepositMarkdownMail($deposit));
            // }
            

}

        }

        return Redirect::route('deposit.deposits.index')->with('message', 'Un dépot de '. (number_format($deposit->montantD, 0, ',', ' ')).  ' FCFA à été effectué sur le compte ' .$deposit->entreprise->code . ' par ' . $deposit->name_deposant . ' '. $deposit->prename_deposant.'. La monnaie à rendre est de ' . (number_format( $deposit->rendu , 0, ',', ' ')) . ' FCFA.');   

    }


    public function stored(Sold $deposit)
    {   


        $pieces = Piece::all();
        $withadral = new Withadral();
    
        return view('deposit.dimi', compact('deposit','withadral','pieces'
     ));
    }

    public function storeded(Request $request , Sold $deposit)
{   
   
                 $sold = Sold::where([
                    ['id', '=', request('sold_id')],
                ])->first();
                // dd($solde->id);

        if($request->input('montant') > $sold->montantD){
        return view('404');    
    } elseif($request->input('montant') <= $sold->montantD){
        $withadral = new Withadral();
        $reference = Helper::Generator(new Withadral, 'reference', 8, 'REF');
        $withadral->reference = $reference;
        $withadral->sold_id = request('sold_id');  
        $withadral->motif = request('motif');     
        $withadral->name_retirant = request('name_retirant'); 
        $withadral->add_retirant = request('add_retirant');
        $withadral->prename_retirant = request('prename_retirant'); 
        $withadral->tel_retirant = request('tel_retirant'); 
        $withadral->numpiece = request('numpiece'); 
    $withadral->piece_id = request('piece_id');
        $withadral->montant = $request->input('montant');
        
        

        $restant = $sold->montantD - $withadral->montant ;
        // dd( $restant );
        if( $restant >= 5000){
            $withadral->save();
            $sold->decrement('montantD', $withadral->montant);
            // Mail::to($sold->entreprise->email)->send(new WithadralMarkdownMail($withadral));
        }else{ return view('407');}
    }

    return Redirect::route('deposit.deposits.index')->with('message', 'Un retrait de '.(number_format($withadral->montant, 0, ',', ' ')). ' à été effectué sur le compte '.  $withadral->sold->entreprise->code . ' de ' . $withadral->sold->entreprise->name .', par ' .$withadral->name_retirant. ' '.$withadral->prename_retirant. '.');
    }
    /**  
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Deposit $deposit)
    {
        return view('deposit.show', compact('deposit'));
    }


    public function print(Deposit $deposit)
    {   

       
        $reference = Helper::Generator(new Deposit, 'reference', 8, 'REF');

        if ($deposit->timbre == "Oui") {
            $v = $deposit->montantD + 100;
            $chiffre =  Nut::convert_number_to_words( $v);
        }     
           else  {
            $chiffre =  Nut::convert_number_to_words( $deposit->montantD);
    
           }
        

        // $pourcentage = ($vente->montant * $bonus ) / 100;
        // $rachat =  $pourcentage + $vente->montant;

        // $regain =  Nut::convert_number_to_words($rachat);
        return view('deposit.print', compact('deposit','chiffre'
        // ,'bonus','rachats'
        ,'reference'
    ));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposit $deposit)
    {
        if (Gate::denies('edit-deposits')){
            return redirect()->route('deposit.index');
        } 
        $entreprises = Entreprise::all();
        return view('deposit.edit',compact('deposit','entreprises'));
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Deposit $deposit)
    {
        $deposit->entreprise_id = $request->input('entreprise_id');
        $deposit->montant = $request->input('montant');

        $deposit->save();


return Redirect::route('sold.solds.index')->with('message','Les informations du dépot de l\'entreprise ' . $deposit->entreprise->name .' ont bien été modifiées.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposit $deposit)
    {
        if (Gate::denies('delete-deposits'))
        {
            return redirect()->route('sold.solds.index');
        } 
        $deposit->delete();

        return redirect()->route('sold.solds.index')->with('message','Les informations du dépot de l\'entreprise ' . $deposit->entreprise->name .' ont bien été supprimées.');
    }

    public function restore(Deposit $deposit)
    {
        if (Gate::denies('delete-deposits')){
            return redirect()->route('sold.solds.index');
        } 

        $partSupps = Deposit::onlyTrashed()->first();
        $partSupps->restore();

        return redirect()->route('sold.solds.index')->with('message','Les informations du dépot de l\'entreprise ' . $deposit->entreprise->name .' ont bien été restaurées.');
    } 

    private function validator(){

        return request()->validate([       
            'timbre'=> 'in:Oui,Non',
            'motif' => ['required', 'string'],
            'add_deposant' => ['required', 'string'],
            'numpiece' => ['nullable', 'string', 'max:255'],
            'name_deposant' => ['nullable', 'string', 'max:255'],
            'prename_deposant' => ['nullable', 'string', 'max:255'],
            'tel_deposant' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'reference' => ['required', 'string', 'max:255'],
            'name_retirant' => ['nullable', 'string', 'max:255'],
            'prename_retirant' => ['nullable', 'string', 'max:255'],
            'tel_retirant' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'particulier_id' => 'required|integer',
            'add_retirant' => ['required', 'string'],
            'sold_id' => 'required|integer',
            'piece_id' => 'required|integer',
            'montantD' => 'required|integer',
            'montantR' => 'required|integer',
            'rendu' => 'required|integer',
        ]);    
    }
}
