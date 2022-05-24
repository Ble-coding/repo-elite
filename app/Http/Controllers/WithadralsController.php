<?php

namespace App\Http\Controllers;

use App\Helpers\Nut;
use App\Models\Sold;
use App\Models\Deposit;
use App\Models\Withadral;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;


class WithadralsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withadrals= Withadral::with('entreprise')
        ->get();
        // ->latest()->paginate(10);

        return view('withadral.index' , compact('withadrals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();
        
        $withadral = new Withadral();
        // $client = new Client();

        return view('withadral.create', compact('entreprises','withadral'
    ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $withadral = new Withadral();
    $withadral->entreprise_id = $request->input('entreprise_id');
    $withadral->montant = $request->input('montant');
    // $withadral->code = $code;
    $withadral->save();

  

    $solde = Sold::where([
        ['entreprise_id', '=', $request->entreprise_id],
    ])->with('entreprise')->first();


    // if ( $request->input('montant') > $request->montant) {
    //     return view('404');
    // } 
    // else if($solde &&  $request->input('montant') <= $request->montant) {
    //     $solde->decrement('montant', $request->montant);
    // }

    if($request->input('montant') >   $solde->montant){
        return view('404');    
    } elseif($request->input('montant') <= $solde->montant){
        $solde->decrement('montant', $withadral->montant);
    } else{
        Sold::create($this->validator());
    }

    // if($request->input('montant') <= $request->montant){
    //     $solde->decrement('montant', $request->montant);

    // }else{
    //     return view('404' , compact('produts','purchases'));
    // }
    

    return Redirect::route('withadral.withadrals.index');
    }


    public function printer(Withadral $withadral)
    {   

        $chiffre =  Nut::convert_number_to_words($withadral->montant);

        // $pourcentage = ($vente->montant * $bonus ) / 100;
        // $rachat =  $pourcentage + $vente->montant;

        // $regain =  Nut::convert_number_to_words($rachat);
        return view('withadral.printer', compact('withadral',
        'chiffre'
        // ,'bonus','rachats','regain'
    ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Withadral $withadral)
    {
        return view('withadral.show', compact('withadral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Withadral $withadral)
    {
        if (Gate::denies('edit-withadrals')){
            return redirect()->route('sold.solds.index');
        } 

        $deposits = Sold::with('entreprise')->get();
        return view('withadral.edit',compact('withadral','deposits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Withadral $withadral)
    {
        // $retrait = Withadral::find($retrait);
 
        // $withadral->dateretrait = $request->input('dateretrait');
        $withadral->sold_id = $request->input('sold_id');
        $withadral->montant = $request->input('montant');

        $withadral->save();


return redirect()->route('sold.solds.index')->with('message','Les informations du retrait de l\'entreprise ' . $withadral->sold->entreprise->name .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withadral $withadral){
    if (Gate::denies('delete-withadrals')){
        return redirect()->route('sold.solds.index');
    } 
    $withadral->delete();
    return redirect()->route('sold.solds.index')->with('message','Les informations du retrait de l\'entreprise ' . $withadral->sold->entreprise->name .' ont bien été supprimées.');
    }

    public function restore(Withadral $withadral)
    {
        if (Gate::denies('delete-withadrals')){
            return redirect()->route('solde.soldes.index');
        }

        $partSups = Withadral::onlyTrashed()->first();
        $partSups->restore();

        return redirect()->route('sold.solds.index')->with('message','Les informations du retrait de l\'entreprise ' . $withadral->sold->entreprise->name .' ont bien été restaurées.');
    } 
    private function validator(){

        return request()->validate([
            // 'dateretrait' => ['required', 'string'],
            'entreprise_id' => 'required|integer',
            'montant' => 'required|integer',
            // 'sold_id' => 'required|integer',
            // 'code'=> ['required', 'string'],
        ]);
    }
}
