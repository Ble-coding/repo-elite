<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Forme;
use App\Models\Piece;
use App\Helpers\Helper;
use App\Models\Secteur;
use App\Models\Confirme;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use App\Mail\EntrepriseMarkdownMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Events\EntrepriseHasRegisteredEvent;
  
class EntreprisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
  
        $entreprises = Entreprise::where('status', 1)->get();
        $listEntreprises = Entreprise::where('status', 0)->get();
        $partSups = Entreprise::onlyTrashed()->get();
        return view('entreprise.index', compact('entreprises','partSups','listEntreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprise = new Entreprise();
        $pieces = Piece::all();
        $formes = Forme::all();
        // $secteurs = Secteur::all();

        return view('entreprise.create', compact('entreprise','pieces','formes',
        // 'secteurs'
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

    // $request->validate([
    //     'sexe' => 'in:F,M',
    //     'situation' => 'in:Marie,Celibataire',
    //     'name' => ['required', 'string', 'max:255'],
    //     'cam' => ['required', 'string', 'max:255'],
    //     'caa' => ['required', 'string', 'max:255'],
    //     // 'partner' => 'in:Oui,Non',
    //     // 'payment' => 'in:Oui,Non',
    //     // 'credit' => 'in:Oui,Non',
    //     // 'secteur_id' => 'required|integer',
    //     'secteur' => 'required|string',
    //     'name_gerant' => ['required', 'string', 'max:255'],
    //     'capital' => ['required', 'string', 'max:255'],
    //     'name_partner' => ['nullable', 'string', 'max:255'],
    //     'siege' => ['required', 'string', 'max:255'],
    //     'nationnalite' => ['required', 'string', 'max:255'],
    //     'lieu_habitation' => ['required', 'string', 'max:255'],
    //     'nr' => ['required', 'string', 'max:255','unique:entreprises'],
    //     'tel_ent' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
    //     'prename_gerant' => ['required', 'string', 'max:255'],
    //     'email' => ['required', 'string', 'email', 'max:255'],
    //     'lieu' => ['required', 'string', 'string', 'max:255'],
    //     'datenaiss' => ['required', 'string', 'max:255'],
    //     'numpiece' => ['required', 'string', 'max:255'],
    //     'dateexp' => ['required', 'string', 'max:255'],
    //     'personne_name' => ['nullable','string', 'max:255'],
    //     'personne_prename' =>['nullable', 'string', 'max:255'],
    //     'image' => 'nullable', 
    //     'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
    //     'personne_tel' => ['nullable', 'string', 'max:255'],
    //     'piece_id' => 'required|integer',
    //     'forme_id' => 'required|integer',
    //     'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
    //     'successeur_name' => ['nullable','string', 'max:255'],  
    //     'successeur_prename' => ['nullable','string', 'max:255'],
    //     'successeur_tel' => ['nullable','string', 'max:255'],
    // ]);
    
    $entreprise = new Entreprise();

    $code = Helper::IDGenerator(new Entreprise, 'code', 6, '11');

    $image = array();
    if($files = $request->file('image')){
        foreach ($files as $file) {
            $image_name =  md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'multiple_image/';
            $image_url = $upload_path.$image_full_name;
            $file->move($upload_path, $image_full_name);
            $image[] = $image_url;
        }
    }

    $entreprise->tel_ent = request('tel_ent');
    $entreprise->email = request('email');
    $entreprise->situation = request('situation');
    $entreprise->name = request('name');
    $entreprise->nationnalite = request('nationnalite');
    $entreprise->lieu_habitation = request('lieu_habitation');
    $entreprise->name_gerant = request('name_gerant');
    $entreprise->prename_gerant = request('prename_gerant');
    $entreprise->capital = request('capital');
    $entreprise->nr = request('nr');
    $entreprise->cam = request('cam');
    $entreprise->caa = request('caa');
    $entreprise->name_partner = request('name_partner');
    $entreprise->secteur = request('secteur');
    $entreprise->siege = request('siege');
    $entreprise->lieu = request('lieu');
    $entreprise->datenaiss = request('datenaiss');
    $entreprise->numpiece = request('numpiece');
    $entreprise->dateexp = request('dateexp');
    $entreprise->personne_name = request('personne_name');
    $entreprise->personne_prename = request('personne_prename');
    $entreprise->personne_tel = request('personne_tel');
    $entreprise->piece_id = request('piece_id');
    $entreprise->forme_id = request('forme_id');
    $entreprise->tel = request('tel');
    $entreprise->successeur_name = request('successeur_name');
    $entreprise->successeur_prename = request('successeur_prename');
    $entreprise->successeur_tel = request('successeur_tel');
    $entreprise->code = $code;
    $entreprise->image = implode('|', $image);
  
    
    $entreprise->save();
    
        

     

    // $entreprise = Entreprise::insert([
    //     $entreprise = Entreprise::create([
    //         'tel_ent' => $request->tel_ent,
    //     'email' => $request->email,
    //     'sexe' => $request->sexe,
    //     'situation' => $request->situation,
    //     'name' => $request->name,
    //     'nationnalite' => $request->nationnalite,
    //     'lieu_habitation' => $request->lieu_habitation,
    //     // 'prename' => $request->prename,

    //     'name_gerant' => $request->name_gerant,
    //     'prename_gerant' => $request->prename_gerant,
    //     'capital' => $request->capital,
    //     'nr' => $request->nr,

    //     'cam' => $request->cam,   
    //     'caa' => $request->caa,
    //     // 'partner' => $request->partner,   
    //     // 'payment' => $request->payment,
    //     // 'credit' => $request->credit,   
    //     // 'secteur_id' => $request->secteur_id,
    //     'name_partner' => $request->name_partner,
    //     'secteur' => $request->secteur,
    //     'siege' => $request->siege,
    //     'lieu' => $request->lieu,
    //     'datenaiss' => $request->datenaiss,
    //     'numpiece' => $request->numpiece,

    //     'dateexp' => $request->dateexp,
    //     'personne_name' => $request->personne_name,
    //     'personne_prename' => $request->personne_prename,
    //     'personne_tel' => $request->personne_tel,
    //     'piece_id' => $request->piece_id,
    //     'forme_id' => $request->forme_id,
    //     'tel' => $request->tel,
    //     'successeur_name' => $request->successeur_name,
    //     'successeur_prename' => $request->successeur_prename,
    //     'successeur_tel' => $request->successeur_tel,

    //    'code' => $code, 
        
    //     'image' => implode('|', $image),
    // ]);

 
    // if($entreprise){
    //     Mail::to($entreprise->email)->send(new EntrepriseMarkdownMail($entreprise));
    // }

    // if( $entreprise ){
    //     // event(new EntrepriseHasRegisteredEvent($entreprise));
    //     Mail::to($entreprise->email)->send(new EntrepriseMarkdownMail($entreprise));
    // }
    

    // return Redirect::route('epargne_entreprise.epargne_entreprises.index');
    return Redirect::route('entreprises.index')->with('message', 'code '. $entreprise->code .'. Félicitation, les informations de l\'entreprise ' . $entreprise->name .' ont bien été enregistrées.');
    }


    public function stored(Entreprise $entreprise)
    {   

        // $chiffre =  Nut::convert_number_to_words( $depot->montantD);
        // $pieces = Piece::all();
        $confirme = new Confirme();
    
        return view('entreprise.confirm', compact('entreprise','confirme'
        // ,'pieces','chiffre'
        // ,'bonus','rachats','regain'
     ));
    }
  

public function storeded(Request $request , Entreprise $entreprise)
{   
    $confirme = new Confirme();

    $confirme->motif = request('motif');
        $confirme->entreprise_id = request('entreprise_id');

        $confirmeId =  Entreprise::where([            
            [ 'id' , '=', $confirme->entreprise_id],
        ])->first();


    
         $confirme->save();
         $confirmeId->decrement('status', 1);
   
    return Redirect::route('entreprises.index')->with('message', 'Vous avez validé');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response  
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprise.show', compact('entreprise'));
    }

    public function print(Entreprise $entreprise)
    {
 
        return view('entreprise.print', compact('entreprise'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        if (Gate::denies('edit-entreprises')){
            return redirect()->route('entreprises.index');
        } 
  
        $pieces = Piece::all();
        $entreprises = Entreprise::all();
        $formes = Forme::all();
        // $secteurs = Secteur::all();
        return view('entreprise.edit',compact(
            // 'secteurs',
            'entreprises', 'entreprise','pieces','formes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        // $entreprise = new Entreprise();
        // $image = array();
        // if($files = $request->file('image')){
        //     foreach ($files as $file) {
        //         $image_name =  md5(rand(1000, 10000));
        //         $ext = strtolower($file->getClientOriginalExtension());
        //         $image_full_name = $image_name.'.'.$ext;
        //         $upload_path = 'multiple_image/';
        //         $image_url = $upload_path.$image_full_name;
        //         $file->move($upload_path, $image_full_name);
        //         $image[] = $image_url;
        //     }
        // }
            $entreprise->sexe = $request->get('sexe');
            $entreprise->situation = $request->get('situation');
            $entreprise->name = $request->get('name');
            $entreprise->tel_ent = $request->get('tel_ent');
            $entreprise->nationnalite = $request->get('nationnalite');
            $entreprise->lieu_habitation = $request->get('lieu_habitation');
            $entreprise->nr = $request->get('nr');
             $entreprise->email = $request->get('email');
            $entreprise->lieu = $request->get('lieu');
            $entreprise->datenaiss = $request->get('datenaiss');
            $entreprise->numpiece = $request->get('numpiece');
            $entreprise->dateexp = $request->get('dateexp');
            $entreprise->personne_name = $request->get('personne_name');

            $entreprise->name_gerant = $request->get('name_gerant');
            $entreprise->prename_gerant = $request->get('prename_gerant');
            $entreprise->capital = $request->get('capital');

            $entreprise->cam = $request->get('cam');
            $entreprise->caa = $request->get('caa');
            // $entreprise->partner = $request->get('partner');
            // $entreprise->payment = $request->get('payment');
            // $entreprise->credit = $request->get('credit');
            // $entreprise->secteur_id = $request->get('secteur_id');
            $entreprise->secteur = $request->get('secteur');

            $entreprise->name_partner = $request->get('name_partner');
            $entreprise->siege = $request->get('siege');
            
            $entreprise->personne_prename = $request->get('personne_prename');
            $entreprise->personne_tel = $request->get('personne_tel');
            $entreprise->piece_id = $request->get('piece_id');
            $entreprise->forme_id = $request->get('forme_id');
            $entreprise->tel = $request->get('tel');
            $entreprise->successeur_name = $request->get('successeur_name');
            $entreprise->successeur_prename = $request->get('successeur_prename');
            $entreprise->successeur_tel = $request->get('successeur_tel');
            // $entreprise->image = implode('|', $image);

            // $code = Helper::IDGenerator(new Entreprise, 'code', 5, 'PA');
            $entreprise->code;
            $entreprise->save();

            return redirect()->route('entreprises.index')->with('message', 'code '. $entreprise->code .'. Félicitation, les informations de l\'entreprise ' . $entreprise->name .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        // if (Gate::denies('delete-entreprises')){
        //     return redirect()->route('entreprises.index');
        // }
        $entreprise->delete();
        return redirect()->route('entreprises.index')->with('message', 'code '. $entreprise->code .'. Félicitation, les informations de l\'entreprise ' . $entreprise->name .' ont bien été supprimées.');
    }

    public function restore(Entreprise $entreprise)
    {
        if (Gate::denies('delete-entreprises')){
            return redirect()->route('entreprises.index');
        }

        $partSups = Entreprise::onlyTrashed()->first();
        $partSups->restore();
        
        return redirect()->route('entreprises.index')->with('message', 'code '. $entreprise->code .'. Les informations de l\'entreprise ' . $entreprise->name .' ont bien été restaurées.');
    } 

    private function validator(){

        return request()->validate([       
            'motif' => ['required', 'string'],
            'entreprise_id' => 'required|integer',


            'sexe' => 'in:F,M',
        'situation' => 'in:Marie,Celibataire',
        'name' => ['required', 'string', 'max:255'],
        'cam' => ['required', 'string', 'max:255'],
        'caa' => ['required', 'string', 'max:255'],
        // 'partner' => 'in:Oui,Non',
        // 'payment' => 'in:Oui,Non',
        // 'credit' => 'in:Oui,Non',
        // 'secteur_id' => 'required|integer',
        'secteur' => 'required|string',
        'name_gerant' => ['required', 'string', 'max:255'],
        'capital' => ['required', 'string', 'max:255'],
        'name_partner' => ['nullable', 'string', 'max:255'],
        'siege' => ['required', 'string', 'max:255'],
        'nationnalite' => ['required', 'string', 'max:255'],
        'lieu_habitation' => ['required', 'string', 'max:255'],
        'nr' => ['required', 'string', 'max:255','unique:entreprises'],
        'tel_ent' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        'prename_gerant' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'lieu' => ['required', 'string', 'string', 'max:255'],
        'datenaiss' => ['required', 'string', 'max:255'],
        'numpiece' => ['required', 'string', 'max:255'],
        'dateexp' => ['required', 'string', 'max:255'],
        'personne_name' => ['nullable','string', 'max:255'],
        'personne_prename' =>['nullable', 'string', 'max:255'],
        'image' => 'nullable', 
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
        'personne_tel' => ['nullable', 'string', 'max:255'],
        'piece_id' => 'required|integer',
        'forme_id' => 'required|integer',
        'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        'successeur_name' => ['nullable','string', 'max:255'],  
        'successeur_prename' => ['nullable','string', 'max:255'],
        'successeur_tel' => ['nullable','string', 'max:255'],
        ]);    
    }
}
