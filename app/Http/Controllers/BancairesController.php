<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Etat;
use App\Models\Pret;
use App\Models\Piece;
use App\Models\Besoin;
use App\Models\Client;
use App\Models\Envoie; 
use App\Models\Regime;
use App\Helpers\Helper;
use App\Models\General;
use App\Models\Bancaire;
// use Illuminate\Contracts\Validation\Validator;
use App\Models\Conjoint;
use App\Models\Customer;
use App\Models\Renseigne;
use App\Models\Particulier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\Emprunteur;
use App\Models\Spouse;
use App\Models\Revenu;
use App\Models\Depense;
use App\Models\Patrimoine;
use App\Models\Reserve;
use App\Models\Mobiliere;
use App\Models\Relation;
use App\Models\Reference;


class BancairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
               $bancaires = General::get();

               return view('bancaire.index', compact('bancaires'));
    }

    public function print(General $bancaire)
    {
            //   , Conjoint $conjoint   $conjoint = Conjoint::where('general_id',$bancaire)->first();
            // dd($bancaire->etat_id);

               return view('bancaire.print', compact('bancaire'
            //    ,'conjoint'
            ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $general = new General();
        $envoies = Envoie::all();
        $regimes = Regime::all();
        $renseignes = Renseigne::all();
        $etats = Etat::all();
        $prets = Pret::all();
        $besoin = new Besoin();
        $conjoint = new Conjoint();
        $clients = Client::all();
        $pieces = Piece::all();
        $customers = Customer::all();
        $particuliers = Particulier::all();
        $spousse = new Spouse();
        $emprunteur = new Emprunteur();
        $revenu = new Revenu();
        $depense = new Depense();
        $reserve = new Reserve();
        $bancaire = new Bancaire();
        $patrimoine = new Patrimoine();
        $mobiliere = new Mobiliere();
        $relation = new Relation();
        $reference = new Reference();
        return view('bancaire.create', compact('general','envoies','clients',
        'customers','particuliers','regimes','pieces','revenu','depense','reserve','bancaire',
        'patrimoine','mobiliere','relation','reference',
      'besoin','conjoint','renseignes','etats','prets','spousse','emprunteur'
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
                    //     'name' => ['required', 'string', 'max:255'],
                    //     'prename' => ['required', 'string', 'max:255'],
                    //     'adresse' => ['required', 'string', 'max:255'],
                    // //     // 'bancaires' => ['required', 'array'],
                    // //     'balance' =>  ['required', 'string', 'max:255'],
                    // //     'banque' =>  ['required', 'string', 'max:255'],
                    // //     'num_compte' =>  ['required', 'string', 'max:255'],
                    // //     'envoie_id' =>  'required|integer',
                    // //     'montant' => 'required|integer',

                    //     // 'bancaires' => ['required', 'array'],
                    //     'repeater-group.*.balance' =>  ['required', 'string', 'max:255'],
                    //     'repeater-group.*.banque' =>  ['required', 'string', 'max:255'],
                    //     'repeater-group.*.num_compte' =>  ['required', 'string', 'max:255'],
                    //     'repeater-group.*.envoie_id' =>  'required|integer',
                    //     'repeater-group.*.montant' => 'required|integer',
                    // ]);

        $general = new General();
        $general->sexe =  request('sexe');
        $general->commune =request('commune');
        $general->name_naissance = request('name_naissance');
        $general->nationnalite =  request('nationnalite');
        $general->address =request('address');
        $general->nbr_dependant = request('nbr_dependant');
        $general->depuis =  request('depuis');
        $general->tel_residence =request('tel_residence');
        $general->cel = request('cel');
        $general->bureau =  request('bureau');
        $general->datenaiss =request('datenaiss');
        $general->prof = request('prof');
        $general->name =  request('name');
        $general->prename =request('prename');
        $general->nom_conjoint = request('nom_conjoint');
        $general->date_mariage =  request('date_mariage');
        $general->etat_id =request('etat_id');
        $general->email = request('email');
        $general->prename_fille =  request('prename_fille');
        $general->name_fille =request('name_fille');
        $general->regime_id = request('regime_id');
        $general->piece_id =  request('piece_id');
        $general->communeR =request('communeR');
        $general->renseigne_id = request('renseigne_id');
        $general->envoie_id =  request('envoie_id');
        $general->customer_id =  request('customer_id');
        $general->client_id =request('client_id');
        $general->particulier_id = request('particulier_id');
        $general->save();

        $conjoint = new Conjoint();

        $conjoint->nameC =request('nameC');
        if( $conjoint->nameC !== Null){
            $conjoint->sexeC == Null;
        }else{
            $conjoint->sexeC =  request('sexeC');
        }


        $conjoint->prenameC = request('prenameC');
        $conjoint->name_naissanceC =  request('name_naissanceC');
        $conjoint->nbr_dependantC =request('nbr_dependantC');
        $conjoint->datenaissC = request('datenaissC');
        $conjoint->piece_idC =  request('piece_idC');
        $conjoint->general_id =$general->id;
        $conjoint->communeC = request('communeC');
        $conjoint->commune_residenceC = request('commune_residenceC');



        $besoin = new Besoin();

        $besoin->montant =  request('montant');
        $besoin->objet =request('objet');
        $besoin->auto = request('auto');
        $besoin->elite =  request('elite');
        $besoin->cout =request('cout');
        $besoin->pret_id = request('pret_id');
        $besoin->general_id =$general->id;

        $emprunteur = new Emprunteur();

        $emprunteur->prof_emp =  request('prof_emp');
        $emprunteur->name_emp =request('name_emp');
        $emprunteur->addresse = request('addresse');
        $emprunteur->date_deb =  request('date_deb');
        $emprunteur->position =request('position');
        $emprunteur->emp_pre = request('emp_pre');
        $emprunteur->date_fin =  request('date_fin');
        $emprunteur->autre_act =request('autre_act');
        $emprunteur->date_inst = request('date_inst');
        $emprunteur->proprio =  request('proprio');
        $emprunteur->patente =request('patente');
        $emprunteur->nbr_pers = request('nbr_pers');
        $emprunteur->general_id =$general->id;


        $spousse = new Spouse();

        $spousse->prof_empS =  request('prof_empS');
        $spousse->name_empS =request('name_empS');
        $spousse->addresseS = request('addresseS');
        $spousse->date_debS =  request('date_debS');
        $spousse->positionS =request('positionS');
        $spousse->emp_preS = request('emp_preS');
        $spousse->date_finS =  request('date_finS');
        $spousse->autre_actS =request('autre_actS');
        $spousse->date_instS = request('date_instS');
        $spousse->proprioS =  request('proprioS');
        $spousse->patenteS = request('patenteS');
        $spousse->nbr_persS = request('nbr_persS');
        $spousse->general_id =$general->id;

        $revenu = new Revenu();

        $revenu->rev_mens =  request('rev_mens');
        $revenu->comm =request('comm');
        $revenu->div_int = request('div_int');
        $revenu->rev_loc =  request('rev_loc');
        $revenu->autre_rev1 =request('autre_rev1');
        $revenu->autre_rev2 = request('autre_rev2');
        $revenu->rev_mens_conj =  request('rev_mens_conj');
        $revenu->autre_rev_conj =request('autre_rev_conj');
        $revenu->tot_rev = request('tot_rev');
        $revenu->general_id =$general->id;

        $depense = new Depense();
        $depense->vers_hyp =  request('vers_hyp');
        $depense->loyers =request('loyers');
        $depense->impt_loc = request('impt_loc');
        $depense->prime =  request('prime');
        $depense->carte_credit =request('carte_credit');
        $depense->rembourse = request('rembourse');
        $depense->pret_conso =  request('pret_conso');
        $depense->pension =request('pension');
        $depense->elect = request('elect');
        $depense->transport =  request('transport');
        $depense->frais =request('frais');
        $depense->nourritur = request('nourritur');
        $depense->epargne_mens =  request('epargne_mens');
        $depense->autre_dep =request('autre_dep');
        $depense->tot_dep = request('tot_dep');
        $depense->general_id =$general->id;

        $reserve = new Reserve();
        $reserve->dispo =  request('dispo');
        $reserve->amor =request('amor');
        $reserve->new_dispo = request('new_dispo');
        $reserve->taux =  request('taux');
        $reserve->general_id =$general->id;

        $bancaire = new Bancaire();
        $bancaire->banque =  request('banque');
        $bancaire->type =request('type');
        $bancaire->montantBank = request('montantBank');
        $bancaire->num_compte =  request('num_compte');
        $bancaire->balance =  request('balance');
        $bancaire->banque1 =  request('banque1');
        $bancaire->type1 =request('type1');
        $bancaire->montantBank1 = request('montantBank1');
        $bancaire->num_compte1 =  request('num_compte1');
        $bancaire->balance1 =  request('balance1');
        $bancaire->banque2 =  request('banque2');
        $bancaire->type2 =request('type2');
        $bancaire->montantBank2 = request('montantBank2');
        $bancaire->num_compte2 =  request('num_compte2');
        $bancaire->balance2 =  request('balance2');
        $bancaire->banque3 =  request('banque3');
        $bancaire->type3 =request('type3');
        $bancaire->montantBank3 = request('montantBank3');
        $bancaire->num_compte3 =  request('num_compte3');
        $bancaire->balance3 =  request('balance3');
        $bancaire->banque4 =  request('banque4');
        $bancaire->type4 =request('type4');
        $bancaire->montantBank4 = request('montantBank4');
        $bancaire->num_compte4 =  request('num_compte4');
        $bancaire->balance4 =  request('balance4');
        $bancaire->general_id =$general->id;

        $patrimoine = new Patrimoine();
        $patrimoine->type_pat =  request('type_pat');
        $patrimoine->description =request('description');
        $patrimoine->valeur = request('valeur');
        $patrimoine->type_pat1 =  request('type_pat1');
        $patrimoine->description1 =request('description1');
        $patrimoine->valeur1 = request('valeur1');
        $patrimoine->type_pat2 =  request('type_pat2');
        $patrimoine->description2 =request('description2');
        $patrimoine->valeur2 = request('valeur2');
        $patrimoine->general_id =$general->id;

        $mobiliere = new Mobiliere();
        $mobiliere->typeM =  request('typeM');
        $mobiliere->descriptionM =request('descriptionM');
        $mobiliere->valeurM = request('valeurM');
        $mobiliere->typeM1 =  request('typeM1');
        $mobiliere->descriptionM1 =request('descriptionM1');
        $mobiliere->valeurM1 = request('valeurM1');
        $mobiliere->typeM2 =  request('typeM2');
        $mobiliere->descriptionM2 =request('descriptionM2');
        $mobiliere->valeurM2 = request('valeurM2');
        $mobiliere->general_id =$general->id;

        $relation = new Relation();
        $relation->nom_preteur =  request('nom_preteur');
        $relation->monnaie =request('monnaie');
        $relation->objet_pret = request('objet_pret');
        $relation->solde =  request('solde');
        $relation->tauxR =request('tauxR');
        $relation->echeance = request('echeance');
        $relation->montant_origine = request('montant_origine');
        $relation->nom_preteur1 =  request('nom_preteur1');
        $relation->monnaie1 =request('monnaie1');
        $relation->objet_pret1 = request('objet_pret1');
        $relation->solde1 =  request('solde1');
        $relation->tauxR1 =request('tauxR1');
        $relation->echeance1 = request('echeance1');
        $relation->montant_origine1 = request('montant_origine1');
        $relation->general_id =$general->id;

        $reference = new Reference();
        $reference->nameref =  request('nameref');
        $reference->prenameref =request('prenameref');
        $reference->name1 = request('name1');
        $reference->prename1 =  request('prename1');
        $reference->adress_ref =request('adress_ref');
        $reference->tel_ref = request('tel_ref');
        $reference->adress_ref1 =request('adress_ref1');
        $reference->tel_ref1 = request('tel_ref1');
        $reference->general_id =$general->id;


        $conjoint->save();
        $besoin->save();
        $emprunteur->save();
        $spousse->save();
        $revenu->save();
        $depense->save();
        $reserve->save();
        $bancaire->save();
        $patrimoine->save();
        $mobiliere->save();
        $relation->save();
        $reference->save();

        // foreach($request->input('bancaires') as $bancaire)
        // {
        //     $bancaire['general_id'] = $general->id;
        //     Bancaire::create($bancaire);
        // }


        //

    // for ($i=0; $i < $count; $i++) {
	//   $bancaire = new Bancaire();
    //   $bancaire->general_id = $general->id;
	//   $bancaire->balance = $request->balance[$i];
	//   $bancaire->banque = $request->banque[$i];
    //   $bancaire->envoie_id = $request->envoie_id[$i];
	//   $bancaire->num_compte = $request->num_compte[$i];
    //   $bancaire->montant = $request->montant[$i];
	//   $bancaire->save();
    // }

    //


    return Redirect::route('bancaires.index')->with('message', 'Félicitation, la demande de crédit particulier a été enregistrée.');


        // return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function validator(){

        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'prename' => ['required', 'string', 'max:255'],
            'depuis' => ['required', 'string', 'max:255'],
            'tel_residence' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'bureau' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'cel' =>  'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'datenaiss' =>  ['required', 'string', 'max:255'],
            'prof' =>  ['required', 'string', 'max:255'],
            'sexe' => 'in:F,M',
            'commune' => ['required', 'string', 'max:255'],
            'name_naissance' => ['required', 'string', 'max:255'],
            'nationnalite' =>  ['required', 'string', 'max:255'],
            'nbr_dependant' =>  ['required', 'string', 'max:255'],
            'communeR' => ['required', 'string', 'max:255'],
            'address' =>  ['required', 'string', 'max:255'],
    // 'choix' => ['required', 'string', 'max:255'],
    'date_mariage' => ['required', 'string', 'max:255'],
    'nom_conjoint' => ['required', 'string', 'max:255'],
    'email' =>  ['required', 'string', 'max:255'],
    'prename_fille' =>  ['required', 'string', 'max:255'],
    'name_fille' =>  ['required', 'string', 'max:255'],
    'etat_id' =>  'required|integer',
    'regime_id' =>  'required|integer',
    'customer_id' =>  'required|integer',
    'client_id' =>  'required|integer',
    'particulier_id' =>  'required|integer',
    'envoie_id' =>  'required|integer',
    'renseigne_id' =>  'required|integer',

    'sexeC' => 'in:F,M',
    'nameC' => ['required', 'string', 'max:255'],
    'prenameC' => ['required', 'string', 'max:255'],
    'name_naissanceC' =>  ['required', 'string', 'max:255'],
    'datenaissC' =>  ['required', 'string', 'max:255'],
    'communeC' =>  ['required', 'string', 'max:255'],
    'commune_residenceC' =>  'required|integer',

    'piece_id' =>  'required|integer',
    'general_id' =>  'required|integer',
    'piece_idC' =>  'required|integer',


    'elite' => ['required', 'string', 'max:255'],
    'auto' => ['required', 'string', 'max:255'],
    'objet' => ['required', 'string', 'max:255'],
    'cout' => ['required', 'string', 'max:255'],
    'pret_id' =>  'required|integer',
    'montant' => 'required|integer',


        'prof_emp' => ['required', 'string', 'max:255'],
        'name_emp' => ['required', 'string', 'max:255'],
        'addresse' => ['required', 'string', 'max:255'],
        'date_deb' => ['required', 'string', 'max:255'],
        'position' => ['required', 'string', 'max:255'],
        'emp_pre' => ['required', 'string', 'max:255'],
        'date_fin' => ['required', 'string', 'max:255'],
        'autre_act' => ['required', 'string', 'max:255'],
        'date_inst' => ['required', 'string', 'max:255'],
        'proprio' => ['required', 'string', 'max:255'],
        'patente' => ['required', 'string', 'max:255'],
        'nbr_pers' => ['required', 'string', 'max:255'],

    'prof_empS' => ['required', 'string', 'max:255'],
    'name_empS' => ['required', 'string', 'max:255'],
    'addresseS' => ['required', 'string', 'max:255'],
    'date_debS' => ['required', 'string', 'max:255'],
    'positionS' => ['required', 'string', 'max:255'],
    'emp_preS' => ['required', 'string', 'max:255'],
    'date_finS' => ['required', 'string', 'max:255'],
    'autre_actS' => ['required', 'string', 'max:255'],
    'date_instS' => ['required', 'string', 'max:255'],
    'proprioS' => ['required', 'string', 'max:255'],
    'patenteS' => ['required', 'string', 'max:255'],
    'nbr_persS' => ['required', 'string', 'max:255'],



    'rev_mens' => ['required', 'string', 'max:255'],
    'comm' => ['required', 'string', 'max:255'],
    'div_int' => ['required', 'string', 'max:255'],
    'rev_loc' => ['required', 'string', 'max:255'],
    'autre_rev1' => ['required', 'string', 'max:255'],
    'autre_rev2' => ['required', 'string', 'max:255'],
    'rev_mens_conj' => ['required', 'string', 'max:255'],
    'autre_rev_conj' => ['required', 'string', 'max:255'],
    'tot_rev' => ['required', 'string', 'max:255'],



    'transport' => ['required', 'string', 'max:255'],
    'frais' => ['required', 'string', 'max:255'],
    'nourritur' => ['required', 'string', 'max:255'],
    'epargne_mens' => ['required', 'string', 'max:255'],
    'autre_dep' => ['required', 'string', 'max:255'],
    'rembourse' => ['required', 'string', 'max:255'],
    'vers_hyp' => ['required', 'string', 'max:255'],
    'loyers' => ['required', 'string', 'max:255'],
    'impt_loc' => ['required', 'string', 'max:255'],
    'prime' => ['required', 'string', 'max:255'],
    'carte_credit' => ['required', 'string', 'max:255'],
    'tot_dep' => ['required', 'string', 'max:255'],
    'pret_conso' => ['required', 'string', 'max:255'],
    'pension' => ['required', 'string', 'max:255'],
    'elect' => ['required', 'string', 'max:255'],


    'dispo' => ['required', 'string', 'max:255'],
    'amor' => ['required', 'string', 'max:255'],
    'new_dispo' => ['required', 'string', 'max:255'],
    'taux' => ['required', 'string', 'max:255'],


    'banque' => ['required', 'string', 'max:255'],
    'type' => ['required', 'string', 'max:255'],
    'montantBank' => ['required', 'string', 'max:255'],
    'num_compte' => ['required', 'string', 'max:255'],
    'balance' => ['required', 'string', 'max:255'],

    'banque1' => ['required', 'string', 'max:255'],
    'type1' => ['required', 'string', 'max:255'],
    'montantBank1' => ['required', 'string', 'max:255'],
    'num_compte1' => ['required', 'string', 'max:255'],
    'balance1' => ['required', 'string', 'max:255'],


    'banque2' => ['required', 'string', 'max:255'],
    'type2' => ['required', 'string', 'max:255'],
    'montantBank2' => ['required', 'string', 'max:255'],
    'num_compte2' => ['required', 'string', 'max:255'],
    'balance2' => ['required', 'string', 'max:255'],


    'banque3' => ['required', 'string', 'max:255'],
    'type3' => ['required', 'string', 'max:255'],
    'montantBank3' => ['required', 'string', 'max:255'],
    'num_compte3' => ['required', 'string', 'max:255'],
    'balance3' => ['required', 'string', 'max:255'],


    'banque4' => ['required', 'string', 'max:255'],
    'type4' => ['required', 'string', 'max:255'],
    'montantBank4' => ['required', 'string', 'max:255'],
    'num_compte4' => ['required', 'string', 'max:255'],
    'balance4' => ['required', 'string', 'max:255'],

    'type_pat' => ['required', 'string', 'max:255'],
    'description' => ['required', 'string', 'max:255'],
    'valeur' => ['required', 'string', 'max:255'],

    'type_patM' => ['required', 'string', 'max:255'],
    'descriptionM' => ['required', 'string', 'max:255'],
    'valeurM' => ['required', 'string', 'max:255'],


    'nom_preteur' => ['required', 'string', 'max:255'],
    'monnaie' => ['required', 'string', 'max:255'],
    'objet_pret' => ['required', 'string', 'max:255'],
    'solde' => ['required', 'string', 'max:255'],
    'tauxR' => ['required', 'string', 'max:255'],
    'echeance' => ['required', 'string', 'max:255'],
    'montant_origine' => ['required', 'string', 'max:255'],


    'nameref' => ['required', 'string', 'max:255'],
    'prenameref' => ['required', 'string', 'max:255'],
    'name1' => ['required', 'string', 'max:255'],
    'prename1' => ['required', 'string', 'max:255'],
    'adress_ref' => ['required', 'string', 'max:255'],
    'tel_ref' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
    'adress_ref1' => ['required', 'string', 'max:255'],
    'tel_ref1' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',

    

        ]);
    }

}
