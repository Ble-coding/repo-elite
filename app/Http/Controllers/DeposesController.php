<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Sod; 
use App\Models\Depose;
use App\Models\Widraw;
use App\Helpers\Helper;
use App\Models\Society;
use Illuminate\Http\Request;
use App\Mail\DeposeMarkdownMail;
use App\Mail\WidrawMarkdownMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Events\DeposeHasRegisteredEvent;
use Illuminate\Support\Facades\Redirect;
use App\Models\Piece;
use App\Helpers\Nut;


class DeposesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposes = Sod::with('society')->get();
        $listDeposes = Depose::with('society')->get();
        $pieces = Piece::all(); 
        $widraws = Widraw::with('sod')->get();
        $societys = Society::all();
        $depose = new Depose();
        $sods = Sod::where('montantD', '!=', 0)->with('society')->get();


     
  
    return view('depose.index', compact( 
        'sods', 'listDeposes',
        'depose','pieces',
        'deposes', 'widraws',
    'societys'));  
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

        $depose = new Depose();
        $reference = Helper::Generator(new Depose, 'referenece', 8, 'REF');

   
        $depose->society_id = request('society_id');
        $depose->motif = request('motif');
        $depose->name_deposant = request('name_deposant');
        $depose->prename_deposant = request('prename_deposant');
        $depose->tel_deposant = request('tel_deposant');
        $depose->numpiece = request('numpiece');
        $depose->piece_id = request('piece_id');
        $depose->reference = $reference;         
        $depose->add_deposant = request('add_deposant');

        $montantD = request('montantD');
        $montantR = request('montantR');
        
        $depose->timbre = request('timbre');
        

        
        if ($depose->timbre == 'Oui') {
            $depose->montantD = $montantD + 100;
            $depose->montantR = $montantR;
        //    dd(  $depose->montantR);
            if($depose->montantR > $montantD){
                $depose->rendu = $depose->montantR  - $montantD  ;
                // dd( $depose->rendu);
            }
             elseif($depose->montantR < $montantD){
                // dd( $depose->rendu);
                return view('404'); 

            }
            elseif($depose->montantR =  $montantD){

                $depose->rendu = 0;      
                // dd( $depose->rendu);
            } 
            
        } else{ 
            $depose->montantD = $montantD - 100;
            $depose->montantR = $montantR;
            
            if($depose->montantR > $depose->montantD){
                $depose->rendu = $depose->montantR  - $montantD  ;
            } elseif($depose->montantR < $depose->montantD){
                return view('404'); 
            }elseif($depose->montantR =  $depose->montantD){
                $depose->rendu = 0;
            } 
        }
        
 
