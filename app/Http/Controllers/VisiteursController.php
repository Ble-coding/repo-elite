<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use App\Models\Piece;

use App\Models\Visiteur;
use App\Helpers\Helper;  

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class VisiteursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visiteurs = Visiteur::all();
        $partSups = Visiteur::onlyTrashed()->get();

        $pieces = Piece::all();

        return view('visiteur.index', compact('pieces','visiteurs','partSups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $visiteur = new Visiteur();
        $pieces = Piece::all();

        return view('visiteur.create', compact('visiteur','pieces'
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
                'sexe' => 'in:F,M',
            'name' => ['required', 'string', 'max:255'],
            'prename' => ['required', 'string', 'max:255'],
            'nationnalite' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'numpiece' => ['required', 'string', 'max:255'],
            'dateexp' => ['required', 'string', 'max:255'],
            'piece_id' => 'required|integer',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'adresse'=> ['required', 'string', 'max:255'],
            ]);
    
          
    
            $code = Helper::IDGenerator(new Visiteur, 'code', 6, '40');
    
            
            $visiteur = Visiteur::create([
                'nationnalite' => $request->nationnalite,
                'sexe' => $request->sexe,
                'prename' => $request->prename,
                'name' => $request->name,
                'email' => $request->email,
                'tel' => $request->tel,
                'piece_id' => $request->piece_id,
                'dateexp' => $request->dateexp,
                'numpiece' => $request->numpiece,
                'adresse'=> $request->adresse,
                'code' => $code,
                
            ]);
    
            
           
    
            // if( $visiteur ){
            //     // event(new VisiteurHasRegisteredEvent($visiteur));
            //     Mail::to($visiteur->email)->send(new VisiteurMarkdownMail($visiteur));
            // }
            
    
        return view('visiteur.index', compact('visiteur'))->with('message', 'code '. $visiteur->code .'. Félicitation, les informations du client ' . $visiteur->name . ' '. $visiteur->prename.' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Visiteur $visiteur)
    {
          // if (Gate::denies('show-particuliers')){
        //     return redirect()->route('epargne.particulier.index');
        // }
 
        return view('visiteur.show', compact('visiteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Visiteur $visiteur)
    {
        if (Gate::denies('edit-visiteurs')){
            return redirect()->route('visiteur.index');
        } 

        $pieces = Piece::all();
        return view('visiteur.edit',compact('visiteur','pieces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Visiteur $visiteur)
    {
        //    $visiteur = new visiteur();
            $visiteur->sexe = $request->get('sexe');
            $visiteur->name = $request->get('name');
            $visiteur->nationnalite = $request->get('nationnalite');
            $visiteur->prename = $request->get('prename');

             $visiteur->email = $request->get('email');
            $visiteur->numpiece = $request->get('numpiece');
            $visiteur->dateexp = $request->get('dateexp');
 
            $visiteur->piece_id = $request->get('piece_id');
            $visiteur->tel = $request->get('tel');;
            $visiteur->adresse = $request->get('adresse');
            $visiteur->code;

          
            $visiteur->save();

            return redirect()->route('visiteurs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visiteur $visiteur)
    {
        if (Gate::denies('delete-visiteurs')){
            return redirect()->route('visiteurs.index');
        }
        $visiteur->delete();
        return redirect()->route('visiteurs.index');
    }

    public function restore(Visiteur $visiteur)
    {
        if (Gate::denies('delete-visiteurs')){
            return redirect()->route('visiteurs.index');
        }
        // dd($visiteur);

        $partSups = Visiteur::onlyTrashed()->first();
        $partSups->restore();
        
        return redirect()->route('visiteurs.index')->with('message', 'code '. $visiteur->code .'. Les informations du visiteur ' . $visiteur->name . ' '. $visiteur->prename.' ont bien été restaurées.');
    } 
}
