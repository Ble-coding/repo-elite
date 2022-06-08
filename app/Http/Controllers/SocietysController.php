<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Forme;
use App\Helpers\Helper;
use App\Models\Confire;
use App\Models\Piece;  
use App\Models\Secteur;
use App\Models\Society;
use Illuminate\Http\Request;
use App\Mail\SocietyMarkdownMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Events\SocietyHasRegisteredEvent;
 
class SocietysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $societys = Society::all();
        $societys = Society::where('status', 1)->get();
        $listSocietys = Society::where('status', 0)->get();
        $partSups = Society::onlyTrashed()->get();
        return view('society.index', compact('societys','partSups','listSocietys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $society = new Society();
        $pieces = Piece::all();
        $formes = Forme::all();
        // $secteurs = Secteur::all();


        return view('society.create', compact('society','pieces','formes',
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
        // 'situation' => 'in:Marie,Celibataire',
        // 'name' => ['required', 'string', 'max:255'],
        // 'cam' => ['required', 'string', 'max:255'],
        // 'caa' => ['required', 'string', 'max:255'],
        // 'partner' => 'in:Oui,Non',
        // 'payment' => 'in:Oui,Non',
        // 'credit' => 'in:Oui,Non',
        // // 'secteur_id' => 'required|integer',
        // 'secteur' => 'required|string',
        // 'name_gerant' => ['required', 'string', 'max:255'],
        // 'capital' => ['required', 'string', 'max:255'],
        // // 'nc' => ['required', 'string', 'max:255'],
        // 'siege' => ['required', 'string', 'max:255'],
        // 'nationnalite' => ['required', 'string', 'max:255'],
        // 'lieu_habitation' => ['required', 'string', 'max:255'],
        // 'nr' => ['required', 'string', 'max:255', 'unique:societies'],
        // // 'ri' => ['required', 'string', 'max:255'],
        // 'prename_gerant' => ['required', 'string', 'max:255'],
        // 'email' => ['required', 'string', 'email', 'max:255'],
        // 'lieu' => ['required', 'string', 'string', 'max:255'],
        // 'datenaiss' => ['required', 'string', 'max:255'],
        // 'numpiece' => ['required', 'string', 'max:255'],
        // 'dateexp' => ['required', 'string', 'max:255'],
        // 'personne_name' => ['nullable', 'string', 'max:255'],
        // 'personne_prename' => ['nullable', 'string', 'max:255'],
        // 'image' => 'nullable', 
        // 'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
        // 'personne_tel' => ['nullable', 'string', 'max:255'],
        // 'piece_id' => 'required|integer',
        // 'forme_id' => 'required|integer',
        // 'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        // 'successeur_name' => ['nullable','string', 'max:255'],  
        // 'successeur_prename' => ['nullable','string', 'max:255'],
        // 'successeur_tel' => ['nullable','string', 'max:255'],
        // 'name_partner' => ['nullable', 'string', 'max:255'],
        // 'tel_ent' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        // ]);
        $society = new Society();

        $code = Helper::IDGenerator(new Society, 'code', 6, '21');
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
    
        $society->tel_ent = request('tel_ent');
        $society->email = request('email');
        $society->situation = request('situation');
        $society->name = request('name');
        $society->nationnalite = request('nationnalite');
        $society->lieu_habitation = request('lieu_habitation');
        $society->name_gerant = request('name_gerant');
        $society->prename_gerant = request('prename_gerant');
        $society->capital = request('capital');
        $society->nr = request('nr');
        $society->cam = request('cam');
        $society->caa = request('caa');
        $society->name_partner = request('name_partner');
        $society->secteur = request('secteur');
        $society->siege = request('siege');
        $society->lieu = request('lieu');
        $society->datenaiss = request('datenaiss');
        $society->numpiece = request('numpiece');
        $society->dateexp = request('dateexp');
        $society->personne_name = request('personne_name');
        $society->personne_prename = request('personne_prename');
        $society->personne_tel = request('personne_tel');
        $society->piece_id = request('piece_id');
        $society->forme_id = request('forme_id');
        $society->tel = request('tel');
        $society->successeur_name = request('successeur_name');
        $society->successeur_prename = request('successeur_prename');
        $society->successeur_tel = request('successeur_tel');
        $society->code = $code;
        $society->image = implode('|', $image);
      
        
        $society->save();
        
       

        // $society = Society::create([
        //     'email' => $request->email,
        //     'sexe' => $request->sexe,
        //     'tel_ent' => $request->tel_ent,
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
        //     'partner' => $request->partner,   
        //     'payment' => $request->payment,
        //     'credit' => $request->credit,   
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


        // if( $society ){        
            // event(new SocietyHasRegisteredEvent($society));
        //     Mail::to($society->email)->send(new SocietyMarkdownMail($society));
        // }
    
        return Redirect::route('societies.index')->with('message', 'code '. $society->code .'. Félicitation, les informations de la society ' . $society->name .' ont bien été enregistrées.');
    }


    public function stored(Society $society)
    {   

        // $chiffre =  Nut::convert_number_to_words( $depot->montantD);
        // $pieces = Piece::all();
        $confire = new Confire();
    
        return view('society.confirm', compact('society','confire'
        // ,'pieces','chiffre'
        // ,'bonus','rachats','regain'
     ));
    }
  

public function storeded(Request $request , Society $society)
{   
    $confire = new Confire();

    $confire->motif = request('motif');
        $confire->society_id = request('society_id');

        $confireId =  Society::where([            
            [ 'id' , '=', $confire->society_id],
        ])->first();


    
         $confire->save();
         $confireId->decrement('status', 1);
   
    return Redirect::route('societies.index')->with('message', 'Vous avez validé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Society $society)
    {
        return view('society.show', compact('society'));
    }


    public function print(Society $society)
    {
 
        return view('society.print', compact('society'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Society $society)
    {
        if (Gate::denies('edit-societys')){
            return redirect()->route('societies.index');
        } 

        $pieces = Piece::all();
        $societys = Society::all();
        $formes = Forme::all();
        // $secteurs = Secteur::all();
        return view('society.edit',compact(
            // 'secteurs',
            'societys', 'society','pieces','formes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Society $society)
    {
        // $society = new Society();
        $society->sexe = $request->get('sexe');
        $society->situation = $request->get('situation');
        $society->tel_ent = $request->get('tel_ent');
        $society->name = $request->get('name');
        $society->nationnalite = $request->get('nationnalite');
        $society->lieu_habitation = $request->get('lieu_habitation');
        $society->nr = $request->get('nr');
         $society->email = $request->get('email');
        $society->lieu = $request->get('lieu');
        $society->datenaiss = $request->get('datenaiss');
        $society->numpiece = $request->get('numpiece');
        $society->dateexp = $request->get('dateexp');
        $society->personne_name = $request->get('personne_name');

        $society->name_gerant = $request->get('name_gerant');
        $society->prename_gerant = $request->get('prename_gerant');
        $society->capital = $request->get('capital');

        $society->cam = $request->get('cam');
        $society->caa = $request->get('caa');
        $society->partner = $request->get('partner');
        $society->payment = $request->get('payment');
        $society->credit = $request->get('credit');
        // $society->secteur_id = $request->get('secteur_id');
        $society->secteur = $request->get('secteur');

        $society->name_partner = $request->get('name_partner');
        $society->siege = $request->get('siege');
        
        $society->personne_prename = $request->get('personne_prename');
        $society->personne_tel = $request->get('personne_tel');
        $society->piece_id = $request->get('piece_id');
        $society->forme_id = $request->get('forme_id');
        $society->tel = $request->get('tel');
        $society->successeur_name = $request->get('successeur_name');
        $society->successeur_prename = $request->get('successeur_prename');
        $society->successeur_tel = $request->get('successeur_tel');
        // $society->image = implode('|', $image);
            // $code = Helper::IDGenerator(new Society, 'code', 5, 'TR');

        $society->code;



            $society->save();

            return redirect()->route('societies.index')->with('message', 'code '. $society->code .'. Félicitation, les informations de la societé ' . $society->name .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Society $society)
    {
        // if (Gate::denies('delete-societys')){
        //     return redirect()->route('societies.index');
        // }
        $society->delete();
        return redirect()->route('societies.index')->with('message', 'code '. $society->code .'. Félicitation, les informations de la societé ' . $society->name .' ont bien été supprimées.');
    }

    public function restore(Society $society)
    {
        if (Gate::denies('delete-societys')){
            return redirect()->route('societys.index');
        }

        $partSups = Society::onlyTrashed()->first();
        $partSups->restore();
        
        return redirect()->route('societies.index')->with('message', 'code '. $society->code .'. Les informations de la societé ' . $society->name .' ont bien été restaurées.');
    } 

    private function validator(){

        return request()->validate([       
            'motif' => ['required', 'string'],
            'society_id' => 'required|integer',


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
        'nr' => ['required', 'string', 'max:255','unique:societies'], 
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
