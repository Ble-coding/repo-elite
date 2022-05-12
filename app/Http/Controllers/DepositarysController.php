<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Sode;
use App\Models\Remove; 
use App\Helpers\Helper;
use App\Models\Client;    
use App\Models\Depositary;
use Illuminate\Http\Request;
use App\Mail\RemoveMarkdownMail;
use Illuminate\Support\Facades\DB;
use App\Mail\DepositaryMarkdownMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Events\DepositaryHasRegisteredEvent;
use App\Helpers\Nut;
use App\Models\Piece;



class DepositarysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */  
    public function index()
    {
        
        $depositarys = Sode::with('client')->get();
        $listDepositarys = Depositary::with('client')->get();
        $pieces = Piece::all(); 
        $removes = Remove::with('sode')->get();
        $clients = Client::all();
        $depositary = new Depositary();
        $soldes = Sode::where('montantD', '!=', 0)->with('client')->get();
  

        //  $soldes = Sode::all();
      
    
        // $depositarys = Sode::where('montantd', '!=', 0)->with('client')->get();

 


  
    return view('depositary.index', compact(
        'soldes',
        'depositary',
        'depositarys',
        'clients',
   
         'listDepositarys',
        'removes',
        'pieces',
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

        $depositary = new Depositary();
        $reference = Helper::Generator(new Depositary, 'referenece', 8, 'REF');
        // $code = Helper::IDGenerator(new Vente, 'code', 6, '40');
        // $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
   
        $depositary->client_id = request('client_id');
        $depositary->motif = request('motif');
        $depositary->name_deposant = request('name_deposant');
        $depositary->prename_deposant = request('prename_deposant');
        $depositary->tel_deposant = request('tel_deposant');
        $depositary->numpiece = request('numpiece');
        $depositary->piece_id = request('piece_id');
        $depositary->add_deposant = request('add_deposant');
        $depositary->reference = $reference;
  

        $montantD = request('montantD');
        $montantR = request('montantR');
        
        $depositary->timbre = request('timbre');
        

        
        if ($depositary->timbre == 'Oui') {
            $depositary->montantD = $montantD + 100;
            $depositary->montantR = $montantR;
        //    dd(  $depositary->montantR);
            if($depositary->montantR > $montantD){
                $depositary->rendu = $depositary->montantR  - $montantD  ;
                // dd( $depositary->rendu);
            }
             elseif($depositary->montantR < $montantD){
                // dd( $depositary->rendu);
                return view('404'); 

            }
            elseif($depositary->montantR =  $montantD){

                $depositary->rendu = 0;      
                // dd( $depositary->rendu);
            } 
            
        } else{ 
            $depositary->montantD = $montantD - 100;
            $depositary->montantR = $montantR;
            
            if($depositary->montantR > $depositary->montantD){
                $depositary->rendu = $depositary->montantR  - $montantD  ;
            } elseif($depositary->montantR < $depositary->montantD){
                return view('404'); 
            }elseif($depositary->montantR =  $depositary->montantD){
                $depositary->rendu = 0;
            } 
        }
        
 
$depositary->save();
       
        
        $solde = Sode::where([
            ['client_id', '=', $request->client_id],
        ])->with('client')->first();

    
        if ($solde) {
            $solde->increment('montantD', $request->montantD);
        } 
        else {
            
        if($depositary->montantD  ){
            
                    $sodle = new Sode();    
                    

                    $sodle->client_id = request('client_id');
                
                    $sodle->motif = request('motif');
                    $sodle->name_deposant = request('name_deposant');
                    $sodle->prename_deposant = request('prename_deposant');
                    $sodle->tel_deposant = request('tel_deposant');
                    $sodle->add_deposant = request('add_deposant');
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





// if( $depositary ){
//     Mail::to($depositary->client->email)->send(new DepositaryMarkdownMail($depositary));
// }

}

        }

 

  

       
        

 
        return Redirect::route('depositary.depositarys.index')->with('message', 'Un dépot de '. (number_format($depositary->montantD, 0, ',', ' ')).  ' FCFA à été effectué sur le compte ' .$depositary->client->code . ' par ' . $depositary->name_deposant . ' '. $depositary->prename_deposant.'. La monnaie à rendre est de ' . (number_format( $depositary->rendu , 0, ',', ' ')) . ' FCFA.');   

    }

    public function stored(Sode $depositary)
    {   


        $pieces = Piece::all();
        $remove = new Remove();
    
        return view('depositary.dimi', compact('depositary','remove','pieces'
        // ,'bonus','rachats','regain'
     ));
    }
  

public function storeded(Request $request , Sode $depositary)
{   
   
    // dd($depositary->id);
    
    // $id_part = Solde::where('id', )
    //     ->with('client')->select('client_id')->first()['solde_id'];

      
                 $sode = Sode::where([
                    ['id', '=', request('sode_id')],
                ])->first();
                // dd($request->input('montant'));

        if($request->input('montant') > $sode->montantD){
        return view('404');    
    } elseif($request->input('montant') <= $sode->montantD){
        $remove = new Remove();
        $reference = Helper::Generator(new Remove, 'reference', 8, 'REF');
        $remove->reference = $reference;
        $remove->sode_id = request('sode_id');
        $remove->add_retirant = request('add_retirant');       
        $remove->name_retirant = request('name_retirant'); 
        $remove->prename_retirant = request('prename_retirant'); 
        $remove->tel_retirant = request('tel_retirant'); 
        $remove->numpiece = request('numpiece'); 
    $remove->piece_id = request('piece_id');
        $remove->montant = $request->input('montant');
        $remove->save();
        $sode->decrement('montantD', $remove->montant);
        // Mail::to($sode->client->email)->send(new RemoveMarkdownMail($remove));
    }

    return Redirect::route('depositary.depositarys.index')->with('message', 'Un retrait de '.(number_format($remove->montant, 0, ',', ' ')). ' à été effectué sur le compte '.  $remove->sode->client->code . ' de ' . $remove->sode->client->name . ' '. $remove->sode->client->prename.'.');
    }


    public function print(Depositary $depositary)
    {   

        $chiffre =  Nut::convert_number_to_words( $depositary->montantD);

        // $pourcentage = ($vente->montant * $bonus ) / 100;
        // $rachat =  $pourcentage + $vente->montant;

        // $regain =  Nut::convert_number_to_words($rachat);
        return view('depositary.print', compact('depositary','chiffre'
        // ,'bonus','rachats','regain'
    ));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Depositary $depositary)
    {
        return view('depositary.show', compact('depositary'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Depositary $depositary)
    {
      
        if (Gate::denies('edit-depositarys')){
            return redirect()->route('depositary.index');
        } 
        $clients = Client::all();
        return view('depositary.edit',compact('depositary','clients'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depositary $depositary)
    {
        $depositary->client_id = $request->input('client_id');
        $depositary->montant = $request->input('montant');

        $depositary->save();

return Redirect::route('sode.sodes.index')->with('message','Les informations du dépot de ' . $depositary->client->name .' '. $depositary->client->prename .' ont bien été modifiées.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depositary $depositary)
    {
        if (Gate::denies('delete-depositarys')){
            return redirect()->route('sode.sodes.index');
        } 
        $depositary->delete();
        return redirect()->route('sode.sodes.index')->with('message','Les informations du dépot de ' . $depositary->client->name .' '. $depositary->client->prename .' ont bien été supprimées.');
    }


    public function restore(Depositary $depositary)
    {
        if (Gate::denies('delete-depositarys')){
            return redirect()->route('sode.sodes.index');
        } 

        $partSupps = Depositary::onlyTrashed()->first();
        $partSupps->restore();

        return redirect()->route('sode.sodes.index')->with('message','Les informations du dépot de ' . $depositary->client->name .' '. $depositary->client->prename .' ont bien été restaurées.');
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
            'client_id' => 'required|integer',
            'sode_id' => 'required|integer',
            'piece_id' => 'required|integer',
            'add_deposant' => ['required', 'string'],
            'add_retirant' => ['required', 'string'],
            'montantD' => 'required|integer',
            'montantR' => 'required|integer',
            'rendu' => 'required|integer',
        ]);    
    }
}
