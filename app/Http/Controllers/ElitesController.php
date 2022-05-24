<?php

namespace App\Http\Controllers;

use App\Helpers\Nut;
use App\Models\Somm;
use App\Models\Piece;
use App\Models\Vente;
use App\Models\Rachat;
use App\Models\Valeur;
use App\Helpers\Helper;
use App\Models\Decaisse;
use App\Models\Visiteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ElitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function initial()
    {
        return view('elite.deal.group');
    }
 
    public function index()
    {
             
        $rachats = Rachat::with('vente')->get();
        $visiteurs = Visiteur::all();
        $Sups = Visiteur::onlyTrashed()->get();
        // $visiteur = new Visiteur();
        $vente = new Vente();
      
        $pieces = Piece::all();

        $sommes = Somm::where('status', 1)->get();
      


        $ventes= Vente::where('status', 2)->get();
        $decaisses = Vente::where('status', 1)->get();
        $transactions = Vente::where('status', 0)->get();
   $partSups = Vente::onlyTrashed()->get();
        
        $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
        // $bonus0 = Valeur::where('id', 4)->select('pourcentage')->first()['pourcentage'];
        $bonus1 = Valeur::where('id', 2)->select('pourcentage')->first()['pourcentage'];
        $bonus2 = Valeur::where('id', 3)->select('pourcentage')->first()['pourcentage'];

        return view('elite.deal.auto.index', compact('visiteurs','Sups',
    'vente','pieces','bonus2',
    // '',
    'bonus1','bonus','rachats','transactions','sommes','ventes','decaisses', 'partSups'));
    }


    
    public function stord(Vente $vente)
    {   
        $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
        $bonus1 = Valeur::where('id', 2)->select('pourcentage')->first()['pourcentage'];
        $bonus2 = Valeur::where('id', 3)->select('pourcentage')->first()['pourcentage'];
        $rachats = Vente::where('status', 0)->where('id', $vente)->select('created_at')->first();
        $chiffre =  Nut::convert_number_to_words($vente->montant);

        $pourcentage = ($vente->montant * $bonus ) / 100;
        $rachat =  $pourcentage + $vente->montant;

        $regain =  Nut::convert_number_to_words($rachat);

        return view('elite.deal.auto.decaisse', compact('vente','bonus','bonus','bonus2','rachats','chiffre','regain'));
    }


