<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Forfait;
// use App\Models\Investissement;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Investissement;

class ForfaitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index() 
    {  
        // $forfait = new Forfait();
        // $forfaits = Forfait::all();
        $forfaits = Forfait::withcount('investissements')->with('investissements')->get();
        // $forfaitOnlys = Forfait::withcount('investissements')->with('investissements')->whereBetween('id', [4, 6])->get();
        $partSups = Forfait::onlyTrashed()->get();

  
        // dd($forfait);
        return view('forfait.index', compact('forfaits','partSups'
        // ,'forfaitOnlys'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forfait = new Forfait();
        // $investissements = Investissement::all();
        

        return view('forfait.create', compact('forfait'
        // , 'investissements'
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

        $request->validate([
                  'libelle_Forfait' => ['required', 'string', 'max:255'],            
                    'pourcentageJ' => 'required|integer',
                    'pourcentageM' => 'required|integer',
                    'montantMin' => 'required|integer',
                    'montantMax' => 'required|integer',
                    'duree' => 'required|integer',
                    // 'duree' => 'required|string',
        ]);

        $forfait = Forfait::create([
            'libelle_Forfait' => $request->libelle_Forfait,
            'pourcentageJ' => $request->pourcentageJ,
            'pourcentageM' => $request->pourcentageM,
            'montantMin' => $request->montantMin,
            'duree' => $request->duree,
            'montantMax' => $request->montantMax,
        ]);


        return Redirect::route('admin.forfaits.index')->with('message','Les informations du forfait de ' . $forfait->libelle_Forfait .' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Forfait $forfait)
    {
        if (Gate::denies('show-users')){
            return redirect()->route('admin.index');
        }
        // $investissements = Investissement::all();
        return view('forfait.show', compact('forfait'
        // ,'investissements'
    ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Forfait $forfait)
    {
        if (Gate::denies('edit-users')){
            return redirect()->route('forfait.index');
        }     
        // $investissements = Investissement::all();
        return view('forfait.edit',compact('forfait'
        // ,'investissements'
    ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Forfait $forfait)
    {
        $forfait->libelle_Forfait = $request->input('libelle_Forfait');
        $forfait->pourcentageJ = $request->input('pourcentageJ');
        $forfait->pourcentageM = $request->input('pourcentageM');
        $forfait->montantMin = $request->input('montantMin');
        $forfait->montantMax = $request->input('montantMax');
        // $forfait->numpiece = $request->input('numpiece');
        $forfait->duree = $request->input('duree');


$forfait->save();

        return redirect()->route('admin.forfaits.index')->with('message','Les informations du forfait de ' . $forfait->libelle_Forfait .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forfait $forfait)
    {
        if (Gate::denies('delete-users')){
            return redirect()->route('admin.forfaits.index');
        }
        $forfait->delete();
        // $investissements = Investissement::all();
        return redirect()->route('admin.forfaits.index' )->with('message','Les informations du forfait de ' . $forfait->libelle_Forfait .' ont bien été supprimées.');
    }

    
    public function restore(Forfait $forfait)
    {
        if (Gate::denies('delete-retraits')){
            return redirect()->route('admin.forfaits.index');
        }

        $partSups = Forfait::onlyTrashed()->first();
        $partSups->restore();

        return redirect()->route('admin.forfaits.index')->with('message','Les informations du forfait de ' . $forfait->libelle_Forfait .' ont bien été restaurées.');
    } 
    //  private function validator(){

    //     return request()->validate([
    //         'libelle_Forfait' => ['required', 'string', 'max:255'],            
    //         'pourcentageJ' => 'required|integer',
    //         'pourcentageM' => 'required|integer',
    //         'montantMin' => 'required|integer',
    //         'montantMax' => 'required|integer',
    //         'duree' => 'required|integrer',
    //         // 'investissement_id' => 'required'
    //     ]);
    // }

}
