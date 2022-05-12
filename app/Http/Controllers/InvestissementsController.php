<?php

namespace App\Http\Controllers; 

use App\Models\Trac;

use NumberFormatter;
use App\Models\Bonus;
use App\Models\Somme;
use App\Models\Client;
// use Illuminate\Support\Facades\Mail; 
use App\Models\Recept;
use App\Helpers\Helper;
use App\Models\Forfait;
use App\Models\Society;
use App\Models\Customer;
use App\Models\Diminish;
use App\Models\Suppleant;
use App\Models\Parrainage;
use App\Models\Particulier;
use Illuminate\Http\Request;
use App\Models\Investissement;
use Illuminate\Support\Carbon;
use App\Mail\BonusMarkdownMail;
use App\Mail\InvestMarkdownMail;
use App\Mail\DiminishMarkdownMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class InvestissementsController extends Controller
{

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        
        $sumMontantInvesti = DB::table('sommes')->sum('montant');

//         $investis = DB::table('investissements')     
//         ->join('sommes', 'investissements.customer_id', '=', 'sommes.customer_id')
//         ->join('customers', 'investissements.customer_id', '=', 'customers.id')
//         ->join('forfaits', 'investissements.forfait_id', '=', 'forfaits.id')
//         ->join('suppleants', 'investissements.suppleant_id', '=', 'suppleants.id')
//     ->select('investissements.*', 'investissements.id  AS ID', 'forfaits.*', 'sommes.montant AS total_quantity', 'customers.name',
//     'customers.prename', 'customers.tel',
//      'customers.code','customers.id',
//      'customers.email' , 'suppleants.name AS name_parrain',
//      'suppleants.prename AS prename_parrain', 'suppleants.tel AS tel_parrain'
//      , 'suppleants.code_parrain','suppleants.prof AS prof_parrain'
//      , 'suppleants.email AS email_parrain')
//    ->get();

         $investis = Investissement::where('status', 1)->with('client','customer','suppleant','forfait')
        ->get();

        $transactions = Investissement::where('status', 0)->with('customer','suppleant','forfait')
        ->get();

        $sommes = Somme::where('status', 1)->with('customer','forfait')
        ->get();

      


    //     $custom = Customer::all();
    //     $particuliers = Particulier::all();
    //     $clients = Client::all();

    //     $result = $clients->merge($custom);
    //     $result1 = $clients->merge($particuliers);

    //   dd($result1);

 $customs = Customer::selectRaw("
            id ,
            code ,prename ,email , tel ,name
        ");
$clients = Client::selectRaw("
        id ,
        code ,prename ,email , tel ,name
    ");

$particuliers = Particulier::selectRaw("
    id ,
    code ,prename ,email , tel ,name
")->unionAll($clients)
->unionAll($customs)
->groupBy('id')
->groupBy('code')
->groupBy('name')
->groupBy('prename')
->groupBy('tel')
->groupBy('email')
->get();

// dd($particuliers);

// $customs = Customer::select(['id','code','name','prename','email','tel'])->get();
// $tables = Particulier::select(['id','code','name','prename','email','tel'])->get();
// $clients = Client::select(['id','code','name','prename','email','tel'])->get();
// $particuliers  = $customs->merge($tables)->merge($clients);
// $particuliers  = $particuliers->sortBy('create_at');

// $particules = Particulier::select(['id','code','name','prename','email','tel'])->get();
// $customs = Customer::select(['id','code','name','prename','email','tel'])->get();
// $clients = Client::select(['id','code','name','prename','email','tel'])->get();

// $particuliers = $particules
//             ->merge($customs)
//             ->merge($clients);






// $formatter = NumberFormatter::create('fr_FR', \NumberFormatter::SPELLOUT);
// $formatter->setAttribute(\NumberFormatter::FRACTION_DIGITS, 0);
// $formatter->setAttribute(\NumberFormatter::ROUNDING_MODE, \NumberFormatter::ROUND_HALFUP);
 
// dd($formatter->format(1522530)); 


    // dd($particuliers);  

        // $customers = $result->merge($clients);

 
        $suppleants = Customer::all();
        // $custome = Customer::get();
        // $particulieres = Particulier::get();

        // $resulte = $custome->merge($particulieres);

        // $clientse = Client::get();

        // $suppleants = $resulte->merge($clientse);
     


        $investi = new Investissement();
        $forfaits = Forfait::all();

       
        $diminishes = Diminish::with('customer','forfait')
        ->get();

    

     
    //     $diminishes = DB::table('diminishes')
    //         ->join('sommes', 'diminishes.customer_id', '=', 'sommes.customer_id')
    //         ->join('customers', 'diminishes.customer_id', '=', 'customers.id')
    //         ->join('forfaits', 'diminishes.forfait_id', '=', 'forfaits.id')
    //         // ->join('suppleants', 'diminishes.suppleant_id', '=', 'suppleants.id')
    //     ->select('diminishes.*', 'forfaits.*', 'sommes.montant AS total_quantity', 'customers.name',
    //     'customers.prename', 'customers.tel',
    //     'customers.code',
    //     'customers.email' 
    //     //  , 'suppleants.name AS name_parrain',
    //     //  'suppleants.prename AS prename_parrain', 'suppleants.tel AS tel_parrain'
    //     //  , 'suppleants.code_parrain','suppleants.prof AS prof_parrain'
    //     //  , 'suppleants.email AS email_parrain'
    //     )
    // ->get();
    //    $now = now();

 

    //  dd($customers);

    return view('investi.index' , compact('investis', 'investi', 'particuliers', 'forfaits',
    'diminishes', 'sumMontantInvesti','suppleants','sommes','transactions',
        ));
  

       
    }  


     public function initial()
    {  
        $bonus = Bonus::with('customer')->where('total', '!=', 0)->get();
        $tracs = Trac::with('customer')->get();
        $recepts = Recept::with('customer')->get();
        return view('investi.initial' , compact('bonus','tracs','recepts'));
    }

    public function edited(Bonus $investi)
    {   
    return view('investi.recept', compact('investi'));
    }

 
    public function enregistre(Request $request, Bonus $investi)
    {
      
        
        $total = Bonus::where('id', request('code_bonus'))->select('total')->first()['total'];

        // dd(request('code_bonus'));
                $recept = new Recept();
                $recept->code_bonus  = request('code_bonus'); 
                $recept->customer_id  = request('customer_id');

        $solde = Bonus::where([
            ['customer_id', '=',  $recept->customer_id],
             ['id', '=',  $recept->code_bonus],
        ])->with('customer')->first();

   
              if($solde) 
              {  
                $recept->montant = $total;
                $recept->save();
                $solde->decrement('total', $recept->montant);
                Mail::to($solde->customer->email)->send(new BonusMarkdownMail($investi));
              }     
               
       

    return redirect()->route('investir.bonus.initial')->with('message', 'Félicitation, le retrait de bonus de '.$solde->customer->name . ' '. $solde->customer->prename.' a bien été enregistré.');
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

        
            $investi = new Investissement();
           
            $bonus = Parrainage::where('id', 1)->select('bonus')->first()['bonus'];
            $duree = Forfait::where('id', request('forfait_id'))->select('duree')->first()['duree'];
            $pourcentageJ = Forfait::where('id', request('forfait_id'))->select('pourcentageJ')->first()['pourcentageJ'];
            $pourcentageM = Forfait::where('id', request('forfait_id'))->select('pourcentageM')->first()['pourcentageM'];            
            $min = Forfait::where('id', request('forfait_id'))->select('montantMin')->first()['montantMin'];
            $max = Forfait::where('id', request('forfait_id'))->select('montantMax')->first()['montantMax'];

            $investi->choix = request('choix');
            // $investi->status = 1;
            $investi->investiman = request('investiman');
            $investi->jalon = request('jalon');

            if ($investi->jalon == 'Oui') {
                $investi->compteur = 1;
            } else{ 
                $investi->compteur = $duree;
            }
            
            // if($investi->jalon == 'Oui'){
            //     $investiJt = ($investi->montant * $pourcentageJ ) / 100 ;
            //     $investiJ =  $investiJt + $investi->montant;
            //     $investi->retire =   $investiJ;
            // } else{
              
            //     $retire = (($investi->montant * ($pourcentageM * $duree) /100 ) / 2);
            //     $investi->retire = $retire;
            //     // $sommeMm = ($somme->montant * ($pourcentageM * $duree ) / 100);
            //     //                 $sommeM = $sommeMm/2;
            //     //                 $somme->retire = $sommeM;
            // }

            if($investi->choix == 'Oui'){
                // $investi->suppleant = request('suppleant');
                $investi->customer_id = request('customer_id');
            } else{
                $investi->customer_id = Null;             
            }
            $investi->bonus =   $investi->customer_id ==  '' ? 0 : $bonus;
            $investi->forfait_id = request('forfait_id');
            // $investi->compteur = request('forfait_id');

      

            if($min <= request('montant') && request('montant') <= $max ){
                $investi->montant = request('montant');
                // $somme = Somme::where([
                //      ['customer', '=', $request->customer],
                //      ['jalon', '=', $request->jalon],
                //      ['choix', '=', $request->choix],
                //      ['customer', '=', $request->customer],
                //     ['forfait_id', '=', $request->forfait_id],
                // ])->with('forfait')->first();
               

                // if ($somme) {
                //     $somme->increment('montant', $request->montant);
                //     } 
                // else {
                    //  Somme::create($this->validator());
                            $somme = new Somme();                          
                            $somme->montant = request('montant');
                            $somme->choix = request('choix');
                            // $somme->status = 1;
                            $somme->investiman = request('investiman');
                            $somme->jalon = request('jalon');
                            if($somme->jalon == 'Oui'){
                                $sommeJm = ($somme->montant * $pourcentageJ ) / 100 ;
                                $sommeJ =  $sommeJm + $somme->montant;
                                $somme->retire =   $sommeJ;
                                $somme->total =   $sommeJ;
                                $somme->soustract =  $sommeJ;
                                $somme->compteur = 1;
                            } else{
                              
                                $sommeMm = ( $somme->montant * ($pourcentageM / 100) * $duree  );
                                $sommeM = $sommeMm/$duree ;
                                $somme->retire = $sommeM;
                                $somme->total = $sommeMm + $somme->montant;
                                $somme->soustract =  $sommeMm + $somme->montant;
                                $somme->compteur = $duree;
                            }

                            if($somme->choix == 'Oui'){
                                $somme->customer_id = request('customer_id');


                                $trac = new Trac();
                                $trac->montantB = request('montant'); 
                                $trac->investiman = request('investiman');
                                $trac->customer_id = request('customer_id');
                                $trac->bonus =  $bonus;
                                $trac->total = $trac->montantB * ($trac->bonus) / 100;
                                $trac->save();

                                $solde = Bonus::where([
                                    ['customer_id', '=', $trac->customer_id],
                                    ['investiman', '=',  $trac->investiman],
                                    // ['customer', '=',   $trac->total],
                                ])->with('customer')->first();
                        
                            
                                if ($solde) {
                                    
                                    $solde->increment('total', $trac->total);
                                } 
                                else {
                                    $ajout = new Bonus();
                                $ajout->montantB = request('montant'); 
                                $ajout->investiman= request('investiman');
                                $ajout->customer_id = request('customer_id');
                                $ajout->bonus =  $bonus;
                                $ajout->total = $ajout->montantB * ($ajout->bonus) / 100;
                                $ajout->save();
                                }

                                
                                   
                            } else{
                                $somme->customer_id = Null;
                            }
                            $somme->bonus =   $somme->customer_id  ==  '' ? 0 : $bonus;
                            $somme->forfait_id = request('forfait_id');
                    

                            // dd($somme->total);
                            $somme->save();
                    // }
 
                    // dd($somme->customer = request('customer'));
                $investi->save();

                

                // if( $investi ){
                //     Mail::to($investi->particulier->email)->send(new InvestMarkdownMail($investi));
                // }
                
                    return back()->with('message', 'id-inv '. $investi->id.'. Félicitation, les informations de l\'investissement ont bien été enregistrées.');
            }else{
                return back()->with('error', 'Investissement invalide, car le montant est inférieur au montant minimal ou supérieur  au montant maximal requis pour le forfait.');
            }
               
 
    
        // if( $depot ){
        //     Mail::to($depot->particulier->email)->send(new DepotMarkdownMail($depot));
        // }
        


    }
/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function stored(Investissement $investi)
    {   
    return view('investi.dimi', compact('investi'));
    }


public function storeded(Request $request , Investissement $investi)
{   
     
     
    $diminish = new Diminish();
  
    
    $diminish->investiman = request('investiman');
    $diminish->jalon = request('jalon'); 
    $diminish->forfait_id = request('forfait_id');
    $diminish->code_inv = request('code_inv'); 

    // dd($diminish->code_inv);
    

                 $somme = Somme::where([
                     ['investiman', '=', $diminish->investiman],
                     ['jalon', '=', $diminish->jalon],
                     ['id', '=', $diminish->code_inv],
                    ['forfait_id', '=', $diminish->forfait_id],
                ])->with('forfait')->first();

            //     $investissement = Somme::where([
            //         ['customer', '=', $diminish->customer],
            //         ['jalon', '=', $diminish->jalon],
            //         ['id', '=', $diminish->code_inv],
            //        ['forfait_id', '=', $diminish->forfait_id],
            //    ])->with('forfait')->first();

            $sommeMontant =  Somme::where([
                ['investiman', '=', $diminish->investiman],
                ['jalon', '=', $diminish->jalon],
                ['id', '=', $diminish->code_inv],
               ['forfait_id', '=', $diminish->forfait_id],
           ])->with('forfait')->first()['montant'];
        
        

                $sommeRetire =  Somme::where([
                    ['investiman', '=', $diminish->investiman],
                    ['jalon', '=', $diminish->jalon],
                    ['id', '=', $diminish->code_inv],
                   ['forfait_id', '=', $diminish->forfait_id],
                ])->with('forfait')->first()['retire'];
            
                $sommeTotal =  Somme::where([
                    ['investiman', '=', $diminish->investiman],
                    ['jalon', '=', $diminish->jalon],
                    ['id', '=', $diminish->code_inv],
                   ['forfait_id', '=', $diminish->forfait_id],
                ])->with('forfait')->first()['total'];
            
                $sommeDuree =  Somme::where([
                    ['investiman', '=', $diminish->investiman],
                    ['jalon', '=', $diminish->jalon],
                    ['id', '=', $diminish->code_inv],
                   ['forfait_id', '=', $diminish->forfait_id],
                ])->with('forfait')->first()['compteur'];

                $investissementDuree =  Investissement::where([            
                    [ 'id' , '=', $diminish->code_inv],
                ])->with('forfait')->first();

                // dd($investissementDuree);

                // $compteur = $investi->compteur ;

                // dd($compteur);
               
                if($somme->jalon == 'Oui'){
                    // dd($somme->jalon);
                    if($sommeDuree = 1) 
                    {
                        $diminish->montant  =  $sommeTotal ;                    
                        if( $investissementDuree){
                            $diminish->save();
                            $somme->decrement('soustract', $diminish->montant);
                            $somme->decrement('compteur', 1);
                            $somme->decrement('status', 1);
                            $somme->update(['date_termine' => now()]);
                            $investissementDuree->decrement('compteur', 1);
                            $investissementDuree->decrement('status', 1);
                            $investissementDuree->update(['date_termine' => now()]);
                            // Mail::to($solde->particulier->email)->send(new DiminishMarkdownMail($diminish));
                        }
                    } else{
                        return view('404'); 
                    }
                }
                else{
                    if($sommeDuree > 1)
                    {
                        $diminish->montant  =  $sommeRetire ;
                        if( $investissementDuree){
                            $diminish->save();
                            $somme->decrement('soustract', $diminish->montant);
                            $somme->decrement('compteur', 1);
                            $investissementDuree->decrement('compteur', 1);
                              // Mail::to($solde->particulier->email)->send(new DiminishMarkdownMail($diminish));
                        }
                    } elseif($sommeDuree = 1){
                        $diminish->montant  =  $sommeRetire +  $sommeMontant;
                        if( $investissementDuree ){
                            $diminish->save();
                            $somme->decrement('soustract', $diminish->montant);
                            $somme->decrement('compteur', 1);
                            $somme->decrement('status', 1);
                            $somme->update(['date_termine' => now()]);
                            $investissementDuree->decrement('compteur', 1);
                            $investissementDuree->decrement('status', 1);
                            $investissementDuree->update(['date_termine' => now()]);
                              // Mail::to($solde->particulier->email)->send(new DiminishMarkdownMail($diminish));
                        }
                    } else{
                        return view('404');    
                    }
                }
           

  

   

   
    
    // dd($diminish->customer);
   
  
  
    return Redirect::route('investir.investis.index')->with('message', 'Félicitation, le retrait a bien été enregistré.');
    }


  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Investissement $investi)
    {
        return view('investi.show', compact('investi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Investissement $investi)
    {
        if (Gate::denies('edit-investis')){
            return redirect()->route('investi.index');
        } 
        $customs = Customer::selectRaw("
        id ,
        code ,prename ,email , tel ,name
    ");
$clients = Client::selectRaw("
    id ,
    code ,prename ,email , tel ,name
");

$particuliers = Particulier::selectRaw("
id ,
code ,prename ,email , tel ,name
")->unionAll($clients)
->unionAll($customs)
->groupBy('id')
->groupBy('code')
->groupBy('name')
->groupBy('prename')
->groupBy('tel')
->groupBy('email')
->get();
        // $custom = Customer::get();
        // $particuliers = Particulier::get();

        // $result = $custom->merge($particuliers);

        // $clients = Client::get();

        // $customers = $result->merge($clients);

        $suppleants = Customer::all();
  
        // $custome = Customer::get();
        // $particulieres = Particulier::get();

        // $resulte = $custome->merge($particulieres);

        // $clientse = Client::get();

        // $suppleants = $resulte->merge($clientse);
        // $societ = DB::table('customers')->union(DB::table('clients'))
        // ->union(DB::table('particuliers'))
        // ->get();

        
        // $customers = DB::table('customers')->union(DB::table('clients'))
        // ->union(DB::table('particuliers'))
        // ->get();

        $forfaits = Forfait::all();
        return view('investi.edit',compact('investi',
        'particuliers',
         'suppleants','forfaits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Investissement $investi)
    {

        $investi->customer_id = request('customer_id');
        $investi->investiman;
        $investi->forfait_id = $request->input('forfait_id');
        $investi->montant = $request->input('montant');

        $investi->save();
        return Redirect::route('investir.investis.index')->with('message', 'Félicitation, investissement a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investissement $investi)
    {
        if (Gate::denies('delete-investis')){
            return redirect()->route('investir.investis.index');
        } 
        $investi->delete();
        return redirect()->route('investir.investis.index')->with('message', 'Félicitation, investissement a bien été supprimé.');
    }

    private function validator(){

        return request()->validate([
            'investiman' => ['required', 'string'],
            'code_bonus' => ['required', 'integer'],
            'forfait_id' => 'required|integer',
            'montant' => 'required|integer',
            'suppleant' => ['required', 'string'],
            'customer_id' => ['required', 'integer'],
            'status'=> 'in:0,1',
         'choix' => 'in:Oui,Non',
         'jalon' => 'in:Oui,Non',
         'bonus'=> ['required', 'string', 'max:255'],
         'compteur'=> 'required|integer',
         'retire'=> 'required|integer',
        'total'=> 'required|integer',
        'soustract'=> 'required|integer',
        ]);
    }
}
