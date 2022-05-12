<?php

namespace App\Http\Controllers;


use App\Models\Investissement;
use App\Models\Somme;  
use App\Models\Customer;
use App\Models\Forfait;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\DB;
use App\Models\Suppleant;

class SommesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::withcount('investissements')->with('investissements')->get();

        // $sommes = DB::table('sommes')
        // $sommes = DB::table('sommes')
        // ->join('customers', 'sommes.customer_id', '=', 'customers.id')
        // ->join('suppleants', 'sommes.suppleant_id', '=', 'suppleants.id')
        // ->join('forfaits', 'sommes.forfait_id', '=', 'forfaits.id')
        // ->select('sommes.*','forfaits.*', 'sommes.montant AS total_quantity'
        // , 'customers.name',
        //  'customers.prename', 'customers.tel'
        //  , 'customers.code'
        //  , 'customers.email' 

        //  , 'suppleants.name AS name_parrain',
        //  'suppleants.prename AS prename_parrain', 'suppleants.tel AS tel_parrain'
        //  , 'suppleants.code_parrain','suppleants.prof AS prof_parrain'
        //  , 'suppleants.email AS email_parrain'
        //  ) 
        // ->get(); 

        $sommes = Somme::where('status', 1)->with('customer')->with('forfait')
        ->get();
        
       

        // $societ = DB::table('customers')->union(DB::table('clients'))
        // ->union(DB::table('particuliers'))
        // ->get();

        // $customers = DB::table('customers')->union(DB::table('clients'))
        // ->union(DB::table('particuliers'))
        // ->get();

        $suppleants = Suppleant::all();
        $forfaits = Forfait::all();
        $investi = new Investissement();


        
        // dd($societ);
        return view('somme.index', compact(
            'forfaits',
            'investi', 'suppleants',
      
            'customers',
            'sommes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Somme $somme)
    {
        return view('somme/show', compact('somme'));
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
    public function destroy(Somme $somme)
    {
        // if (Gate::denies('delete-sommes')){
        //     return redirect()->route('investir.investis.index');
        // } 
        $somme->delete();
        return redirect()->route('investir.investis.index');
    }
}
