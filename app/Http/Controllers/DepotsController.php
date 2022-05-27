<?php

namespace App\Http\Controllers;

use App\Helpers\Nut;
use App\Models\Depot;
use App\Models\Piece;
use App\Models\Solde;
use App\Models\Credit;
use App\Helpers\Helper;
use App\Models\Retrait;
use App\Models\Withadral;
use App\Models\Particulier;
use Illuminate\Http\Request;
use App\Mail\DepotMarkdownMail;
use App\Mail\RetraitMarkdownMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class DepotsController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $soldes = DB::table('soldes')
        //     ->join('particuliers', 'soldes.particulier_id', '=', 'particuliers.id')
        //     ->select('soldes.*', 'soldes.montant AS total_quantity', 'particuliers.name',
        //      'particuliers.prename', 'particuliers.tel'
        //      , 'particuliers.code' 
        //      , 'particuliers.email')
        //     ->get();
        // $depots = DB::table('depots')->select('particulier_id', 'montant')->join('soldes', 'depots.particulier_id', '=', 'soldes.particulier_id')->groupBy('particulier_id')->get();

        $depots = Solde::with('particulier')->get();
        $listDepots = Depot::with('particulier')->get();
        $pieces = Piece::all(); 
        $retraits = Retrait::with('solde')->get();
        $particuliers = Particulier::all();
        $depot = new Depot();
        $soldes = Solde::where('montantD', '!=', 0)->with('particulier')->get();
           
        // $depots = Depot::distinct()->select('particulier_id')
        // ->groupBy('particulier_id')->get(); 

       
      
        return view('depot.index', compact(
            'soldes',
            'depot', 'listDepots',
            'retraits',
            'pieces',
            'depots',
        'particuliers'));
    }


 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    //       $particuliers = Particulier::all();
    //       $depot = new Depot();
  
    //       return view('depot.create', compact('depot','particuliers'
    //   ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {

        $depot = new Depot();
        $reference = Helper::Generator(new Depot, 'reference', 8, 'REF');
        // $code = Helper::IDGenerator(new Vente, 'code', 6, '40');
        // $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
   
        $depot->particulier_id = request('particulier_id');
        $depot->motif = request('motif');
        $depot->add_deposant = request('add_deposant');
        $depot->name_deposant = request('name_deposant');
        $depot->prename_deposant = request('prename_deposant');
        $depot->tel_deposant = request('tel_deposant');
        $depot->numpiece = request('numpiece');
        $depot->add_deposant = request('add_deposant');
        $depot->piece_id = request('piece_id');
        $depot->reference = $reference;
  

        $montantD = request('montantD');
        $montantR = request('montantR');
        
        $depot->timbre = request('timbre');
        
        $timbre = 100;

        
        if ($depot->timbre == 'Oui') {
            // $depot->montantD = $montantD + $timbre ;
            $depot->montantD = $montantD;
            
            $depot->montantR = $montantR;
        //    dd(  $depot->montantR);
            if($depot->montantR > $montantD){
                $depot->rendu = $depot->montantR  - $montantD  ;
                // dd( $depot->rendu);
            }
             elseif($depot->montantR < $montantD){
                // dd( $depot->rendu);
                return view('404'); 

            }
            elseif($depot->montantR =  $montantD){

                $depot->rendu = 0;      
                // dd( $depot->rendu);
            } 
            
        } else{ 
            $depot->montantD = $montantD - $timbre ;
            $depot->montantR = $montantR;
            
            if($depot->montantR > $depot->montantD){
                $depot->rendu = $depot->montantR  - $montantD  ;
            } elseif($depot->montantR < $depot->montantD){
                return view('404'); 
            }elseif($depot->montantR =  $depot->montantD){
                $depot->rendu = 0;
            } 
        }
        
 
        $depot->save();
       
        
        $solde = Solde::where([
            ['particulier_id', '=', $request->particulier_id],
        ])->with('particulier')->first();

        $recois = Credit::where([
            ['id', '=', 1],
        ])->first();

       
    
        if ($solde) {
            $solde->increment('montantD', $request->montantD);
            $recois->increment('montant',  $timbre );

        } 
        else {
            
        if($depot->montantD  ){
            
                    $sodle = new Solde();    
                    

                    $sodle->particulier_id = request('particulier_id');
                
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

                    $diminuer = 35000;
                    
                    
        if ($sodle->timbre == 'Oui') {
        // $sodle->montantD = $montantD + 100;

     

        $cred = $montantD - $diminuer;
        $sodle->montantD = $cred;

        // $ajoutCompteCredit = $diminuer 

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

        $cred = ($montantD - $timbre) - $diminuer;
        $sodle->montantD = $cred;

        $sodle->montantR = $montantR;

        if($sodle->montantR > $sodle->montantD){
            $sodle->rendu = $sodle->montantR  - $montantD;
        } elseif($sodle->montantR < $sodle->montantD){
            return view('404'); 
        }elseif($sodle->montantR =  $sodle->montantD){
            $sodle->rendu = 0;
        }   

         }
 
        //  $credit = new Credit();

        // $recois = Credit::where([
        //     ['id', '=', 1],
        // ])->first();

       
        $recois->increment('montant',  ($diminuer + $timbre));
        //  $credit->save();
            
      
        
            $sodle->save();





// if( $depot ){
//     Mail::to($depot->particulier->email)->send(new DepotMarkdownMail($depot));
// }

}

        }

 

  

       
        

 
        return Redirect::route('depot.depots.index')->with('message', 'Un dépot de '. (number_format($depot->montantD, 0, ',', ' ')).  ' FCFA à été effectué sur le compte ' .$depot->particulier->code . ' par ' . $depot->name_deposant . ' '. $depot->prename_deposant.'. La monnaie à rendre est de ' . (number_format( $depot->rendu , 0, ',', ' ')) . ' FCFA.');   

    }
 
    public function stored(Solde $depot)
    {   

        $chiffre =  Nut::convert_number_to_words( $depot->montantD);
        $pieces = Piece::all();
        $retrait = new Retrait();
    
        return view('depot.dimi', compact('depot','retrait','pieces','chiffre'
        // ,'bonus','rachats','regain'
     ));
    }
  