public function storded(Request $request , Vente $vente)
{   
       
    $decaisse = new Decaisse();

    $decaisse->payment = request('payment'); 
    $decaisse->vente_id = request('vente_id');
    


                 $somm = Somm::where([
                    ['id', '=', $decaisse->vente_id],
                     ['payment', '=', $decaisse->payment],
                ])->first();

        
       $sommPayment =  Somm::where([
        ['id', '=', $decaisse->vente_id],
                     ['payment', '=', $decaisse->payment],
  ])->first()['payment'];



                $sommeRetire =  Somm::where([
                    ['id', '=', $decaisse->vente_id],
                    ['payment', '=', $decaisse->payment],
                ])->first()['retire'];

                
            
                $sommeTotal =  Somm::where([
                    ['id', '=', $decaisse->vente_id],
                     ['payment', '=', $decaisse->payment],
                ])->first()['total'];

                
            
                $sommeStatus =  Somm::where([
                    ['id', '=', $decaisse->vente_id],
                     ['payment', '=', $decaisse->payment],
                ])->first()['status'];

                $venteDuree =  Vente::where([            
                    [ 'id' , '=', $decaisse->vente_id],
                ])->first();


                    if($sommeStatus = 2) 
                    {
                        $decaisse->montant  =  $sommeTotal ;                    
                        if( $venteDuree){
                            $decaisse->save();
                            $somm->decrement('status', 1);
                            $venteDuree->decrement('status', 1);
                        }
                    } else{
                        return view('404'); 
                    }
                
                
                  
  
    return Redirect::route('elite.elites.index')->with('message', 'Le décaissement a été validé, veuillez vous assuré que vous avez imprimé le réçu .');
    }


    // public function factures(Vente $vente)
    // {   
    //     return view('elite.deal.auto.facture', compact('vente'));
    // }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $vente = new Vente();
    //     $visiteurs = Visiteur::all();

    //     return view('elite.deal.auto.create', compact('vente','visiteurs'));
    // } 

    /**
     *  a newly created resource in storage.
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
        //     'prename' => ['required', 'string', 'max:255'],
        //     'nationnalite' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'circulation' => ['required', 'string', 'max:255'],
        //     'numpiece' => ['required', 'string', 'max:255'],
        //      'dateexp' => ['required', 'string', 'max:255'],
        //     // 'image' => 'required', 
        //     // 'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'piece_id' => 'required|integer',
        //     'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        //     'marque' => ['required', 'string', 'max:255'],
        //     'model' => ['required', 'string', 'max:255'],
        //     'couleur' => ['required', 'string', 'max:255'],
        //     'carte_grise'=> ['required', 'string', 'max:255'],
        //    'adresse'=> ['required', 'string', 'max:255'],
        //    'immatricule' => ['required', 'string', 'max:255'],
        //    'montant' => ['required', 'string', 'max:255'],
        //    'duree' => ['required', 'integer'],

        //    'bonus'=> ['required', 'string', 'max:255'],
        //  'compteur'=> 'required|integer',
        //  'retire'=> 'required|integer',
        // 'total'=> 'required|integer',
        // 'soustract'=> 'required|integer',
        // 'code_bonus' => ['required', 'integer'],
        // 'status'=> 'in:0,1',
        // 'payment' => 'in:Tranche,Unique',
          
        // ]);

        $vente = new Vente();
        $contrat = Helper::Generator(new Vente, 'contrat', 5, 'CON');
        $code = Helper::IDGenerator(new Vente, 'code', 6, '40');
        // $type = Valeur::all();
        // $type = Valeur::select('typing')->get();
        $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
        $bonus1 = Valeur::where('id', 2)->select('pourcentage')->first()['pourcentage'];
        $bonus2 = Valeur::where('id', 3)->select('pourcentage')->first()['pourcentage'];
        // $ = Valeur::where('id', 4)->select('pourcentage')->first()['pourcentage'];

        // dd($type->typing);
        $vente->nationnalite = request('nationnalite');
        $vente->name = request('name');
        $vente->prename = request('prename');
        $vente->sexe = request('sexe');
        $vente->piece_id = request('piece_id');
        $vente->tel = request('tel');
        $vente->email = request('email');
        $vente->dateexp = request('dateexp');
        $vente->numpiece = request('numpiece');
        $vente->adresse = request('adresse');
        $vente->code = $code;
        $vente->contrat = $contrat;
        $vente->montant = request('montant'); 
        $vente->carte_grise = request('carte_grise');    
        $vente->marque = request('marque');
        $vente->model = request('model');
        $vente->circulation = request('circulation');
        // $vente->visiteur_id = request('visiteur_id');
        $vente->couleur = request('couleur');
        $vente->immatricule = request('immatricule');
         $vente->payment = request('payment');
         $vente->duree = request('duree');

         
         if ($vente->payment== 'Unique') {
            $vente->compteur = 1;
        } else{ 
            $vente->compteur = $vente->duree;
        }
        
 
        $vente->montant = request('montant');  

  

        if($vente->montant ){
            
                        $somm = new Somm();                          
                        $somm->montant = request('montant'); 
  
                        $somm->nationnalite = request('nationnalite');
                        $somm->name = request('name');
                        $somm->prename = request('prename');
                        $somm->sexe = request('sexe');
                        $somm->piece_id = request('piece_id');
                        $somm->tel = request('tel');
                        $somm->email = request('email');
                        $somm->dateexp = request('dateexp');
                        $somm->numpiece = request('numpiece');
                        $somm->adresse = request('adresse');
                        // $somm->visiteur_id = request('visiteur_id');
                        $somm->carte_grise = request('carte_grise');
                        $somm->immatricule = request('immatricule');
                        $somm->duree = request('duree');
    
                        
                          $somm->payment = request('payment'); 
                        if($somm->payment == 'Unique'){
                            if($somm->duree == 1){
                                $pourcentage = ($somm->montant * $bonus ) / 100 ;
                            }else if ($somm->duree == 2) {
                                $pourcentage = ($somm->montant * $bonus1 ) / 100 ;
                            } else if($somm->duree == 3){
                                $pourcentage = ($somm->montant * $bonus2 ) / 100 ;
                            } else {
                            return 'Error';         
                            }
                            $rachat =  $pourcentage + $somm->montant;
                            $somm->retire =   $rachat;
                            $somm->total =   $rachat;
                            $somm->soustract =  $rachat;
                            // dd($somm->soustract);
                            $somm->compteur = 1;
                        } else{                    
                            if($somm->duree == 1){
                                $pourcentage = ($somm->montant * $bonus ) / 100 ;
                            }else if ($somm->duree == 2) {
                                $pourcentage = ($somm->montant * $bonus1 ) / 100 ;
                            } else if($somm->duree == 3){
                                $pourcentage = ($somm->montant * $bonus2 ) / 100 ;
                            } else {
                            return 'Error';         
                            }
                            $rachat = ($pourcentage + $somm->montant)/$somm->duree ;
                            $somm->retire = $rachat;
                            $somm->total = $rachat * $somm->duree  ;
                            $somm->soustract =  $rachat * $somm->duree ;
                            $somm->compteur = $somm->duree;
                        }


                        $somm->save();
        
            $vente->save();

            

            // if( $investi ){
            //     Mail::to($investi->particulier->email)->send(new InvestMarkdownMail($investi));
            // }
            
        
        }
        
        return Redirect::route('elite.elites.index')->with('message', 'Félicitation, les informations du contrat de vente ' . $vente->contrat. ' de ' . $vente->name. ' '. $vente->prename.' ont bien été enregistrées.');
     
    }


    public function print(Vente $vente)
    {   

        $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
        $bonus1 = Valeur::where('id', 2)->select('pourcentage')->first()['pourcentage'];
        $bonus2 = Valeur::where('id', 3)->select('pourcentage')->first()['pourcentage'];
        // $ = Valeur::where('id', 4)->select('pourcentage')->first()['pourcentage'];
        $rachats = Vente::where('status', 0)->where('id', $vente)->select('created_at')->first();
        $chiffre =  Nut::convert_number_to_words($vente->montant);

     if($vente->duree == 1){
                                $pourcentage = ($vente->montant * $bonus ) / 100 ;
                            }elseif ($vente->duree == 2) {
                                $pourcentage = ($vente->montant * $bonus1 ) / 100 ;
                            } else if($vente->duree == 3){
                                $pourcentage = ($vente->montant * $bonus2 ) / 100 ;
                            } else {
                            return 'Error';         
                        }
        $rachat =  $pourcentage + $vente->montant;

        $regain =  Nut::convert_number_to_words($rachat);
        return view('elite.deal.auto.print', compact('vente',
        // 'bonus0',
        'bonus2','bonus1','bonus','rachats','chiffre','regain'));
    }

    // public function vers(Vente $vente)
    // {   

    //     $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
    //     $rachats = Vente::where('status', 0)->where('id', $vente)->select('created_at')->first();
        


            
    //     if($vente->payment == 'Unique'){
    //         $v = ($vente->montant * $bonus) / 100 ;
    //         if($vente->compteur = 1){
    //            $calcul = $v + $vente->montant;
    //            $chiffre =  Nut::convert_number_to_words( $calcul);
    //         }
    //     }else{

    //         $v0 = ($vente->montant * (($bonus) /100));
    //         $v1 = ($v0 + $vente->montant)/$vente->duree;

       
    //         if ($vente->compteur >= 1) {
    //             $calcul = $v1;
    //             $chiffre =  Nut::convert_number_to_words($calcul);
    //         }
    //     }

    

    //     $pourcentage = ($vente->montant * $bonus ) / 100;
    //     $rachat =  $pourcentage + $vente->montant;

    //     $regain =  Nut::convert_number_to_words($rachat);
    //     return view('elite.deal.auto.printer', compact('vente','bonus','rachats','rachat','chiffre','regain'));
    // }




    public function stored(Vente $vente)
    {   

        // $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
        $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
        $bonus1 = Valeur::where('id', 2)->select('pourcentage')->first()['pourcentage'];
        $bonus2 = Valeur::where('id', 3)->select('pourcentage')->first()['pourcentage'];
        // $bonus0 = Valeur::where('id', 4)->select('pourcentage')->first()['pourcentage'];

        $rachats = Vente::where('status', 0)->where('id', $vente)->select('created_at')->first();
        


            
        if($vente->payment == 'Unique'){
            // $v = ($vente->montant * $bonus) / 100 ;
            
            if($vente->duree == 1){
                $v = ($vente->montant * $bonus) / 100 ;
            }elseif ($vente->duree == 2) {
                $v = ($vente->montant * $bonus1) / 100 ;
            } else if($vente->duree == 3){
                $v = ($vente->montant * $bonus2) / 100 ;
            } else {
            return 'Error';         
        }
        
            if($vente->compteur = 1){
               $calcul = $v + $vente->montant;
               $chiffre =  Nut::convert_number_to_words( $calcul);
            }
        }else{

            

            if($vente->duree == 1){
                $v0 = ($vente->montant * (($bonus) /100));
            }elseif ($vente->duree == 2) {
                $v0 = ($vente->montant * (($bonus1) /100));
            } else if($vente->duree == 3){
                $v0 = ($vente->montant * (($bonus2) /100));
            } else {
            return 'Error';         
        }

            $v1 = ($v0 + $vente->montant)/$vente->duree;

       
            if ($vente->compteur >= 1) {
                $calcul = $v1;
                $chiffre =  Nut::convert_number_to_words($calcul);
            }
        }

    

        $pourcentage = ($vente->montant * $bonus ) / 100;
        $rachat =  $pourcentage + $vente->montant;

        $regain =  Nut::convert_number_to_words($rachat);

        return view('elite.deal.auto.dimi', compact('vente',
        // 'bonus0',
         'bonus','bonus1','bonus2','rachats','chiffre','regain'));
    }


public function storeded(Request $request , Vente $vente)
{   
       
    $rachat = new Rachat();
  
    // $rachat->visiteur_id = request('visiteur_id');
    $rachat->payment = request('payment'); 
    $rachat->vente_id = request('vente_id');
    
    // dd($rachat->payment);
                // dd($rachat->name);
                // dd($rachat->prename);
                // dd($rachat->immatricule);
                // dd($rachat->email);
                // dd($rachat->payment);

                 $somm = Somm::where([
                    ['id', '=', $rachat->vente_id],
                     ['payment', '=', $rachat->payment],
                ])->first();

            //    dd($somm->soustract );


    //        $sommMontant =  Somm::where([
    //         ['id', '=', $rachat->code_vente],
    //         ['visiteur_id', '=', $rachat->visiteur_id],
    //         ['payment', '=', $rachat->payment],
    //    ])->first()['montant'];
    
        
       $sommPayment =  Somm::where([
        ['id', '=', $rachat->vente_id],
                     ['payment', '=', $rachat->payment],
  ])->first()['payment'];

    // dd($sommPayment);
        
        

                $sommeRetire =  Somm::where([
                    ['id', '=', $rachat->vente_id],
      
                    ['payment', '=', $rachat->payment],
                ])->first()['retire'];

                
            
                $sommeTotal =  Somm::where([
                    ['id', '=', $rachat->vente_id],
       
                     ['payment', '=', $rachat->payment],
                ])->first()['total'];

                
            
                $sommeDuree =  Somm::where([
                    ['id', '=', $rachat->vente_id],
       
                     ['payment', '=', $rachat->payment],
                ])->first()['compteur'];

                // dd($sommeDuree);

                $venteDuree =  Vente::where([            
                    [ 'id' , '=', $rachat->vente_id],
                ])->first();

                // dd($visiteurDuree);

    //  dd($sommeDuree);
               
                if($sommPayment == 'Unique'){

                    // dd($somm->payment);
                    if($sommeDuree = 1) 
                    {
                        $rachat->montant  =  $sommeTotal ;                    
                        if( $venteDuree){
                            $rachat->save();
                            $somm->decrement('soustract', $rachat->montant);
                            $somm->decrement('compteur', 1);
                            $somm->decrement('status', 1);
                            $somm->update(['date_termine' => now()]);
                            $venteDuree->decrement('compteur', 1);
                            $venteDuree->decrement('status', 1);
                            $venteDuree->update(['date_termine' => now()]);
                            // Mail::to($solde->particulier->email)->send(new rachatMarkdownMail($rachat));
                        }
                    } else{
                        return view('404'); 
                    }
                }
                else{
                    if($sommeDuree > 1)
                    {
                        $rachat->montant  =  $sommeRetire ;
                        if( $venteDuree){
                            // dd($rachat->montant);
                            $rachat->save();
                            $somm->decrement('soustract', $rachat->montant);
                            $somm->decrement('compteur', 1);
                            $venteDuree->decrement('compteur', 1);
                        }
                    } elseif($sommeDuree = 1){
                        $rachat->montant  =  $sommeRetire;
                        if( $venteDuree ){
                            $rachat->save();
                            $somm->decrement('soustract', $rachat->montant);
                            $somm->decrement('compteur', 1);
                            $somm->decrement('status', 1);
                            $somm->update(['date_termine' => now()]);
                            $venteDuree->decrement('compteur', 1);
                            $venteDuree->decrement('status', 1);
                            $venteDuree->update(['date_termine' => now()]);
                              // Mail::to($solde->particulier->email)->send(new rachatMarkdownMail($rachat));
                        }
                    } elseif($sommeDuree = 0){
                        if( $venteDuree ){
                        return view('404');    
                        }
                    }
                    else{

                    }
                }
           

    

  
  
    return Redirect::route('elite.elites.index')->with('message', 'Le versement a bien été enregistré.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vente $vente)
    {
        $bonus = Valeur::where('id', 1)->select('pourcentage')->first()['pourcentage'];
        $bonus1 = Valeur::where('id', 2)->select('pourcentage')->first()['pourcentage'];
        $bonus2 = Valeur::where('id', 3)->select('pourcentage')->first()['pourcentage'];
        $rachats = Vente::where('status', 0)->where('id', $vente)->select('created_at')->first();
        $chiffre =  Nut::convert_number_to_words($vente->montant);

        $pourcentage = ($vente->montant * $bonus ) / 100;
        if($vente->duree == 1)
                {$pourcentage = ($vente->montant * (($bonus1) /100));}
        else if($vente->duree == 2) 
					{$pourcentage = ($vente->montant * (($bonus1) /100));} 
                    else if($vente->duree == 3) 
					{$pourcentage = ($vente->montant * (($bonus2) /100));} 
									else {
											return 'Erreur';  }      
											
        $rachat =  $pourcentage + $vente->montant;

        $regain =  Nut::convert_number_to_words($rachat);

     
        return view('elite.deal.auto.show', compact('vente','bonus','bonus1','bonus2','rachats','chiffre','regain'
    ));
    
      
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vente $vente)
    {
        $pieces = Piece::all();
        // $visiteurs = Visiteur::all();
        return view('elite.deal.auto.edit',compact(
            // 'visiteurs',
        'vente','pieces'));
    } 

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vente $vente)
    {
        $vente->nationnalite = request('nationnalite');
        $vente->name = request('name');
        $vente->prename = request('prename');
        $vente->sexe = request('sexe');
        $vente->piece_id = request('piece_id');
        $vente->tel = request('tel');
        $vente->email = request('email');
        $vente->dateexp = request('dateexp');
        $vente->numpiece = request('numpiece');
        $vente->adresse = request('adresse');
        $vente->code;

        $vente->contrat;

        $vente->montant = request('montant');
        // $vente->visiteur_id = request('visiteur_id');
        $vente->marque = request('marque');
        $vente->model = request('model');
        $vente->couleur = request('couleur');
        $vente->circulation = request('circulation');
        $vente->immatricule = request('immatricule');
        $vente->carte_grise = request('carte_grise');
        $vente->payment = request('payment');

        $vente->save();

        return redirect()->route('elite.elites.index')->with('message', 'code '. $vente->contrat .'. Les informations de la vente ' . $vente->vente .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vente $vente)
    {
        // if (Gate::denies('delete-visiteurs')){
        //     return redirect()->route('elite.elites.index');
        // }
        $vente->delete();
        return redirect()->route('elite.elites.index')->with('message', 'Les informations du client ' . $vente->contrat .' ont bien été supprimées.');
    }

    public function restore(Vente $vente)
    {
    //     if (Gate::denies('delete-visiteurs')){
    //         return redirect()->route('elite.elites.index');
    //     }
        // dd($visiteur);
        
        $partSups = Vente::onlyTrashed()->first();
        $partSups->restore();

        // Visiteur::onlyTrashed()->findOrFail($visiteur)->restore();
        
        return redirect()->route('elite.elites.index')->with('message', 'Les informations du client ' . $vente->contrat .' ont bien été restaurées.');
    } 

    private function validator(){

        return request()->validate([
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

            // 'visiteur_id' => ['required', 'integer'],
            'circulation' => ['required', 'string', 'max:255'],
            'marque' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'couleur' => ['required', 'string', 'max:255'],
            'carte_grise'=> ['required', 'string', 'max:255'],
           'immatricule' => ['required', 'string', 'max:255'],
           'montant' => ['required', 'string', 'max:255'],
           'duree' => ['required', 'integer'],
         'compteur'=> 'required|integer',
         'retire'=> 'required|integer',
        'total'=> 'required|integer',
        'soustract'=> 'required|integer',
        'code_bonus' => ['required', 'integer'],
        'status'=> 'in:0,1',
        'payment' => 'in:Tranche,Unique',
           
        ]);
      
    }
}
