<?php

namespace App\Http\Controllers;

use App\Models\Sod;
use App\Helpers\Nut;
use App\Models\Depose;
use App\Models\Widraw;
use App\Models\Society;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class WidrawsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $widraws= Widraw::with('society')
        ->get();
 

        return view('widraw.index' , compact('widraws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $societys = Society::all();
        
        $widraw = new Widraw();

        return view('widraw.create', compact('societys','widraw'
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
        $widraw = new Widraw();
        $widraw->society_id = $request->input('society_id');
        $widraw->montant = $request->input('montant');
        $widraw->save();
    
      
    
        $solde = Sod::where([
            ['society_id', '=', $request->society_id],
        ])->with('society')->first();
    
    
    
    
        if($request->input('montant') >   $solde->montant){
            return view('404');    
        } elseif($request->input('montant') <= $solde->montant){
            $solde->decrement('montant', $widraw->montant);
        } else{
            Sod::create($this->validator());
        }
    
        
    
        return Redirect::route('widraw.widraws.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function printer(Widraw $widraw)
    {   

        $chiffre =  Nut::convert_number_to_words($widraw->montant);

        // $pourcentage = ($vente->montant * $bonus ) / 100;
        // $rachat =  $pourcentage + $vente->montant;

        // $regain =  Nut::convert_number_to_words($rachat);
        return view('widraw.printer', compact('widraw',
        'chiffre'
        // ,'bonus','rachats','regain'
      ));
    }
    public function show(Widraw $widraw)
    {
        return view('widraw.show', compact('widraw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Widraw $widraw)
    {
        if (Gate::denies('edit-widraws')){
            return redirect()->route('sod.sods.index');
        } 
        // $societys = Society::all(); 
        $deposes = Sod::with('society')->get();
        return view('widraw.edit',compact('widraw','deposes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Widraw $widraw)
    {
        $widraw->sod_id = $request->input('sod_id');
        $widraw->montant = $request->input('montant');

        $widraw->save();


return redirect()->route('sod.sods.index')->with('message','Les informations du retrait de l\'entreprise ' . $widraw->sod->society->name .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Widraw $widraw)
    {
        if (Gate::denies('delete-widraws')){
            return redirect()->route('sod.sods.index');
        } 
        $widraw->delete();
        return redirect()->route('sod.sods.index')->with('message','Les informations du retrait de l\'entreprise ' . $widraw->sod->society->name .' ont bien été supprimées.');
        }


        public function restore(Widraw $widraw)
        {
            if (Gate::denies('delete-widraws')){
                return redirect()->route('sod.sods.index');
            }
    
            $partSups = Widraw::onlyTrashed()->first();
            $partSups->restore();
    
            return redirect()->route('sod.sods.index')->with('message','Les informations du retrait de l\'entreprise ' . $widraw->sod->society->name .' ont bien été restaurées.');
        } 
        private function validator(){

            return request()->validate([
                'society_id' => 'required|integer',
                'montant' => 'required|integer',
            ]);
        }
}
