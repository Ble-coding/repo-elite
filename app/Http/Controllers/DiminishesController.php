<?php

namespace App\Http\Controllers;

use App\Models\Somme;
use App\Models\Forfait;
use App\Models\Customer;
use App\Models\Diminish;
use Illuminate\Http\Request;
// use App\Mail\RetraitMarkdownMail;  
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Models\Suppleant;

class DiminishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diminishes= Diminish::with('customer')->with('forfait')
        ->get();

        return view('diminish.index' , compact('diminishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forfaits = Forfait::all();
        $customers = Customer::all();
        $suppleants = Suppleant::all();
        $diminish = new Diminish();

        return view('diminish.create', compact('forfaits','diminish','customers','suppleants'
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
        $diminish = new Diminish();
        $diminish->forfait_id = $request->input('forfait_id');
        $diminish->customer_id = $request->input('customer_id');
        $diminish->suppleant_id = $request->input('suppleant_id'); 
        $diminish->montant = $request->input('montant');
        $diminish->save();

      

        $somme = Somme::where([
            ['forfait_id', '=', $request->forfait_id],
            ['suppleant_id', '=', $request->suppleant_id],
        ])->with('customer')->with('forfait')->first();

    
        
    if($request->input('montant') > $somme->montant){
        return view('404');    
    } elseif($request->input('montant') <= $somme->montant){
        $somme->decrement('montant', $somme->montant);
    } else{
        Somme::create($this->validator());
    }



        return Redirect::route('diminish.diminishes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Diminish $diminish)
    {
        return view('diminish.show', compact('diminish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Diminish $diminish)
    {
        // if (Gate::denies('edit-diminishes')){
        //     return redirect()->route('somme.sommes.index');
        // } 
        $customers = Customer::all();
        $forfaits = Forfait::all();
        $suppleants = Suppleant::all();
        // $societ = DB::table('customers')->union(DB::table('clients'))
        // ->union(DB::table('particuliers'))
        // ->get();
        
        return view('diminish.edit',compact('diminish',
        'customers',
        'suppleants',
         'forfaits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diminish $diminish)
    {
    
        $diminish->forfait_id = $request->input('forfait_id');
        $diminish->customer_id = $request->input('customer_id');
        //    $diminish->suppleant_id = $request->input('suppleant_id');
        // $diminish->name_parrain = $request->input('name_parrain');
        $diminish->montant = $request->input('montant');

        $diminish->save();

return redirect()->route('somme.sommes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diminish $diminish)
    {
        // if (Gate::denies('delete-diminishes')){
        //     return redirect()->route('somme.sommes.index');
        // } 
        $diminish->delete();
        return redirect()->route('somme.sommes.index');
    }
}
