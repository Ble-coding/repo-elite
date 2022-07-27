<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use App\Models\Main;
use App\Models\Need;
use App\Models\Pret;
use App\Models\Actif;
use App\Models\Piece;
use App\Models\Propo;
use App\Models\Spent;
use App\Models\Titre;
use App\Models\Detail;
use App\Models\Passif;
use App\Models\Regime;
use App\Models\Cannexe;
use App\Models\Recette;
use App\Models\Service;
use App\Models\Society;
use App\Models\Assurance;
use App\Models\Juridique;
use App\Models\Personnel;
use App\Models\Renseigne;
use App\Models\Entreprise;
use App\Models\Protection;
use App\Models\Referendum;
use App\Models\Responsable;
use Illuminate\Http\Request;
use App\Models\Bancarisation;
use Illuminate\Support\Facades\Redirect;

class BancarisationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancarisations = Main::get();

        return view('bancarisation.index', compact('bancarisations'));
}

public function print(Main $bancarisation)
{
        // dd($bancarisation->needs);
        // dd($bancarisation->referendums);
        // dd($bancarisation->responsables[0]["piece_id"]);
        return view('bancarisation.print', compact('bancarisation'
     ));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main = new Main();
        $services = Service::all();
        $regimes = Regime::all();
        $renseignes = Renseigne::all();
        $juridiques = Juridique::all();
        $etats = Etat::all();
        $prets = Pret::all();
        $need = new Need();
        $bancarisation = new Bancarisation();
        $referendum = new Referendum();
        $entreprises = Entreprise::all();
        $societys = Society::all();
        $pieces = Piece::all();
        $responsable = new Responsable();
        $actif = new Actif();
        $passif = new Passif();
        $recette = new Recette();
        $spent = new Spent();
        $detail = new Detail();
        $titre = new Titre();
        $assurance = new Assurance();
        $cannexe = new Cannexe();
        $propo = new Propo();
        $protection = new Protection();
        $personnel = new Personnel();
        return view('bancarisation.create', compact('main','services','regimes','renseignes',
        'etats','prets','need','bancarisation','referendum','entreprises',
        'societys','pieces','responsable','actif','passif','recette',
        'spent','detail','titre','assurance','cannexe','propo','protection','personnel','juridiques'
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
        $main = new Main();
        $main->renseigne_id =  request('renseigne_id');
        $main->name =  request('name');
        $main->address =request('address');
        $main->resp =request('resp');
        $main->depuis =  request('depuis');
        $main->nbr_emp = request('nbr_emp');
        $main->journal =  request('journal');
        $main->datefond = request('datefond');
        $main->tel_com =  request('tel_com');
        $main->sect =request('sect');
        $main->datebil = request('datebil');
        $main->daterev =  request('daterev');
        $main->juridique_id =request('juridique_id');
        $main->service_id =request('service_id');
        $main->entreprise_id =request('entreprise_id');
        $main->society_id =request('society_id');
        $main->save();


        $need = new Need();
        $need->montant =  request('montant');
        $need->objet =request('objet');
        $need->auto = request('auto');
        $need->elite =  request('elite');
        $need->cout =request('cout');
        $need->pret_id = request('pret_id');
        $need->main_id =$main->id;

        $bancarisation = new Bancarisation();
        $bancarisation->banque =  request('banque');
        $bancarisation->type =request('type');
        $bancarisation->montantBank = request('montantBank');
        $bancarisation->date_compte =  request('date_compte');
        $bancarisation->balance =  request('balance');
        $bancarisation->banque1 =  request('banque1'); 
        $bancarisation->type1 =request('type1');
        $bancarisation->montantBank1 = request('montantBank1');
        $bancarisation->date_compte1 =  request('date_compte1');
        $bancarisation->balance1 =  request('balance1');
        $bancarisation->banque2 =  request('banque2');
        $bancarisation->type2 =request('type2');
        $bancarisation->montantBank2 = request('montantBank2');
        $bancarisation->date_compte2 =  request('date_compte2');
        $bancarisation->balance2 =  request('balance2');
        $bancarisation->banque3 =  request('banque3');
        $bancarisation->type3 =request('type3');
        $bancarisation->montantBank3 = request('montantBank3');
        $bancarisation->date_compte3 =  request('date_compte3');
        $bancarisation->balance3 =  request('balance3');
        $bancarisation->banque4 =  request('banque4');
        $bancarisation->type4 =request('type4');
        $bancarisation->montantBank4 = request('montantBank4');
        $bancarisation->date_compte4 =  request('date_compte4');
        $bancarisation->balance4 =  request('balance4');
        $bancarisation->type5 =request('type5');
        $bancarisation->montantBank5 = request('montantBank5');
        $bancarisation->date_compte5 =  request('date_compte5');
        $bancarisation->balance5 =  request('balance5');
        $bancarisation->type6 =request('type6');
        $bancarisation->montantBank6 = request('montantBank6');
        $bancarisation->date_compte6 =  request('date_compte6');
        $bancarisation->balance6 =  request('balance6');
        $bancarisation->main_id =$main->id;

        $referendum = new Referendum();
        $referendum->nameref =  request('nameref');
        $referendum->prenameref =request('prenameref');
        $referendum->adress_ref =request('adress_ref');
        $referendum->tel_ref = request('tel_ref');
        $referendum->name1 = request('name1');
        $referendum->prename1 =  request('prename1');
        $referendum->adress_ref1 =request('adress_ref1');
        $referendum->tel_ref1 = request('tel_ref1');
        $referendum->nameref2 =  request('nameref2');
        $referendum->prenameref2 =request('prenameref2');
        $referendum->adress_ref2 =request('adress_ref2');
        $referendum->tel_ref2 = request('tel_ref2');
        $referendum->name3 = request('name3');
        $referendum->prename3 =  request('prename3');
        $referendum->adress_ref3 =request('adress_ref3');
        $referendum->tel_ref3 = request('tel_ref3');
        $referendum->main_id =$main->id;

        $responsable = new Responsable();
        $responsable->nameResp =  request('nameResp');
        $responsable->prenameResp =request('prenameResp');
        $responsable->addressResp =request('addressResp');
        $responsable->ville =request('ville');
        $responsable->depuisResp =  request('depuisResp');
        $responsable->datenaiss =request('datenaiss');
        $responsable->prof = request('prof');
        $responsable->nationnalite =  request('nationnalite');
        $responsable->nbr_dependantResp = request('nbr_dependantResp');
        $responsable->tel_residence =request('tel_residence');
        $responsable->bureau =  request('bureau');
        $responsable->daexp =  request('daexp');
        $responsable->piece_id =  request('piece_id');
        $responsable->etat_id =request('etat_id');
        $responsable->date_mariage =  request('date_mariage');
        $responsable->regime_id = request('regime_id');
        $responsable->nom_conjoint = request('nom_conjoint');
        $responsable->emprunt =  request('emprunt');
        $responsable->anterieur =request('anterieur');
        $responsable->where_emprunt = request('where_emprunt');
        $responsable->where_anterieur = request('where_anterieur');
     
        $responsable->main_id =$main->id;


        $actif = new Actif();
        $actif->sgbk =  request('sgbk');
        $actif->institutions =request('institutions');
        $actif->assurance =request('assurance');
        $actif->compte =request('compte');
        $actif->negociable =  request('negociable');
        $actif->sommes =request('sommes');
        $actif->sommes1 = request('sommes1');
        $actif->auto =  request('auto');
        $actif->immo = request('immo');
        $actif->int =request('int');
        $actif->element =  request('element');
        $actif->element1 =  request('element1');
        $actif->element2 =request('element2');
        $actif->actif_tot =request('actif_tot');

        $actif->main_id =$main->id;

        $passif = new Passif();
  
        $passif->pretB =  request('pretB');
        $passif->biens =request('biens');
        $passif->carteCredit = request('carteCredit');
        $passif->carteCredit1 =  request('carteCredit1');
        $passif->carteCredit2 =request('carteCredit2');
        $passif->autres = request('autres');
        $passif->autres1 =  request('autres1');
        $passif->passife =request('passife');
        $passif->valeur = request('valeur');
        $passif->diverses =  request('diverses');
        $passif->cosigne =request('cosigne');
        $passif->nature = request('nature');
        $passif->mt = request('mt');
        $passif->main_id =$main->id;

        $recette = new Recette();  

        $recette->rev_mens =  request('rev_mens');
        $recette->comm =request('comm');
        $recette->div_int = request('div_int');
        $recette->rev_loc =  request('rev_loc');
        $recette->autre_rev1 =request('autre_rev1');
        $recette->autre_rev2 = request('autre_rev2');
        $recette->tot_part = request('tot_part');
        $recette->rev_mens_conj =  request('rev_mens_conj');
        $recette->autre_rev_conj =request('autre_rev_conj');
        $recette->autre_rev3 =request('autre_rev3');
        $recette->autre_rev4 = request('autre_rev4');
        $recette->tot_rev = request('tot_rev');
        $recette->main_id =$main->id;

        $spent = new Spent();
        $spent->vers_hyp =  request('vers_hyp');
        $spent->impt_fon =request('impt_fon');
        $spent->impt_rev =request('impt_rev');
        $spent->prime =  request('prime');
        $spent->carte_credit =request('carte_credit');
        $spent->rembourse = request('rembourse');
        $spent->pension =request('pension');
        $spent->autre_dep = request('autre_dep');
        $spent->autre_dep1 = request('autre_dep1');
        $spent->autre_dep2 = request('autre_dep2');
        $spent->autre_dep3 = request('autre_dep3');
        $spent->tot_dep = request('tot_dep');
        $spent->main_id =$main->id;

        $detail = new Detail();
        $detail->reprise =  request('reprise');
        $detail->reclamation =request('reclamation');
        $detail->faillite =request('faillite');
        $detail->echus =  request('echus');
        $detail->repriseD =  request('repriseD');
        $detail->reclamationD =request('reclamationD');
        $detail->failliteD =request('failliteD');
        $detail->echusD =  request('echusD');
        $detail->main_id =$main->id;

        $titre = new Titre();
        $titre->nbr_part =  request('nbr_part');
        $titre->description =request('description');
        $titre->valeurM =request('valeurM');
        $titre->nbr_part1 =  request('nbr_part1');
        $titre->description1 =request('description1');
        $titre->valeurM1 = request('valeurM1');
        $titre->nbr_part2 =request('nbr_part2');
        $titre->description2 = request('description2');
        $titre->valeurM2 = request('valeurM2');
        $titre->main_id =$main->id; 

        $assurance = new Assurance();
        $assurance->compagnie =  request('compagnie');
        $assurance->benef =request('benef');
        $assurance->nominal = request('nominal');
        $assurance->compagnie1 =  request('compagnie1');
        $assurance->benef1 =request('benef1');
        $assurance->nominal1 = request('nominal1');
        // $assurance->type_pat2 =  request('type_pat2');
        $assurance->benef2 =request('benef2');
        $assurance->nominal2 = request('nominal2');
        $assurance->compagnie2 =  request('compagnie2');
        $assurance->main_id =$main->id;

        
        $cannexe = new Cannexe();
        $cannexe->nom_preteur =  request('nom_preteur');
        $cannexe->monnaie =request('monnaie');
        $cannexe->objet_pret = request('objet_pret');
        $cannexe->montant_origine =  request('montant_origine');
        $cannexe->solde =  request('solde');
        $cannexe->tauxR =  request('tauxR');
        $cannexe->echeance =request('echeance');
        $cannexe->nom_preteur1 = request('nom_preteur1');
        $cannexe->monnaie1 =  request('monnaie1');
        $cannexe->objet_pret1 =  request('objet_pret1');
        $cannexe->montant_origine1 =  request('montant_origine1');
        $cannexe->solde1 =request('solde1');
        $cannexe->tauxR1 = request('tauxR1');
        $cannexe->echeance1 =  request('echeance1');
        $cannexe->nom_preteur2 =  request('nom_preteur2');
        $cannexe->monnaie2 =  request('monnaie2');
        $cannexe->objet_pret2 =request('objet_pret2');
        $cannexe->montant_origine2 = request('montant_origine2');
        $cannexe->solde2 =  request('solde2');
        $cannexe->tauxR2 =  request('tauxR2');
        $cannexe->echeance2 =  request('echeance2');
        $cannexe->nom_preteur3 =request('nom_preteur3');
        $cannexe->monnaie3 = request('monnaie3');
        $cannexe->objet_pret3 =  request('objet_pret3');
        $cannexe->montant_origine3 =  request('montant_origine3');
        $cannexe->solde3 = request('solde3');
        $cannexe->tauxR3 =  request('tauxR3');
        $cannexe->echeance3 =  request('echeance3');
        $cannexe->main_id =$main->id;

        $propo = new Propo();
        $propo->garanties =  request('garanties');
        $propo->amount =request('amount');
        $propo->place = request('place');
        $propo->dateE =  request('dateE');
        $propo->garanties1 =request('garanties1');
        $propo->amount1 = request('amount1');
        $propo->place1 = request('place1');
        $propo->dateE1 =  request('dateE1');
        $propo->garanties2 =request('garanties2');
        $propo->amount2 = request('amount2');
        $propo->place2 =  request('place2');
        $propo->dateE2 =request('dateE2');
        $propo->main_id =$main->id;
  
        $protection = new Protection();
        $protection->assu =  request('assu');
        $protection->montant_pro =request('montant_pro');
        $protection->typing = request('typing');
        $protection->assu1 =  request('assu1');
        $protection->montant_pro1 =request('montant_pro1');
        $protection->typing1 = request('typing1');
        $protection->assu2 =  request('assu2');
        $protection->montant_pro2 =request('montant_pro2');
        $protection->typing2 = request('typing2');
        $protection->assu3 =  request('assu3');
        $protection->montant_pro3 =request('montant_pro3');
        $protection->typing3 = request('typing3');
        $protection->assu4 =  request('assu4');
        $protection->montant_pro4 =request('montant_pro4');
        $protection->typing4 = request('typing4');
        $protection->main_id =$main->id;

        
        $personnel = new Personnel();
        $personnel->name_ref =  request('name_ref');
        $personnel->prename_ref =request('prename_ref');
        $personnel->adressRef =request('adressRef');
        $personnel->telRef = request('telRef');
        $personnel->name_ref1 = request('name_ref1');
        $personnel->prename_ref1 =  request('prename_ref1');
        $personnel->adressRef1 =request('adressRef1');
        $personnel->telRef1 = request('telRef1');
        $personnel->main_id =$main->id;

        $need->save();
        $bancarisation->save();
        $referendum->save();
        $responsable->save();
        $actif->save();
        $passif->save();
        $recette->save();
        $spent->save();
        $detail->save();
        $titre->save();
        $assurance->save();
        $cannexe->save();
        $propo->save();
        $protection->save();
        $personnel->save();

        return Redirect::route('bancarisations.index')->with('message', 'Félicitation, la demande de crédit entreprise a été enregistrée.');

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
            'renseigne_id' =>  'required|integer',
            'name' => ['required', 'string', 'max:255'],
            'address' =>  ['required', 'string', 'max:255'],
            'resp' => ['required', 'string', 'max:255'],
            'depuis' => ['required', 'string', 'max:255'],
            'nbr_emp' => 'in:F,M',
            'journal' => ['required', 'string', 'max:255'],
            'datefond' => ['required', 'string', 'max:255'],
            'tel_com' => ['required', 'string', 'max:255'],
            'sect' => ['required', 'string', 'max:255'],
            'datebil' => ['required', 'string', 'max:255'],
            'daterev' => ['required', 'string', 'max:255'],
            'juridique_id' =>  'required|integer',

            'main_id' =>  'required|integer',
           

            'elite' => ['required', 'string', 'max:255'],
            'auto' => ['required', 'string', 'max:255'],
            'objet' => ['required', 'string', 'max:255'],
            'cout' => ['required', 'string', 'max:255'],
            'pret_id' =>  'required|integer',
            'montant' => 'required|integer',

            'banque' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'montantBank' => ['required', 'string', 'max:255'],
            'date_compte' => ['required', 'string', 'max:255'],
            'balance' => ['required', 'string', 'max:255'],
        
            'banque1' => ['required', 'string', 'max:255'],
            'type1' => ['required', 'string', 'max:255'],
            'montantBank1' => ['required', 'string', 'max:255'],
            'date_compte1' => ['required', 'string', 'max:255'],
            'balance1' => ['required', 'string', 'max:255'],
        
        
            'banque2' => ['required', 'string', 'max:255'],
            'type2' => ['required', 'string', 'max:255'],
            'montantBank2' => ['required', 'string', 'max:255'],
            'date_compte2' => ['required', 'string', 'max:255'],
            'balance2' => ['required', 'string', 'max:255'],
        
        
            'banque3' => ['required', 'string', 'max:255'],
            'type3' => ['required', 'string', 'max:255'],
            'montantBank3' => ['required', 'string', 'max:255'],
            'date_compte3' => ['required', 'string', 'max:255'],
            'balance3' => ['required', 'string', 'max:255'],
        
        
            'banque4' => ['required', 'string', 'max:255'],
            'type4' => ['required', 'string', 'max:255'],
            'montantBank4' => ['required', 'string', 'max:255'],
            'date_compte4' => ['required', 'string', 'max:255'],
            'balance4' => ['required', 'string', 'max:255'],

            'banque5' => ['required', 'string', 'max:255'],
            'type5' => ['required', 'string', 'max:255'],
            'montantBank5' => ['required', 'string', 'max:255'],
            'date_compte5' => ['required', 'string', 'max:255'],
            'balance5' => ['required', 'string', 'max:255'],

            'banque6' => ['required', 'string', 'max:255'],
            'type6' => ['required', 'string', 'max:255'],
            'montantBank6' => ['required', 'string', 'max:255'],
            'date_compte6' => ['required', 'string', 'max:255'],
            'balance6' => ['required', 'string', 'max:255'],


            'nameref' => ['required', 'string', 'max:255'],
            'prenameref' => ['required', 'string', 'max:255'],
            'adress_ref' => ['required', 'string', 'max:255'],
            'tel_ref' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',

            'name1' => ['required', 'string', 'max:255'],
            'prename1' => ['required', 'string', 'max:255'],
            'adress_ref1' => ['required', 'string', 'max:255'],
            'tel_ref1' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',

            'nameref2' => ['required', 'string', 'max:255'],
            'prenameref2' => ['required', 'string', 'max:255'],
            'adress_ref2' => ['required', 'string', 'max:255'],
            'tel_ref2' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',

            'name3' => ['required', 'string', 'max:255'],
            'prename3' => ['required', 'string', 'max:255'],
            'adress_ref3' => ['required', 'string', 'max:255'],
            'tel_ref3' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',

            

            'nbr_dependantResp' =>  ['required', 'string', 'max:255'],
            'depuisResp' => ['required', 'string', 'max:255'],
            'nameResp' => ['required', 'string', 'max:255'],
            'prenameResp' => ['required', 'string', 'max:255'],
            'addressResp' =>  ['required', 'string', 'max:255'],
            'ville' =>  ['required', 'string', 'max:255'],
            'datenaiss' =>  ['required', 'string', 'max:255'],
            'prof' =>  ['required', 'string', 'max:255'],  
            'nationnalite' =>  ['required', 'string', 'max:255'],
            'tel_residence' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|', 
            'bureau' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'piece_id' =>  'required|integer',
            'etat_id' =>  'required|integer',
            'date_mariage' => ['required', 'string', 'max:255'],
            'regime_id' =>  'required|integer',
            'nom_conjoint' => ['required', 'string', 'max:255'],
            'emprunt' =>  'in:Oui,Non',
            'anterieur' =>  'in:Yes,No',
            'where_emprunt' =>  ['required', 'string', 'max:255'],
            'where_anterieur' => ['required', 'string', 'max:255'],



            'sgbk' => ['required', 'string', 'max:255'],
            'institutions' =>  ['required', 'string', 'max:255'],
            'assurance' =>  ['required', 'string', 'max:255'],
            'compte' =>  ['required', 'string', 'max:255'],
            'negociable' =>  'required|integer',

            'sommes' => ['required', 'string', 'max:255'],
            'sommes1' => ['required', 'string', 'max:255'],
            'auto' => ['required', 'string', 'max:255'],
            'immo' => ['required', 'string', 'max:255'],
            'int' => ['required', 'string', 'max:255'],
            'element' => ['required', 'string', 'max:255'],
            'element1' => ['required', 'string', 'max:255'],
            'element2' => ['required', 'string', 'max:255'],
            'actif_tot' => ['required', 'string', 'max:255'],



            'pretB' => ['required', 'string', 'max:255'],
            'biens' => ['required', 'string', 'max:255'],
            'carteCredit' => ['required', 'string', 'max:255'],
            'carteCredit1' => ['required', 'string', 'max:255'],
            'carteCredit2' => ['required', 'string', 'max:255'],
            'autres' => ['required', 'string', 'max:255'],
            'autres1' => ['required', 'string', 'max:255'],
            'passife' => ['required', 'string', 'max:255'],

            'valeur' => ['required', 'string', 'max:255'],
            'diverses' => ['required', 'string', 'max:255'],
            'cosigne' => ['required', 'string', 'max:255'],
            'nature' => ['required', 'string', 'max:255'],



            'rev_mens' => ['required', 'string', 'max:255'],
    'comm' => ['required', 'string', 'max:255'],
    'div_int' => ['required', 'string', 'max:255'],
    'rev_loc' => ['required', 'string', 'max:255'],
    'autre_rev1' => ['required', 'string', 'max:255'],
    'autre_rev2' => ['required', 'string', 'max:255'],
    'autre_rev3' => ['required', 'string', 'max:255'],
    'autre_rev4' => ['required', 'string', 'max:255'],
    'tot_part' => ['required', 'string', 'max:255'],
    'rev_mens_conj' => ['required', 'string', 'max:255'],
    'autre_rev_conj' => ['required', 'string', 'max:255'],
    'tot_rev' => ['required', 'string', 'max:255'],


    'vers_hyp' => ['required', 'string', 'max:255'],
    'impt_fon' => ['required', 'string', 'max:255'],
    'impt_rev' => ['required', 'string', 'max:255'],
    'prime' => ['required', 'string', 'max:255'],
    'carte_credit' => ['required', 'string', 'max:255'],
    'rembourse' => ['required', 'string', 'max:255'],
    'pension' => ['required', 'string', 'max:255'],
    'autre_dep' => ['required', 'string', 'max:255'],
    'autre_dep1' => ['required', 'string', 'max:255'],
    'autre_dep2' => ['required', 'string', 'max:255'],
    'autre_dep3' => ['required', 'string', 'max:255'],
    'tot_dep' => ['required', 'string', 'max:255'],


    'reprise' => 'in:Ok,Disok',
    'reclamation' => 'in:Ok,Disok',
    'faillite' => 'in:Ok,Disok',
    'echus' => 'in:Ok,Disok',
    'repriseD' => ['required', 'string', 'max:255'],
    'reclamationD' => ['required', 'string', 'max:255'],
    'failliteD' => ['required', 'string', 'max:255'],
    'echusD' => ['required', 'string', 'max:255'],



    'nbr_part' => ['required', 'string', 'max:255'],
    'description' => ['required', 'string', 'max:255'],
    'valeurM' => ['required', 'string', 'max:255'],
    'nbr_part1' => ['required', 'string', 'max:255'],
    'description1' => ['required', 'string', 'max:255'],
    'valeurM1' => ['required', 'string', 'max:255'],
    'nbr_part2' => ['required', 'string', 'max:255'],
    'description2' => ['required', 'string', 'max:255'],
    'valeurM2' => ['required', 'string', 'max:255'],




    'compagnie' => ['required', 'string', 'max:255'],
    'benef' => ['required', 'string', 'max:255'],
    'nominal' => ['required', 'string', 'max:255'],
    'compagnie1' => ['required', 'string', 'max:255'],
    'benef1' => ['required', 'string', 'max:255'],
    'nominal1' => ['required', 'string', 'max:255'],
    'benef2' => ['required', 'string', 'max:255'],
    'nominal2' => ['required', 'string', 'max:255'],
    'compagnie2' => ['required', 'string', 'max:255'],




    'nom_preteur' => ['required', 'string', 'max:255'],
    'monnaie' => ['required', 'string', 'max:255'],
    'objet_pret' => ['required', 'string', 'max:255'],
    'montant_origine' => ['required', 'string', 'max:255'],
    'solde' => ['required', 'string', 'max:255'],
    'tauxR' => ['required', 'string', 'max:255'],
    'echeance' => ['required', 'string', 'max:255'],


    'nom_preteur1' => ['required', 'string', 'max:255'],
    'monnaie1' => ['required', 'string', 'max:255'],
    'objet_pret1' => ['required', 'string', 'max:255'],
    'montant_origine1' => ['required', 'string', 'max:255'],
    'solde1' => ['required', 'string', 'max:255'],
    'tauxR1' => ['required', 'string', 'max:255'],
    'echeance1' => ['required', 'string', 'max:255'],

    'nom_preteur2' => ['required', 'string', 'max:255'],
    'monnaie2' => ['required', 'string', 'max:255'],
    'objet_pret2' => ['required', 'string', 'max:255'],
    'montant_origine2' => ['required', 'string', 'max:255'],
    'solde2' => ['required', 'string', 'max:255'],
    'tauxR2' => ['required', 'string', 'max:255'],
    'echeance2' => ['required', 'string', 'max:255'],


    'nom_preteur3' => ['required', 'string', 'max:255'],
    'monnaie3' => ['required', 'string', 'max:255'],
    'objet_pret3' => ['required', 'string', 'max:255'],
    'montant_origine3' => ['required', 'string', 'max:255'],
    'solde3' => ['required', 'string', 'max:255'],
    'tauxR3' => ['required', 'string', 'max:255'],
    'echeance3' => ['required', 'string', 'max:255'],



    'garanties' => ['required', 'string', 'max:255'],
    'amount' => ['required', 'string', 'max:255'],
    'place' => ['required', 'string', 'max:255'],
    'dateE' => ['required', 'string', 'max:255'],

    'garanties1' => ['required', 'string', 'max:255'],
    'amount1' => ['required', 'string', 'max:255'],
    'place1' => ['required', 'string', 'max:255'],
    'dateE1' => ['required', 'string', 'max:255'],

    'garanties2' => ['required', 'string', 'max:255'],
    'amount2' => ['required', 'string', 'max:255'],
    'place2' => ['required', 'string', 'max:255'],
    'dateE2' => ['required', 'string', 'max:255'],



    'assu' => ['required', 'string', 'max:255'],
    'montant_pro' => ['required', 'string', 'max:255'],
    'typing' => ['required', 'string', 'max:255'],

    'assu1' => ['required', 'string', 'max:255'],
    'montant_pro1' => ['required', 'string', 'max:255'],
    'typing1' => ['required', 'string', 'max:255'],

    'assu2' => ['required', 'string', 'max:255'],
    'montant_pro2' => ['required', 'string', 'max:255'],
    'typing2' => ['required', 'string', 'max:255'],

    'assu3' => ['required', 'string', 'max:255'],
    'montant_pro3' => ['required', 'string', 'max:255'],
    'typing3' => ['required', 'string', 'max:255'],

    'assu4' => ['required', 'string', 'max:255'],
    'montant_pro4' => ['required', 'string', 'max:255'],
    'typing4' => ['required', 'string', 'max:255'],



    'name_ref' => ['required', 'string', 'max:255'],
    'prename_ref' => ['required', 'string', 'max:255'],
    'adressRef' => ['required', 'string', 'max:255'],
    'telRef' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
    


    'name_ref1' => ['required', 'string', 'max:255'],
    'prename_ref1' => ['required', 'string', 'max:255'],
    'adressRef1' => ['required', 'string', 'max:255'],
    'telRef1' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',

  

  

        ]);
    }
    
}
