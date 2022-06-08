<?php

namespace App\Http\Controllers;

use Validator;
use Carbon\Carbon;
use App\Models\Type;
use App\Models\Piece;
use App\Models\Client;
use App\Helpers\Helper;  
use App\Models\Suppleant;
use App\Models\Confirmate;
use Illuminate\Http\Request;
use App\Mail\ClientMarkdownMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Events\ClientHasRegisteredEvent;
use Illuminate\Support\Facades\Redirect;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clients = Client::all();
        $clients = Client::where('status', 1)->get();
        $listClients = Client::where('status', 0)->get();
        $partSups = Client::onlyTrashed()->get();

        return view('client.index', compact('clients','partSups','listClients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        $pieces = Piece::all();
        $types = Type::all();
        // $suppleant = new Suppleant();

        return view('client.create', compact('client','pieces','types'
        // 'suppleant'
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
        $client = new Client();
        // $request->validate([
        //     'sexe' => 'in:F,M',
        //     'situation' => 'in:Marie,Celibataire',
        //     'name' => ['required', 'string', 'max:255'],
        //     'nationnalite' => ['required', 'string', 'max:255'],
        //     'lieu_habitation' => ['required', 'string', 'max:255'],
        //     'prename' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'lieu' => ['required', 'string', 'string', 'max:255'],
        //     'datenaiss' => ['required', 'string', 'max:255'],
        //     'numpiece' => ['required', 'string', 'max:255', 'unique:clients'],
        //      'dateexp' => ['required', 'string', 'max:255'],
        //     'personne_name' => ['nullable', 'string', 'max:255'],
        //     'personne_prename' => ['nullable', 'string', 'max:255'],
        //     'image' => 'nullable', 
        //     'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'personne_tel' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        //     'piece_id' => 'required|integer',
        //     'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        //     'successeur_name' => ['nullable','string', 'max:255'],  
        //     'successeur_prename' => ['nullable','string', 'max:255'],
        //     'successeur_tel' =>'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',

        //     'prof' => ['required', 'string', 'max:255'],
        //     'nom_ent'=> ['required', 'string', 'max:255'],
        //    'address'=> ['required', 'string', 'max:255'],
        //    'tel_ent' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        //    'date_deb'=> ['required', 'string', 'max:255'],
        //     'type_id'=> 'required|integer',
        //     // 'code' => ['required', 'string', 'max:255','unique:clients'],
        // ]);
        $code = Helper::IDGenerator(new Client, 'code', 6, '20');
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

        $client->name = request('name');
        $client->prename = request('prename');
        $client->datenaiss = request('datenaiss');
        $client->lieu = request('lieu');
        $client->tel = request('tel');
        $client->email = request('email');
        $client->nationnalite = request('nationnalite');
        $client->sexe = request('sexe');
        $client->lieu_habitation = request('lieu_habitation');
        $client->situation = request('situation');
        $client->successeur_name = request('successeur_name');
        $client->successeur_prename = request('successeur_prename');
        $client->successeur_tel = request('successeur_tel');
        $client->personne_name = request('personne_name');
        $client->prof = request('prof');
        $client->nom_ent = request('nom_ent');
        $client->address = request('address');
        $client->tel_ent = request('tel_ent');
        $client->date_deb = request('date_deb');
        $client->personne_prename = request('personne_prename');
        $client->personne_tel = request('personne_tel');
        $client->piece_id = request('piece_id');
        $client->type_id = request('type_id');
        $client->numpiece = request('numpiece');
        $client->dateexp = request('dateexp');
        $client->code = $code;
        $client->image = implode('|', $image);
  
    
         $client->save();


        // $code = Helper::IDGenerator(new Client, 'code', 8, '');
        

        // $code_parrain = Helper::IDGenerator(new Suppleant, 'code_parrain', 5, 'CODRT');
        
        // $client = Client::create([
        //     'sexe' => $request->sexe,
        //     'situation' => $request->situation,
        //     'name' => $request->name,
        //     'nationnalite' => $request->nationnalite,
        //     'lieu_habitation' => $request->lieu_habitation,
        //     'prename' => $request->prename,

        //     'email' => $request->email,
        //     'lieu' => $request->lieu,
        //     'datenaiss' => $request->datenaiss,
        //     'numpiece' => $request->numpiece,

        //     'dateexp' => $request->dateexp,
        //     'personne_name' => $request->personne_name,
        //     'personne_prename' => $request->personne_prename,
        //     'personne_tel' => $request->personne_tel,
        //     'piece_id' => $request->piece_id,

        //     'tel' => $request->tel,
        //     'successeur_name' => $request->successeur_name,
        //     'successeur_prename' => $request->successeur_prename,
        //     'successeur_tel' => $request->successeur_tel,

              
        //     'prof' => $request->prof,
        //     'nom_ent'=> $request->nom_ent,
        //    'address'=> $request->address,
        //    'tel_ent' => $request->tel_ent,
        //    'date_deb'=> $request->date_deb,
        //     'type_id'=> $request->type_id,


        //     'code' => $code,
            
        //     'image' => implode('|', $image),
        // ]);

   

        // if( $client ){
            // event(new ClientHasRegisteredEvent($client));
        //     Mail::to($client->email)->send(new ClientMarkdownMail($client));
        // }
        

        return Redirect::route('clients.index')->with('message', 'code '. $client->code .'. Félicitation, les informations du client ' . $client->name . ' '. $client->prename.' ont bien été enregistrées.');

    }

    public function stored(Client $client)
    {   

        // $chiffre =  Nut::convert_number_to_words( $depot->montantD);
        // $pieces = Piece::all();
        $confirmate = new Confirmate();
    
        return view('client.confirm', compact('client','confirmate'
        // ,'pieces','chiffre'
        // ,'bonus','rachats','regain'
     ));
    }
  

public function storeded(Request $request , Client $client)
{   
    $confirmate = new Confirmate();

    $confirmate->motif = request('motif');
        $confirmate->client_id = request('client_id');

        $confirmateId =  Client::where([            
            [ 'id' , '=', $confirmate->client_id],
        ])->first();


    
         $confirmate->save();
         $confirmateId->decrement('status', 1);
   
    return Redirect::route('clients.index')->with('message', 'Vous avez validé');
    }


    public function print(Client $client)
    {
 
        return view('client.print', compact('client'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
          // if (Gate::denies('show-particuliers')){
        //     return redirect()->route('epargne.particulier.index');
        // }
 
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        if (Gate::denies('edit-clients')){
            return redirect()->route('client.index');
        } 

        $pieces = Piece::all();
        $types = Type::all();
        return view('client.edit',compact('client','pieces','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Client $client)
    {
        //    $client = new Client();
            $client->sexe = $request->get('sexe');
            $client->situation = $request->get('situation');
            $client->name = $request->get('name');
            $client->nationnalite = $request->get('nationnalite');
            $client->lieu_habitation = $request->get('lieu_habitation');
            $client->prename = $request->get('prename');

             $client->email = $request->get('email');
            $client->lieu = $request->get('lieu');
            $client->datenaiss = $request->get('datenaiss');
            $client->numpiece = $request->get('numpiece');
            $client->dateexp = $request->get('dateexp');
            $client->personne_name = $request->get('personne_name');

            $client->personne_prename = $request->get('personne_prename');
            $client->personne_tel = $request->get('personne_tel');
            $client->piece_id = $request->get('piece_id');
            $client->tel = $request->get('tel');
            $client->successeur_name = $request->get('successeur_name');
            $client->successeur_prename = $request->get('successeur_prename');
            $client->successeur_tel = $request->get('successeur_tel');

            $client->prof = $request->get('prof');
            $client->nom_ent = $request->get('nom_ent');
            $client->address = $request->get('address');
            $client->tel_ent = $request->get('tel_ent');
            $client->date_deb = $request->get('date_deb');
            $client->type_id = $request->get('type_id');


            $code = Helper::IDGenerator(new Client, 'code', 6, '20');
            $client->code = $code;

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

            // $client->image = implode('|', $image);


            $client->save();

            return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        // if (Gate::denies('delete-clients')){
        //     return redirect()->route('clients.index');
        // }
        $client->delete();
        return redirect()->route('clients.index');
    }

    public function restore(Client $client)
    {
        if (Gate::denies('delete-clients')){
            return redirect()->route('clients.index');
        }
        // dd($client);
        
        $partSups = Client::onlyTrashed()->first();
        $partSups->restore();
        
        return redirect()->route('clients.index')->with('message', 'code '. $client->code .'. Les informations du client ' . $client->name . ' '. $client->prename.' ont bien été restaurées.');
    } 


    private function validator(){

        return request()->validate([       
            'motif' => ['required', 'string'],
            'client_id' => 'required|integer',


            'sexe' => 'in:F,M',
            'situation' => 'in:Marie,Celibataire',
            'name' => ['required', 'string', 'max:255'],
            'nationnalite' => ['required', 'string', 'max:255'],
            'lieu_habitation' => ['required', 'string', 'max:255'],
            'prename' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'lieu' => ['required', 'string', 'string', 'max:255'],
            'datenaiss' => ['required', 'string', 'max:255'],
            'numpiece' => ['required', 'string', 'max:255', 'unique:clients'],
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
        ]);    
    }
}
