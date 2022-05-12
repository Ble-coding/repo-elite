<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Type;
use App\Models\Piece;
use App\Models\Customer;
use App\Helpers\Helper;  
use App\Models\Suppleant;
use Illuminate\Http\Request; 
use App\Mail\CustomerMarkdownMail;
use App\Events\CustomerCreatedEvent;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvestissementMarkdownMail;
use Illuminate\Support\Facades\Redirect;


class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $partSups = Customer::onlyTrashed()->get();
        // $posts = Customer::withTrashed()->where('id', 1)->restore();

        // dd($partSups);

        // $customers = Customer::withcount('investissements')->with('investissements')->get();
        return view('customer.index', compact('customers','partSups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = new Customer();
        $pieces = Piece::all();
        $types = Type::all();

        return view('customer.create', compact('customer','pieces','types'));
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
            'numpiece' => ['required', 'string', 'max:255'],
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
            // 'code' => ['required', 'string', 'max:255','unique:customers'],
          
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

        $code = Helper::IDGenerator(new Customer, 'code', 6, '30');
        // $code_parrain = Helper::IDGenerator(new Suppleant, 'code_parrain', 5, 'CODCU');

        $customer = Customer::create([
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

        // $suppleant = Suppleant::create([
        //     'name' => $request->name,
        //     'prename' => $request->prename,
        //     'email' => $request->email,
        //     'tel' => $request->tel,      
        //     'prof' => $request->prof,
        //     'code_parrain' => $code_parrain,
        // ]);

 
        if( $customer ){
               // event(new CustomerCreatedEvent($customer));
            Mail::to($customer->email)->send(new CustomerMarkdownMail($customer));
        }
        

        return Redirect::route('customers.index')->with('message', 'code-client '. $customer->code.'. Félicitation, les informations du client ' . $customer->name . ' ' . $customer->prename . ' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
 
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        // if (Gate::denies('edit-customers')){
        //     return redirect()->route('customer.index');
        // } 

        $pieces = Piece::all();
        $types = Type::all();
        return view('customer.edit',compact('customer','pieces','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->sexe = $request->get('sexe');
        $customer->situation = $request->get('situation');
        $customer->name = $request->get('name');
        $customer->nationnalite = $request->get('nationnalite');
        $customer->lieu_habitation = $request->get('lieu_habitation');
        $customer->prename = $request->get('prename');

         $customer->email = $request->get('email');
        $customer->lieu = $request->get('lieu');
        $customer->datenaiss = $request->get('datenaiss');
        $customer->numpiece = $request->get('numpiece');
        $customer->dateexp = $request->get('dateexp');
        $customer->personne_name = $request->get('personne_name');

        $customer->personne_prename = $request->get('personne_prename');
        $customer->personne_tel = $request->get('personne_tel');
        $customer->piece_id = $request->get('piece_id');
        $customer->tel = $request->get('tel');
        $customer->successeur_name = $request->get('successeur_name');
        $customer->successeur_prename = $request->get('successeur_prename');
        $customer->successeur_tel = $request->get('successeur_tel');

        $customer->prof = $request->get('prof');
        $customer->nom_ent = $request->get('nom_ent');
        $customer->address = $request->get('address');
        $customer->tel_ent = $request->get('tel_ent');
        $customer->date_deb = $request->get('date_deb');
        $customer->type_id = $request->get('type_id');


        // $code = Helper::IDGenerator(new Customer, 'code', 5, 'RT');
        $customer->code;

        // $image = array();
        // if($files = $request->file('image')){
        //     foreach ($files as $file) {
        //         $image_name =  md5(rand(1000, 10000));
        //         $ext = strtolower($file->getcustomerOriginalExtension());
        //         $image_full_name = $image_name.'.'.$ext;
        //         $upload_path = 'multiple_image/';
        //         $image_url = $upload_path.$image_full_name;
        //         $file->move($upload_path, $image_full_name);
        //         $image[] = $image_url;
        //     }
        // }

        // $customer->image = implode('|', $image);


        $customer->save();

        return redirect()->route('customers.index')->with('message', 'code '. $customer->code .'. Les informations du client ' . $customer->name . ' '. $customer->prename.' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        // if (Gate::denies('delete-customers')){
        //     return redirect()->route('customers.index');
        // }
        $customer->delete();
        return redirect()->route('customers.index')->with('message', 'code '. $customer->code .'. Les informations du client ' . $customer->name . ' '. $customer->prename.' ont bien été supprimées.');
    
        //
    }

    public function restore(Customer $customer)
    {
        if (Gate::denies('delete-customers')){
            return redirect()->route('customers.index');
        }

        $partSups = Customer::onlyTrashed()->first();
        $partSups->restore();
        // Customer::withTrashed()->where('id', $customer)->restore();
 
// dd($customer->id);   
     return redirect()->route('customers.index')->with('message', 'code '. $customer->code .'. Les informations du client ' . $customer->name . ' '. $customer->prename.' ont bien été restaurées.');
    } 

    // public function restore(Customer $customer) 
    // {
    // // $customer   = Customer::withTrashed()->where('id', $customer)->restore();

    // // $partSups = Customer::onlyTrashed()->first();
    // //     $partSups->restore();

    //     // $model = Customer::onlyTrashed()->find($customer);
        
 

    //     return redirect()->route('customers.index')->with('message', 'code '. $customer->code .'. Les informations du client ' . $customer->name . ' '. $customer->prename.' ont bien été restaurées.');
    // } 
}
