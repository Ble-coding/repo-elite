<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Forfait;
use Illuminate\Http\Request;
use App\Models\Investissement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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

        
        $forfaits = Forfait::with('investissements')->get();

  

        return view('home' , compact('forfaits'));


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
