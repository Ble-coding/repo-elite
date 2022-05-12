<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\Models\Type;
use App\Models\Piece;
use App\Models\Enfant;
use App\Helpers\Helper;  
use App\Models\Suppleant;
// use App\Mail\ParticulierDepotMail;
use App\Models\Particulier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\ParticulierMarkdownMail;
use Illuminate\Support\Facades\Redirect;
use App\Events\ParticulierHasRegisteredEvent;
use Symfony\Component\HttpFoundation\Session\Session;
// use Illuminate\Validation\Rules;

class ParticuliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {  
        $particuliers = Particulier::all();
        $partSups = Particulier::onlyTrashed()->get();


        // dd($partSups);
        return view('particulier.index', compact('particuliers','partSups'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $particulier = new Particulier();
        $suppleant = new Suppleant();
        $pieces = Piece::all();
        $types = Type::all();
        // $enfants = Enfant::where([
        //     ['particulier_id', '=', $particulier->id],
        // ])->get();
 
        return view('particulier.create', compact('particulier','pieces','types','suppleant'
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
            'situation' => 'in:Marie,Celibataire',
            'name' => ['required', 'string', 'max:255'],
            'nationnalite' => ['required', 'string', 'max:255'],
            'lieu_habitation' => ['required', 'string', 'max:255'],
            'prename' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'lieu' => ['required', 'string', 'string', 'max:255'],
            'datenaiss' => ['required', 'string', 'max:255'],
            'numpiece' => ['required', 'string', 'max:255', 'unique:particuliers'],
             'dateexp' => ['required', 'string', 'max:255'],
            'personne_name' => ['nullable', 'string', 'max:255'],
            'personne_prename' => ['nullable', 'string', 'max:255'],
            'image' => 'nullable', 
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'personne_tel' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'piece_id' => 'required|integer',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'successeur_name' => ['nullable','string', 'max:255'],  
            'successeur_prename' => ['nullable','string', 'max:255'],
            'successeur_tel' =>'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',

            'prof' => ['required', 'string', 'max:255'],
            'nom_ent'=> ['required', 'string', 'max:255'],
           'address'=> ['required', 'string', 'max:255'],
           'tel_ent' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
           'date_deb'=> ['required', 'string', 'max:255'],
            'type_id'=> 'required|integer',

            // 'enfants' => ['required', 'array'],
            // 'enfants.*.name_enfant' =>  'required',
            // 'enfants.*.prename_enfant' =>  'required',
            // 'enfants.*.age' =>  'required',
        ]);
        
           

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

         $code = Helper::IDGenerator(new Particulier, 'code', 6, '10');

        //  $code_parrain = Helper::IDGenerator(new Suppleant, 'code_parrain', 5, 'CODPA');

    
        $particulier = Particulier::create([
            'sexe' => $request->sexe,
            'situation' => $request->situation,
            'name' => $request->name,
            'nationnalite' => $request->nationnalite,
            'lieu_habitation' => $request->lieu_habitation,
            'prename' => $request->prename,

            'email' => $request->email,
            'lieu' => $request->lieu,
            'datenaiss' => $request->datenaiss,
            'numpiece' => $request->numpiece,

            'dateexp' => $request->dateexp,
            'personne_name' => $request->personne_name,
            'personne_prename' => $request->personne_prename,
            'personne_tel' => $request->personne_tel,
            'piece_id' => $request->piece_id,

            'tel' => $request->tel,
            'successeur_name' => $request->successeur_name,
            'successeur_prename' => $request->successeur_prename,
            'successeur_tel' => $request->successeur_tel,

            
            'prof' => $request->prof,
            'nom_ent'=> $request->nom_ent,
           'address'=> $request->address,
           'tel_ent' => $request->tel_ent,
           'date_deb'=> $request->date_deb,
            'type_id'=> $request->type_id,

            'code' => $code,
            
            'image' => implode('|', $image),

        ]);
  
        if( $particulier ){
            // event(new ParticulierHasRegisteredEvent($particulier));
            Mail::to($particulier->email)->send(new ParticulierMarkdownMail($particulier));
        }
        
 
        // $suppleant = Suppleant::create([
        //     'name' => $request->name,
        //     'prename' => $request->prename,
        //     'email' => $request->email,
        //     'tel' => $request->tel,      
        //     'prof' => $request->prof,
        //     'code_parrain' => $code_parrain,
        // ]);

        // if( $particulier ){
        //     // Mail::to($particulier->email)->send(new ParticulierDepotMail($particulier));
        //     Mail::to($particulier->email)->send(new ParticulierMarkdownMail($particulier));
        //     // event(new ParticulierHasRegisteredEvent($particulier));
        // }
        
        // foreach ($request->enfants as $key => $value) {
        //     Enfant::create($value);
        // }

        // $response = array();
        // foreach($enfants as $enfant){
        //   $response[] = array(
        //     "name_enfant"=>$enfant->name_enfant,
        //     "prename_enfant"=>$enfant->prename_enfant,
        //     "age"=>$enfant->age,
        //   );
        // }

        // $particulier->enfants()->createMany([
        //     'name_enfant'   =>  $request->name_enfant,
        //     'prename_enfant'   => $request->prename_enfant,
        //     'age'  => $request->age,  
        // ]);


        // foreach($productPrice['unit_id'] as $k => $unit) {
         

    //     $name_enfant = $request->name_enfant;
    // foreach( $name_enfant as $key=>$insert ) {
    //     $enfants = Enfant::where([
    //             ['particulier_id', '=', $particulier->id],
    //          ])->insert([
    //         'name_enfant' => $name_enfant[$key],
    //         'prename_enfant' => $request->prename_enfant[$key],
    //         'age' => $request->age[$key],                  
    //     ]);

    // }
   
        // foreach($request->input('enfants') as $enfant)
        // {
        //     $enfant['particulier_id'] = $particulier->id;
        //     Enfant::create($enfant);
        // }

        return Redirect::route('particuliers.index')->with('message', 'code '. $particulier->code .'. Félicitation, les informations du client ' . $particulier->name . ' '. $particulier->prename.' ont bien été enregistrées.');
    }

    public function print(Particulier $particulier)
    {
 
        return view('particulier.print', compact('particulier'));
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Particulier $particulier)
    {
          // if (Gate::denies('show-particuliers')){
        //     return redirect()->route('epargne.particulier.index');
        // }
 
        return view('particulier.show', compact('particulier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Particulier $particulier)
    {
        if (Gate::denies('edit-particuliers')){
            return redirect()->route('particulier.index');
        } 

        $pieces = Piece::all();
        $types = Type::all();
        return view('particulier.edit',compact('particulier','pieces','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Particulier $particulier)
    {
        //    $particulier = new Particulier();
            $particulier->sexe = $request->get('sexe');
            $particulier->situation = $request->get('situation');
            $particulier->name = $request->get('name');
            $particulier->nationnalite = $request->get('nationnalite');
            $particulier->lieu_habitation = $request->get('lieu_habitation');
            $particulier->prename = $request->get('prename');

             $particulier->email = $request->get('email');
            $particulier->lieu = $request->get('lieu');
            $particulier->datenaiss = $request->get('datenaiss');
            $particulier->numpiece = $request->get('numpiece');
            $particulier->dateexp = $request->get('dateexp');
            $particulier->personne_name = $request->get('personne_name');

            $particulier->personne_prename = $request->get('personne_prename');
            $particulier->personne_tel = $request->get('personne_tel');
            $particulier->piece_id = $request->get('piece_id');
            $particulier->tel = $request->get('tel');
            $particulier->successeur_name = $request->get('successeur_name');
            $particulier->successeur_prename = $request->get('successeur_prename');
            $particulier->successeur_tel = $request->get('successeur_tel');
               
            $particulier->prof = $request->get('prof');
            $particulier->nom_ent = $request->get('nom_ent');
            $particulier->address = $request->get('address');
            $particulier->tel_ent = $request->get('tel_ent');
            $particulier->date_deb = $request->get('date_deb');
            $particulier->type_id = $request->get('type_id');

            $particulier->code;
            // Helper::IDGenerator(new Particulier, 'code', 5, 'PA');
            // $particulier->code = $code;
            // // $image = array();
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
            // $particulier->image = implode('|', $image);


            $particulier->save();

            return redirect()->route('particuliers.index')->with('message', 'code '. $particulier->code .'. Les informations du client ' . $particulier->name . ' '. $particulier->prename.' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Particulier $particulier)
    {
        // if (Gate::denies('delete-particuliers')){
        //     return redirect()->route('particuliers.index');
        // }
        $particulier->delete();

        return redirect()->route('particuliers.index')->with('message', 'code '. $particulier->code .'. Les informations du client ' . $particulier->name . ' '. $particulier->prename.' ont bien été supprimées.');
    } 
 
    public function restore(Particulier $particulier)
    {
        if (Gate::denies('delete-particuliers')){
            return redirect()->route('particuliers.index');
        }

        $partSups = Particulier::onlyTrashed()->first();
        $partSups->restore();
        
        return redirect()->route('particuliers.index')->with('message', 'code '. $particulier->code .'. Les informations du client ' . $particulier->name . ' '. $particulier->prename.' ont bien été restaurées.');
    } 

    // public function restoreAll()
    // {
    //     if (Gate::denies('delete-particuliers')){
    //         return redirect()->route('particuliers.index');
    //     }


    //     $particulier = Particulier::withTrashed()->restore();
        
    //     return redirect()->route('particuliers.index')->with('message', 'code '. $particulier->code .'. Les informations du client ' . $particulier->name . ' '. $particulier->prename.' ont bien été supprimées.');
    // } 

    // public function mail(){
    //     Mail::to('test@test.com')->send(new ParticulierDepotMail());
    //     return view('particulier.index');
    // }
}
