<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-users', function($user) {       
            return $user->hasAnyRole(['Administrateur']);
        });

        Gate::define('show-users', function($user) {       
            return $user->isAdmin();
        });

        Gate::define('edit-users', function($user) {       
            return $user->isAdmin();
        });

        Gate::define('delete-users', function($user) {
            return $user->isAdmin();
        });



        Gate::define('manage-bancaires', function($bancaire) {       
            return $bancaire->hasAnyRole(['Analyste','Administrateur']);
        });
        Gate::define('show-bancaires', function($bancaire) {       
            return $bancaire->isAdmin();
        });

        Gate::define('edit-bancaires', function($bancaire) {       
            return $bancaire->isAdmin();
        });

        Gate::define('delete-bancaires', function($bancaire) {
            return $bancaire->isAdmin();
        });
        


        //particulier

        Gate::define('manage-particuliers', function($particulier) {       
            return $particulier->hasAnyRole(['Analyste','Commercial','Administrateur']);
        });

        Gate::define('show-particuliers', function($particulier) {       
            return $particulier->isAdmin();
        });

        Gate::define('edit-particuliers', function($particulier) {       
            return $particulier->isAdmin();
        });

        Gate::define('delete-particuliers', function($particulier) {
            return $particulier->isAdmin();
        });

        Gate::define('manage-clients', function($client) {       
            return $client->hasAnyRole(['Commercial','Administrateur']);
        });

        Gate::define('show-clients', function($client) {       
            return $client->isAdmin();
        });

        Gate::define('edit-clients', function($client) {       
            return $client->isAdmin();
        });

        Gate::define('delete-clients', function($client) {
            return $client->isAdmin();
        });


        Gate::define('manage-visiteurs', function($visiteur) {       
            return $visiteur->hasAnyRole(['Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-visiteurs', function($visiteur) {       
            return $visiteur->isAdmin();
        });

        Gate::define('edit-visiteurs', function($visiteur) {       
            return $visiteur->isAdmin();
        });

        Gate::define('delete-visiteurs', function($visiteur) {
            return $visiteur->isAdmin();
        });


        Gate::define('manage-ventes', function($vente) {       
            return $vente->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-ventes', function($vente) {       
            return $vente->isAdmin();
        });

        Gate::define('edit-ventes', function($vente) {       
            return $vente->isAdmin();
        });

        Gate::define('delete-ventes', function($vente) {
            return $vente->isAdmin();
        });

        //customer
        Gate::define('manage-customers', function($customer) {       
            return $customer->hasAnyRole(['Analyste','Commercial','Administrateur']);
        });

        Gate::define('show-customers', function($customer) {       
            return $customer->isAdmin();
        });

        Gate::define('edit-customers', function($customer) {       
            return $customer->isAdmin();
        });

        Gate::define('delete-customers', function($customer) {
            return $customer->isAdmin();
        });


        //entreprise
        Gate::define('manage-entreprises', function($entreprise) {       
            return $entreprise->hasAnyRole(['Analyste','Commercial','Administrateur']);
        });

        Gate::define('show-entreprises', function($entreprise) {       
            return $entreprise->isAdmin();
        });

        Gate::define('edit-entreprises', function($entreprise) {       
            return $entreprise->isAdmin();
        });

        Gate::define('delete-entreprises', function($entreprise) {
            return $entreprise->isAdmin();
        });


        Gate::define('manage-societys', function($society) {       
            return $society->hasAnyRole(['Analyste','Commercial','Administrateur']);
        });

        Gate::define('show-societys', function($society) {       
            return $society->isAdmin();
        });

        Gate::define('edit-societys', function($society) {       
            return $society->isAdmin();
        });

        Gate::define('delete-societys', function($society) {
            return $society->isAdmin();
        });

          //solde
          Gate::define('manage-soldes', function($solde) {       
            return $solde->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-soldes', function($solde) {       
            return $solde->isAdmin();
        });

        Gate::define('edit-soldes', function($solde) {       
            return $solde->isAdmin();
        });

        Gate::define('delete-soldes', function($solde) {
            return $solde->isAdmin();
        });


         //solde
         Gate::define('manage-sommes', function($somme) {       
            return $somme->hasAnyRole(['Analyste','Comptable','Caissiere', 'Administrateur']);
        });

        Gate::define('show-sommes', function($somme) {       
            return $somme->isAdmin();
        });

        Gate::define('edit-sommes', function($somme) {       
            return $somme->isAdmin();
        });

        Gate::define('delete-sommes', function($somme) {
            return $somme->isAdmin();
        });


 

         //solde
         Gate::define('manage-solds', function($sold) {       
            return $sold->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-solds', function($sold) {       
            return $sold->isAdmin();
        });

        Gate::define('edit-solds', function($sold) {       
            return $sold->isAdmin();
        });

        Gate::define('delete-soldes', function($sold) {
            return $sold->isAdmin();
        });


        //depot

        Gate::define('manage-investis', function($investi) {       
            return $investi->hasAnyRole(['Analyste','Administrateur','Caissiere','Comptable']);
        });

        Gate::define('show-investis', function($investi) {       
            return $investi->isAdmin();
        });

        Gate::define('edit-investis', function($investi) {       
            return $investi->isAdmin();
        });


        Gate::define('manage-caisses', function($caisse) {       
            return $caisse->hasAnyRole(['Analyste','Administrateur','Comptable']);
        });

        Gate::define('delete-caisses', function($caisse) {
            return $caisse->isAdmin();
        });

        Gate::define('manage-caisses', function($caisse) {       
            return $caisse->hasAnyRole(['Administrateur']);
        });

        Gate::define('show-caisses', function($caisse) {       
            return $caisse->isAdmin();
        });

        Gate::define('edit-caisses', function($caisse) {       
            return $caisse->isAdmin();
        });

        Gate::define('delete-caisses', function($caisse) {
            return $caisse->isAdmin();
        });


        Gate::define('manage-depots', function($depot) {       
            return $depot->hasAnyRole(['Analyste','Commercial','Administrateur']);
        });

        Gate::define('show-depots', function($depot) {       
            return $depot->isAdmin();
        });

        Gate::define('edit-depots', function($depot) {       
            return $depot->isAdmin();
        });

        Gate::define('delete-depots', function($depot) {
            return $depot->isAdmin();
        });

        Gate::define('manage-depositarys', function($depositary) {       
            return $depositary->hasAnyRole(['Analyste','Comptable', 'Caissiere','Administrateur']);
        });

        Gate::define('show-depositarys', function($depositary) {       
            return $depositary->isAdmin();
        });

        Gate::define('edit-depositarys', function($depositary) {       
            return $depositary->isAdmin();
        });

        Gate::define('delete-depositarys', function($depositary) {
            return $depositary->isAdmin();
        });

          //depot
          Gate::define('manage-deposits', function($depot) {       
            return $depot->hasAnyRole(['Analyste','Commercial','Administrateur']);
        });

        Gate::define('show-deposits', function($depot) {       
            return $depot->isAdmin();
        });

        Gate::define('edit-deposits', function($depot) {       
            return $depot->isAdmin();
        });

        Gate::define('delete-deposits', function($depot) {
            return $depot->isAdmin();
        });

        Gate::define('manage-deposes', function($depose) {       
            return $depose->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-deposes', function($depose) {       
            return $depose->isAdmin();
        });

        Gate::define('edit-deposes', function($depose) {       
            return $depose->isAdmin();
        });

        Gate::define('delete-deposes', function($depose) {
            return $depose->isAdmin();
        });


        Gate::define('manage-retraits', function($depot) {       
            return $depot->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-retraits', function($depot) {       
            return $depot->isAdmin();
        });

        Gate::define('edit-retraits', function($depot) {       
            return $depot->isAdmin();
        });

        Gate::define('delete-retraits', function($depot) {
            return $depot->isAdmin();
        });



        Gate::define('manage-diminishes', function($diminish) {       
            return $diminish->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-diminishes', function($diminish) {       
            return $diminish->isAdmin();
        });

        Gate::define('edit-diminishes', function($diminish) {       
            return $diminish->isAdmin();
        });

        Gate::define('delete-diminishes', function($diminish) {
            return $diminish->isAdmin();
        });



        //retrait
        Gate::define('manage-removes', function($remove) {       
            return $remove->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-removes', function($remove) {       
            return $remove->isAdmin();
        });

        Gate::define('edit-removes', function($remove) {       
            return $remove->isAdmin();
        });

        Gate::define('delete-removes', function($remove) {
            return $remove->isAdmin();
        });

           //retrait
           Gate::define('manage-retraits', function($retrait) {       
            return $retrait->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
        });

        Gate::define('show-retraits', function($retrait) {       
            return $retrait->isAdmin();
        });

        Gate::define('edit-retraits', function($retrait) {       
            return $retrait->isAdmin();
        });

        Gate::define('delete-retraits', function($retrait) {
            return $retrait->isAdmin();
        });


   //withadral
   Gate::define('manage-withadrals', function($withadral) {       
    return $withadral->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
});

Gate::define('show-withadrals', function($withadral) {       
    return $withadral->isAdmin();
});

Gate::define('edit-withadrals', function($withadral) {       
    return $withadral->isAdmin();
});

Gate::define('delete-withadrals', function($withadral) {
    return $withadral->isAdmin();
});



Gate::define('manage-widraws', function($widraw) {       
    return $widraw->hasAnyRole(['Analyste','Comptable','Caissiere','Administrateur']);
});

Gate::define('show-widraws', function($widraw) {       
    return $widraw->isAdmin();
});

Gate::define('edit-widraws', function($widraw) {       
    return $widraw->isAdmin();
});

Gate::define('delete-widraws', function($widraw) {
    return $widraw->isAdmin();
});

    //epargne_particulier

    Gate::define('manage-epargne_particuliers', function($epargne_particulier) {       
        return $epargne_particulier->hasAnyRole(['Commercial','Administrateur']);
    });

    Gate::define('show-epargne_particuliers', function($epargne_particulier) {       
        return $epargne_particulier->isAdmin();
    });

    Gate::define('edit-epargne_particuliers', function($epargne_particulier) {       
        return $epargne_particulier->isAdmin();
    });

    Gate::define('delete-epargne_particuliers', function($epargne_particulier) {
        return $epargne_particulier->isAdmin();
    });
}  
    
}