public function storeded(Request $request , Solde $depot)
{   
   
    // dd($depot->id);
    
    // $id_part = Solde::where('id', )
    //     ->with('particulier')->select('particulier_id')->first()['solde_id'];

      
                 $solde = Solde::where([
                    ['id', '=', request('solde_id')],
                ])->first();
                // dd($solde->id);

        if($request->input('montant') > $solde->montantD){
        return view('404');    
    } elseif($request->input('montant') <= $solde->montantD){
      
        $retrait = new Retrait();
        $reference = Helper::Generator(new Retrait, 'reference', 8, 'REF');
        $retrait->reference = $reference;
        $retrait->solde_id = request('solde_id');       
        $retrait->add_retirant = request('add_retirant');
        $retrait->name_retirant = request('name_retirant'); 
        $retrait->prename_retirant = request('prename_retirant'); 
        $retrait->tel_retirant = request('tel_retirant'); 
        $retrait->numpiece = request('numpiece'); 
    $retrait->piece_id = request('piece_id');
    $retrait->motif = request('motif');
        $retrait->montant = $request->input('montant');

        $restant = $solde->montantD - $retrait->montant ;
        // dd( $restant );
        if( $restant >= 5000){
            $retrait->save();
        $solde->decrement('montantD', $retrait->montant);
        }else{ return view('407');}
        
        // Mail::to($solde->particulier->email)->send(new RetraitMarkdownMail($retrait));
    }

    return Redirect::route('depot.depots.index')->with('message', 'Un retrait de '.(number_format($retrait->montant, 0, ',', ' ')). ' à été effectué sur le compte '.  $retrait->solde->particulier->code . ' de ' . $retrait->solde->particulier->name . ' '. $retrait->solde->particulier->prename.'.');
    }

    // public function stored(Request $request)
    // {

    // //     $request->validate([
    // //         'solde_id' => 'required|integer',
    // //        'montant' => 'required|integer',
    // //    ]);

    //     $id_part = Solde::where('id', request('solde_id'))
    //     ->with('particulier')->select('particulier_id')->first()['particulier_id'];
    //     // $request->particulier = $request->depot->particulier_id;
    //     $solde = Solde::where([
    //         ['particulier_id', '=',  $id_part],
    //     ])->with('particulier')->first();


    //     // dd(  $id_part );
    // if($request->input('montant') > $solde->montant){
    //     return view('404');    
    // } elseif($request->input('montant') <= $solde->montant){
    //     $retrait = new Retrait();
    //     $retrait->solde_id = $request->input('solde_id');
    //     $retrait->montant = $request->input('montant');
    //     $retrait->save();
    //     $solde->decrement('montant', $retrait->montant);
    //     Mail::to($solde->particulier->email)->send(new RetraitMarkdownMail($retrait));
    // }

    // return Redirect::route('depot.depots.index')->with('message', 'Un retrait de '.(number_format($retrait->montant, 0, ',', ' ')). ' à été effectué par le client ' . $retrait->solde->particulier->name . ' '. $retrait->solde->particulier->prename.'.');

    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Depot $depot)
    {
        return view('depot.show', compact('depot'));
    }


    public function print(Depot $depot)
    {   

        // $chiffre =  Nut::convert_number_to_words( $depot->montantD);

        if ($depot->timbre == "Oui") {
            $v = $depot->montantD + 100;
            $chiffre =  Nut::convert_number_to_words( $v);
        }     
           else  {
            $chiffre =  Nut::convert_number_to_words( $depot->montantD);
    
           }

        // $pourcentage = ($vente->montant * $bonus ) / 100;
        // $rachat =  $pourcentage + $vente->montant;

        // $regain =  Nut::convert_number_to_words($rachat);
        return view('depot.print', compact('depot','chiffre'
        // ,'bonus','rachats','regain'
    ));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Depot $depot)
    {
        if (Gate::denies('edit-depots')){
            return redirect()->route('depot.index');
        } 
        $particuliers = Particulier::all();
        $pieces = Piece::all(); 
        return view('depot.edit',compact('depot', 'pieces','particuliers'));
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */  
    public function update(Request $request, Depot $depot)
    {
        // $depot = new Depot();
        // $reference = Helper::Generator(new Depot, 'referenece', 8, 'REF');

   
        $depot->particulier_id = request('particulier_id');
        $depot->motif = request('motif');
        $depot->name_deposant = request('name_deposant');
        $depot->prename_deposant = request('prename_deposant');
        $depot->tel_deposant = request('tel_deposant');
        $depot->numpiece = request('numpiece');
        $depot->piece_id = request('piece_id');
        
  

        // $montantD = request('montantD');
        // $montantR = request('montantR');
        
        // $depot->timbre = request('timbre');
        

        
     
        
 
$depot->save();
// return Redirect::route('depot.depots.index');
     return Redirect::route('solde.soldes.index')->with('message','Les informations du dépot de ' . $depot->particulier->name .' '. $depot->particulier->prename .' ont bien été modifiées.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depot $depot)
    {
        if (Gate::denies('delete-depots')){
            return redirect()->route('solde.soldes.index');
        } 
        $depot->delete();
        return redirect()->route('solde.soldes.index')->with('message','Les informations du dépot de ' . $depot->particulier->name .' '. $depot->particulier->prename .' ont bien été supprimées.');
    }  

    public function restore(Depot $depot)
    {
        if (Gate::denies('delete-depots')){
            return redirect()->route('solde.soldes.index');
        } 

        $partSupps = Depot::onlyTrashed()->first();
        $partSupps->restore();

        return redirect()->route('solde.soldes.index')->with('message','Les informations du dépot de ' . $depot->particulier->name .' '. $depot->particulier->prename .' ont bien été restaurées.');
    } 

  
    private function validator(){

        return request()->validate([       
            'timbre'=> 'in:Oui,Non',
            'motif' => ['required', 'string'],
            'add_deposant' => ['required', 'string'],
            'add_retirant' => ['required', 'string'],
            'numpiece' => ['nullable', 'string', 'max:255'],
            'name_deposant' => ['nullable', 'string', 'max:255'],
            'prename_deposant' => ['nullable', 'string', 'max:255'],
            'tel_deposant' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'reference' => ['required', 'string', 'max:255'],
            'name_retirant' => ['nullable', 'string', 'max:255'],
            'prename_retirant' => ['nullable', 'string', 'max:255'],
            'tel_retirant' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'particulier_id' => 'required|integer',
            'solde_id' => 'required|integer',
            'piece_id' => 'required|integer',
            'montantD' => 'required|integer',
            // 'montant' => 'required|integer',
            'montantR' => 'required|integer',
            'rendu' => 'required|integer',
        ]);    
    }
}
