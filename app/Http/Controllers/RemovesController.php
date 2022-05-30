<?php

namespace App\Http\Controllers;

use App\Helpers\Nut;
use App\Models\Sode;
use App\Models\Client;
use App\Helpers\Helper;
use App\Models\Remove; 
use App\Models\Depositary;
use Illuminate\Http\Request;
use App\Mail\RemoveMarkdownMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class RemovesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $removes= Remove::with('client')
        ->get();
 

        return view('remove.index' , compact('removes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        
        $remove = new Remove();

        return view('remove.create', compact('clients','remove'
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
        $remove = new Remove();
        $remove->client_id = $request->input('client_id');
        $remove->montant = $request->input('montant');
        $remove->save();
     
      
    
        $solde = Sode::where([
            ['client_id', '=', $request->client_id],
        ])->with('client')->first();
    
    
    
    
        if($request->input('montant') >   $solde->montant){
            return view('404');    
        } elseif($request->input('montant') <= $solde->montant){
            $solde->decrement('montant', $remove->montant);
        } else{
            Sode::create($this->validator());
        }

        if( $remove ){
            Mail::to($solde->client->email)->send(new RemoveMarkdownMail($remove));
        }
    
        // dd($solde->montant);
    
        return Redirect::route('remove.removes.index');
    }


    public function printer(Remove $remove)
    {   

        $reference = Helper::Generator(new Remove, 'reference', 8, 'REF');

        $chiffre =  Nut::convert_number_to_words($remove->montant);

        // $pourcentage = ($vente->montant * $bonus ) / 100;
        // $rachat =  $pourcentage + $vente->montant;

        // $regain =  Nut::convert_number_to_words($rachat);
        return view('remove.printer', compact('remove',
        'chiffre','reference'
        // ,'bonus','rachats','regain'
    ));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Remove $remove)
    {
        return view('remove.show', compact('remove'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Remove $remove)
    { 
        if (Gate::denies('edit-removes')){
            return redirect()->route('sode.sodes.index');
        }  
        $depositarys = Sode::with('client')->get();  
        return view('remove.edit',compact('remove','depositarys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remove $remove)
    {
        $remove->sode_id = $request->input('sode_id');
        $remove->montant = $request->input('montant');

        $remove->save();


return redirect()->route('sode.sodes.index')->with('message','Les informations du retrait de ' . $remove->sode->client->name .' '. $remove->sode->client->prename .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remove $remove)
    {
        if (Gate::denies('delete-removes')){
            return redirect()->route('sode.sodes.index');
        } 
        $remove->delete();
        return redirect()->route('sode.sodes.index')->with('message','Les informations du retrait de ' . $remove->sode->client->name .' '. $remove->sode->client->prename .' ont bien été supprimées.');
    }

    public function restore(Remove $remove)
    {
        if (Gate::denies('delete-removes')){
            return redirect()->route('sode.sodes.index');
        }
 
        $partSups = Remove::onlyTrashed()->first();
        $partSups->restore();

        return redirect()->route('sode.sodes.index')->with('message','Les informations du retrait de ' . $remove->sode->client->name .' '. $remove->sode->client->prename .' ont bien été restaurées.');
    } 

}
