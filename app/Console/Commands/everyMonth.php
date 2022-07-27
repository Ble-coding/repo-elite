<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Sode;
use App\Models\Credit;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class everyMonth extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */ 
    protected $signature = 'month:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Debite 1000f sur tous les comptes ';

    /** 
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $schedule->call(function () {
            $bakari = 1000;

        // $startPreviousMonth = Carbon::now()->startOfMonth()->subMonthsNoOverflow()->toDateString();
        $startPreviousMonth = "2022-05-01";
        // $endPreviousMonth = Carbon::now()->subMonthsNoOverflow()->endOfMonth()->toDateString();
        $endPreviousMonth = Carbon::now()->subMonthsNoOverflow()->endOfMonth()->subDay(25)->toDateString();
        // $endPreviousMonth = Carbon::now()->startOfMonth()->toDateString();

        // dd($endPreviousMonth );
        // $start = Carbon::now()->startOfMonth()->toDateString();
        // $end = Carbon::now()->endOfMonth()->toDateString();

        $countPreviousQuantityMonthSolde = DB::table('soldes')->whereBetween('created_at',
        [$startPreviousMonth, $endPreviousMonth])->count('particulier_id');

        $countPreviousQuantityMonthSold = DB::table('solds')->whereBetween('created_at',
        [$startPreviousMonth, $endPreviousMonth])->count('entreprise_id');

        
                  
        $myString = '1,8,9,10,12,13,14,15,16,20,21,28,29';
        $myArray = explode(',', $myString);

        $countPreviousQuantityMonthSode = DB::table('sodes')->whereBetween('created_at',
        [$startPreviousMonth, $endPreviousMonth])
        ->whereNotIn('id', $myArray)->count('client_id');

        $countPreviousQuantityMonthSod = DB::table('sods')->whereBetween('created_at',
        [$startPreviousMonth, $endPreviousMonth])->count('society_id');



        $decrementPreviousMonthSolde = DB::table('soldes')->whereBetween('created_at', 
        [$startPreviousMonth, $endPreviousMonth])->decrement('montantD', $bakari);

        $decrementPreviousMonthSold = DB::table('solds')->whereBetween('created_at', 
        [$startPreviousMonth, $endPreviousMonth])->decrement('montantD', $bakari);

        
        $decrementPreviousMonthSode = DB::table('sodes')->whereBetween('created_at', 
        [$startPreviousMonth, $endPreviousMonth]) 
        ->whereNotIn('id', $myArray)->decrement('montantD', $bakari);

        
        // dd($countPreviousQuantityMonthSode);

        $decrementPreviousMonthSod = DB::table('sods')->whereBetween('created_at', 
        [$startPreviousMonth, $endPreviousMonth])->decrement('montantD', $bakari);

         $sommeSolde =  $countPreviousQuantityMonthSolde * $bakari;
         $sommeSold =  $countPreviousQuantityMonthSold * $bakari;
         $sommeSode =  $countPreviousQuantityMonthSode * $bakari;
         $sommeSod =  $countPreviousQuantityMonthSod * $bakari;
         
          $recois = Credit::where([
            ['id', '=', 1],
        ])->first();



        if ($decrementPreviousMonthSolde) {
            $recois->increment('montant',  $sommeSolde );
        } 

        if ($decrementPreviousMonthSold) {
            $recois->increment('montant',  $sommeSold );
        } 

        if ($decrementPreviousMonthSode) {
            $recois->increment('montant',  $sommeSode );
        } 
        if ($decrementPreviousMonthSod) {
            $recois->increment('montant',  $sommeSod );
        } 

            // $solde = DB::table('soldes')->decrement('montantD', $bakari);
            // $sold = DB::table('solds')->decrement('montantD', $bakari);
            // $sode = DB::table('sodes')->decrement('montantD', $bakari);
            // $sod = DB::table('sods')->decrement('montantD', $bakari);
    
    
            echo 'Operation reussie';
        // })->everyMinute();
            //  })->monthlyOn(5, '15:00');
    }
}
