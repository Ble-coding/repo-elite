<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Depot;
use App\Models\Forfait;
use Illuminate\Http\Request;
use App\Models\Investissement;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\Http\Client;
use Illuminate\Support\Facades\Redirect;
use App\Models\Credit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // $nbrClients = Depot::withCount('client')->get();
        $nbrTransferts = DB::table('transferts')->where('status', 1)->count('id');

        $nbrParticuliers = DB::table('depots')->count('particulier_id');
        $sumMontantDepotEpargne = DB::table('depots')->sum('montantD');

        $nbrClients = DB::table('depositaries')->count('client_id');
        $sumMontantDepositaryCourant = DB::table('depositaries')->sum('montantD');

        $nbrEntreprises = DB::table('deposits')->count('entreprise_id');
        $sumMontantDepositEpargne = DB::table('deposits')->sum('montantD');

        $nbrSocietys = DB::table('deposes')->count('society_id');
        $sumMontantDeposeCourant = DB::table('deposes')->sum('montantD');

        $forfaits = Forfait::paginate(5);

        $soldeElite = Credit::sum('montant');

        
  

        return view('home' , compact('forfaits','nbrClients','nbrParticuliers','sumMontantDepositaryCourant',
        'sumMontantDepositEpargne','nbrEntreprises','sumMontantDepotEpargne','nbrSocietys',
        'sumMontantDeposeCourant', 'nbrTransferts','soldeElite'));


    //     $dataPoints = [];

    //     foreach ($forfaits as $forfait) {
            
    //         $dataPoints[] = array(
    //             "libelle_Forfait" => $forfait['libelle_Forfait'],
    //             "data" => [
    //                 intval($forfait['duree']),
    //                 intval($forfait['pourcentageM']),
    //                 intval($forfait['pourcentageJ']),
    //             ],
    //         );
    //     }

    //     return view("home", [
    //         "data" => json_encode($dataPoints),
    //         "terms" => json_encode(array(
    //             "Duree",
    //             "%Mensuel",
    //             "%Jalonnement",
    //         )),
    //     ]);
     }



    

    // public function chart(){

    //     $result = DB::table('depots')
    //     ->orderBy('created_at', 'ASC')
    //     ->get();

    //     return response()->json($result);
    // }
   

   
}