$depose->save();
       
        
        $solde = Sod::where([
            ['society_id', '=', $request->society_id],
        ])->with('society')->first();

    
        if ($solde) {
            $solde->increment('montantD', $request->montantD);
        } 
        else {
            
        if($depose->montantD  ){
            
                    $sodle = new Sod();    
                    

                    $sodle->society_id = request('society_id');
                
                    $sodle->motif = request('motif');
                    $sodle->add_deposant = request('add_deposant');
                    $sodle->name_deposant = request('name_deposant');
                    $sodle->prename_deposant = request('prename_deposant');
                    $sodle->tel_deposant = request('tel_deposant');
                    $sodle->numpiece = request('numpiece');
                    $sodle->piece_id = request('piece_id');
        
            
                    $sodle->reference = $reference;

                    $montantD = request('montantD');
                    $montantR = request('montantR');
            
                    $sodle->timbre = request('timbre');

                    
                    
        if ($sodle->timbre == 'Oui') {
        $sodle->montantD = $montantD + 100;
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
        $sodle->montantD = $montantD - 100;
        $sodle->montantR = $montantR;

        if($sodle->montantR > $sodle->montantD){
            $sodle->rendu = $sodle->montantR  - $montantD  ;
        } elseif($sodle->montantR < $sodle->montantD){
            return view('404'); 
        }elseif($sodle->montantR =  $sodle->montantD){
            $sodle->rendu = 0;
        } 
}
            

            $sodle->save();





            // if( $depose ){
            //     Mail::to($depose->society->email)->send(new DeposeMarkdownMail($depose));
            // }
            

}

        }

        return Redirect::route('depose.deposes.index')->with('message', 'Un dépot de '. (number_format($depose->montantD, 0, ',', ' ')).  ' FCFA à été effectué sur le compte ' .$depose->society->code . ' par ' . $depose->name_deposant . ' '. $depose->prename_deposant.'. La monnaie à rendre est de ' . (number_format( $depose->rendu , 0, ',', ' ')) . ' FCFA.');   

    }


    public function stored(Sod $depose)
    {   


        $pieces = Piece::all();
        $widraw = new Widraw();
    
        return view('depose.dimi', compact('depose','widraw','pieces'
     ));
    }

    public function storeded(Request $request , Sod $depose)
{   
   
                 $solde = Sod::where([
                    ['id', '=', request('sod_id')],
                ])->first();
                // dd($solde->montantD);
                // dd($request->input('montant'));

        if($request->input('montant') > $solde->montantD){
        return view('404');    
    } elseif($request->input('montant') <= $solde->montantD){
        $widraw = new Widraw();
        $reference = Helper::Generator(new Widraw, 'reference', 8, 'REF');
        $widraw->reference = $reference;
        $widraw->motif = request('motif');
        $widraw->add_retirant = request('add_retirant');
        $widraw->sod_id = request('sod_id');       
        $widraw->name_retirant = request('name_retirant'); 
        $widraw->prename_retirant = request('prename_retirant'); 
        $widraw->tel_retirant = request('tel_retirant'); 
        $widraw->numpiece = request('numpiece'); 
         $widraw->piece_id = request('piece_id');
        $widraw->montant = $request->input('montant');
        $widraw->save();
        $solde->decrement('montantD', $widraw->montant);
        // Mail::to($solde->society->email)->send(new WidrawMarkdownMail($widraw));
    }

    return Redirect::route('depose.deposes.index')->with('message', 'Un retrait de '.(number_format($widraw->montant, 0, ',', ' ')). ' à été effectué sur le compte '.  $widraw->sod->society->code . ' de ' . $widraw->sod->society->name .', par ' .$widraw->name_retirant. ' '.$widraw->prename_retirant. '.');
    }


    public function print(Depose $depose)
    {   

        $chiffre =  Nut::convert_number_to_words( $depose->montantD);

        // $pourcentage = ($vente->montant * $bonus ) / 100;
        // $rachat =  $pourcentage + $vente->montant;

        // $regain =  Nut::convert_number_to_words($rachat);
        return view('depose.print', compact('depose','chiffre'
        // ,'bonus','rachats','regain'
    ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Depose $depose)
    {
        return view('depose.show', compact('depose'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Depose $depose)
    {
        if (Gate::denies('edit-deposes')){
            return redirect()->route('depose.index');
        } 
        $societys = Society::all();
        return view('depose.edit',compact('depose','societys'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depose $depose)
    {
        $depose->society_id = $request->input('society_id');
        $depose->montant = $request->input('montant');

        $depose->save();
 
return Redirect::route('sod.sods.index')->with('message','Les informations du dépot de l\'society ' . $depose->society->name .' ont bien été modifiées.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depose $depose)
    {
        if (Gate::denies('delete-deposes')){
            return redirect()->route('sod.sods.index');
        } 
        $depose->delete();
        return redirect()->route('sod.sods.index')->with('message','Les informations du dépot de l\'society ' . $depose->society->name .' ont bien été supprimées.');
    }

    public function restore(Depose $depose)
    {
        if (Gate::denies('delete-deposes')){
            return redirect()->route('sod.sods.index');
        } 

        $partSupps = Depose::onlyTrashed()->first();
        $partSupps->restore();

        return redirect()->route('sod.sods.index')->with('message','Les informations du dépot de l\'entreprise ' . $depose->society->name .' ont bien été restaurées.');
    } 
    private function validator(){

        return request()->validate([       
            'timbre'=> 'in:Oui,Non',
            'motif' => ['required', 'string'],
            'numpiece' => ['nullable', 'string', 'max:255'],
            'name_deposant' => ['nullable', 'string', 'max:255'],
            'prename_deposant' => ['nullable', 'string', 'max:255'],
            'tel_deposant' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'reference' => ['required', 'string', 'max:255'],
            'name_retirant' => ['nullable', 'string', 'max:255'],
            'prename_retirant' => ['nullable', 'string', 'max:255'],
            'tel_retirant' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'society_id' => 'required|integer',
            'sod_id' => 'required|integer',
            'add_deposant' => ['required', 'string'],
            'add_retirant' => ['required', 'string'],
            'piece_id' => 'required|integer',
            'montantD' => 'required|integer',
            'montantR' => 'required|integer',
            'rendu' => 'required|integer',
        ]);    
    }
}
