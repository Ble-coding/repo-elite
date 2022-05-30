<?php

namespace App\Http\Controllers;

use App\Helpers\Nut;
use App\Helpers\Helper;
use App\Models\Solde;
use App\Models\Depot; 
use App\Models\Retrait;
use App\Models\Particulier; 
use Illuminate\Http\Request;
use App\Mail\RetraitMarkdownMail;  
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class RetraitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retraits= Retrait::with('depot')
        ->get();
        // ->latest()->paginate(10);

        return view('retrait.index' , compact('retraits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $stocks = Stock::all();
        // $particuliers = Particulier::all();
        $depots = Depot::all();
        $retrait = new Retrait();
        // $client = new Client();

        return view('retrait.create', compact('depots','retrait'
    ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $retrait = new Retrait();
        // $retrait->dateretrait = request('dateretrait');
        $retrait->depot_id = $request->input('depot_id');
        $retrait->montant = $request->input('montant');
        // $retrait->code = $code;
        $retrait->save();

      

        $solde = Solde::where([
            ['particulier_id', '=', $request->depot->particulier_id],
        ])->with('particulier')->first();

    
        // if ($solde) {
        //     $solde->decrement('montant', $request->montant);
        // } 
        // else {
        //     Solde::create($this->validator());
        // }

        
    if($request->input('montant') > $solde->montant){
        return view('404');    
    } elseif($request->input('montant') <= $solde->montant){
        $solde->decrement('montant', $solde->montant);
    } else{
        Solde::create($this->validator());
    }



        return Redirect::route('retrait.retraits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Retrait $retrait)
    {
        return view('retrait.show', compact('retrait'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function printer(Retrait $retrait)
    {   
        $reference = Helper::Generator(new Retrait, 'reference', 8, 'REF');

        $chiffre =  Nut::convert_number_to_words($retrait->montant);

        // $pourcentage = ($vente->montant * $bonus ) / 100;
        // $rachat =  $pourcentage + $vente->montant;

        // $regain =  Nut::convert_number_to_words($rachat);
        return view('retrait.printer', compact('retrait',
        'chiffre','reference'
        // ,'bonus','rachats','regain'
        ));
    }
    public function edit(Retrait $retrait)
    {
        if (Gate::denies('edit-retraits')){ 
            return redirect()->route('solde.soldes.index');
        } 
          $depots = Solde::with('particulier')->get();
        return view('retrait.edit',compact('retrait','depots'));
    }  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Retrait $retrait)
    {
        // $retrait = Retrait::find($retrait); 

        $retrait->solde_id = $request->input('solde_id');
        $retrait->montant = $request->input('montant');

        $retrait->save();

// return Redirect::route('retrait.retraits.index');
return redirect()->route('solde.soldes.index')->with('message','Les informations du retrait de ' . $retrait->solde->particulier->name .' '. $retrait->solde->particulier->prename .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retrait $retrait)
    {
        if (Gate::denies('delete-retraits')){
            return redirect()->route('solde.soldes.index');
        } 
        $retrait->delete();
        return redirect()->route('solde.soldes.index')->with('message','Les informations du retrait de ' . $retrait->solde->particulier->name .' '. $retrait->solde->particulier->prename .' ont bien été supprimées.');
    }

    public function restore(Retrait $retrait)
    {
        if (Gate::denies('delete-retraits')){
            return redirect()->route('solde.soldes.index');
        }

        $partSups = Retrait::onlyTrashed()->first();
        $partSups->restore();

        return redirect()->route('solde.soldes.index')->with('message','Les informations du retrait de ' . $retrait->solde->particulier->name .' '. $retrait->solde->particulier->prename .' ont bien été restaurées.');
    } 

    private function validator(){

        return request()->validate([
            // 'datedepot' => ['required', 'string'],
            'depot_id' => 'required|integer',
            'montant' => 'required|integer',
            // 'code'=> ['required', 'string'],
        ]);
    }
}
