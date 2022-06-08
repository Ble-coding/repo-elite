<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return view('404');   
});  




Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->middleware(['auth'])->name('home');
// Route::get('home/chart', [App\Http\Controllers\HomeController::class, 'chart']);
 


// Route::get('/visiteur', [App\Http\Controllers\VisiteursController::class, 'index' ])->name('visiteur.index');
// Route::get('/visiteur/create', [App\Http\Controllers\VisiteursController::class, 'create'])->name('visiteur.create');
// Route::post('/visiteur', [App\Http\Controllers\VisiteursController::class, 'store'])->name('visiteur.store');
// Route::get('/visiteur/{visiteur}', [App\Http\Controllers\VisiteursController::class, 'show'])->name('visiteur.show');
// Route::get('/visiteur/{visiteur}/edit', [App\Http\Controllers\VisiteursController::class, 'edit'])->name('visiteur.edit');
// Route::patch('/visiteur/{visiteur}', [App\Http\Controllers\VisiteursController::class, 'update'])->name('visiteur.update');
// Route::delete('/visiteur/{visiteur}', [App\Http\Controllers\VisiteursController::class, 'destroy'])->name('visiteur.destroy');
// Route::put('/visiteur/{visiteur}/restore', [App\Http\Controllers\VisiteursController::class, 'restore'])->name('visiteur.restore');
 
// Route::resource('/transferts', 'App\Http\Controllers\TransfertsController');

// Route::resource('/recharges', 'App\Http\Controllers\RechargesController');

Route::get('/recharges', [App\Http\Controllers\RechargesController::class, 'index'])->name('recharges.index');
Route::post('/recharges', [App\Http\Controllers\RechargesController::class, 'store'])->name('recharges.store');
Route::get('/recharges/{recharge}', [App\Http\Controllers\RechargesController::class, 'show'])->name('recharges.show');
Route::get('/recharges/{recharge}/edit', [App\Http\Controllers\RechargesController::class, 'edit'])->name('recharges.edit');
// Route::get('/retires/{recharge}/stored/', [App\Http\Controllers\RechargesController::class, 'stored'])->name('retires.stored');
Route::post('/retires', [App\Http\Controllers\RechargesController::class, 'storeded'])->name('retires.storeded');
Route::patch('/recharges/{recharge}', [App\Http\Controllers\RechargesController::class, 'update'])->name('recharges.update');
Route::delete('/recharges/{recharge}', [App\Http\Controllers\RechargesController::class, 'destroy'])->name('recharges.destroy');


Route::get('/transferts', [App\Http\Controllers\TransfertsController::class, 'index'])->name('transferts.index');

Route::prefix('transferts')->name('transfert.')->group(function() {
Route::post('/transferts', [App\Http\Controllers\TransfertsController::class, 'store'])->name('transferts.store');
Route::get('/transferts/{transfert}', [App\Http\Controllers\TransfertsController::class, 'show'])->name('transferts.show');
Route::get('/transferts/{transfert}/edit', [App\Http\Controllers\TransfertsController::class, 'edit'])->name('transferts.edit');
Route::get('/validates/{transfert}/stored/', [App\Http\Controllers\TransfertsController::class, 'stored'])->name('validates.stored');
Route::post('/validates', [App\Http\Controllers\TransfertsController::class, 'storeded'])->name('validates.storeded');
// Route::get('/prints/{transfert}/print/', [App\Http\Controllers\TransfertsController::class, 'print'])->name('prints.printer');
// Route::get('/vers/{vente}/print/', [App\Http\Controllers\ElitesController::class, 'vers'])->name('printers.printer');

Route::patch('/transferts/{transfert}', [App\Http\Controllers\TransfertsController::class, 'update'])->name('transferts.update');
Route::delete('/transferts/{transfert}', [App\Http\Controllers\TransfertsController::class, 'destroy'])->name('transferts.destroy');
// Route::put('/transferts/{transfert}/restore', [App\Http\Controllers\TransfertsController::class, 'restore'])->name('transferts.restore');

});



Route::prefix('elite')->name('elite.')->group(function() {

// Route::get('/visiteur', [App\Http\Controllers\VisiteursController::class, 'index' ])->name('visiteur.index');


Route::get('deal', [App\Http\Controllers\ElitesController::class, 'initial'])->name('elites.deal');
Route::get('index', [App\Http\Controllers\ElitesController::class, 'index'])->name('elites.index');

// Route::get('/visiteur/create', [App\Http\Controllers\ElitesController::class, 'created'])->name('visiteur.created');
// Route::post('/visiteur', [App\Http\Controllers\ElitesController::class, 'enregistre'])->name('visiteur.enregistre');
// Route::get('/visiteur/{visiteur}', [App\Http\Controllers\ElitesController::class, 'showed'])->name('visiteur.showed');
// Route::get('/visiteur/{visiteur}/edit', [App\Http\Controllers\ElitesController::class, 'edited'])->name('visiteur.edited');
// Route::patch('/visiteur/{visiteur}', [App\Http\Controllers\ElitesController::class, 'updated'])->name('visiteur.updated');
// Route::delete('/visiteur/{visiteur}', [App\Http\Controllers\ElitesController::class, 'destroyed'])->name('visiteur.destroyed');
// Route::put('/visiteur/{visiteur}/restore', [App\Http\Controllers\ElitesController::class, 'restored'])->name('visiteur.restored');

// Route::get('/ventes/create', [App\Http\Controllers\ElitesController::class, 'create'])->name('elites.create');
Route::post('/ventes', [App\Http\Controllers\ElitesController::class, 'store'])->name('elites.store');
Route::get('/decaisses/{vente}/stord/', [App\Http\Controllers\ElitesController::class, 'stord'])->name('decaisses.stord');
Route::post('/decaisses', [App\Http\Controllers\ElitesController::class, 'storded'])->name('decaisses.storded');
Route::post('/factures', [App\Http\Controllers\ElitesController::class, 'factures'])->name('factures.generate');
Route::get('/ventes/{vente}', [App\Http\Controllers\ElitesController::class, 'show'])->name('elites.show');
Route::get('/vente/{vente}/edit', [App\Http\Controllers\ElitesController::class, 'edit'])->name('elites.edit');
Route::get('/rachats/{vente}/stored/', [App\Http\Controllers\ElitesController::class, 'stored'])->name('rachats.stored');
Route::post('/rachats', [App\Http\Controllers\ElitesController::class, 'storeded'])->name('rachats.storeded');
Route::get('/prints/{vente}/print/', [App\Http\Controllers\ElitesController::class, 'print'])->name('prints.printer');
// Route::get('/vers/{vente}/print/', [App\Http\Controllers\ElitesController::class, 'vers'])->name('printers.printer');
Route::patch('/ventes/{vente}', [App\Http\Controllers\ElitesController::class, 'update'])->name('elites.update');
Route::delete('/ventes/{vente}', [App\Http\Controllers\ElitesController::class, 'destroy'])->name('elites.destroy');
Route::put('/ventes/{vente}/restore', [App\Http\Controllers\ElitesController::class, 'restore'])->name('elites.restore');
});

//Admin
// Route::resource('/admin/users', 'App\Http\Controllers\Admin\UsersController');->middleware('can:manage-users')
Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function() {
    // Route::resource('/users', 'App\Http\Controllers\Admin\UsersController');
    Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index' ])->name('users.index');
    Route::get('/users/create', [App\Http\Controllers\Admin\UsersController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [App\Http\Controllers\Admin\UsersController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\Admin\UsersController::class, 'edit'])->name('users.edit');
    Route::patch('/users/{user}', [App\Http\Controllers\Admin\UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\Admin\UsersController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{user}/restore', [App\Http\Controllers\Admin\UsersController::class, 'restore'])->name('users.restore');
    // Route::resource('/forfaits', 'App\Http\Controllers\ForfaitsController');
    Route::get('/forfaits', [App\Http\Controllers\ForfaitsController::class, 'index' ])->name('forfaits.index');
Route::get('/forfaits/create', [App\Http\Controllers\ForfaitsController::class, 'create'])->name('forfaits.create');
Route::post('/forfaits', [App\Http\Controllers\ForfaitsController::class, 'store'])->name('forfaits.store');
Route::get('/forfaits/{forfait}', [App\Http\Controllers\ForfaitsController::class, 'show'])->name('forfaits.show');
Route::get('/forfaits/{forfait}/edit', [App\Http\Controllers\ForfaitsController::class, 'edit'])->name('forfaits.edit');
Route::patch('/forfaits/{forfait}', [App\Http\Controllers\ForfaitsController::class, 'update'])->name('forfaits.update');
Route::delete('/forfaits/{forfait}', [App\Http\Controllers\ForfaitsController::class, 'destroy'])->name('forfaits.destroy');
Route::put('/forfaits/{forfait}/restore', [App\Http\Controllers\ForfaitsController::class, 'restore'])->name('forfaits.restore');
});


// Route::get('/visiteurs', [App\Http\Controllers\ElitesController::class, 'index' ])->name('visiteurs.index');
// Route::get('/visiteurs/create', [App\Http\Controllers\ElitesController::class, 'create'])->name('visiteurs.create');


//forfaits  
// Route::prefix('admin')->middleware('can:manage-users')->name('admin.')->group(function() {
  
// });



// Route::resource('/particuliers', 'App\Http\Controllers\ParticuliersController');
Route::get('/particuliers', [App\Http\Controllers\ParticuliersController::class, 'index' ])->name('particuliers.index');
Route::get('/particuliers/create', [App\Http\Controllers\ParticuliersController::class, 'create'])->name('particuliers.create');
Route::post('/particuliers', [App\Http\Controllers\ParticuliersController::class, 'store'])->name('particuliers.store');
Route::get('/confirms/{particulier}/stored/', [App\Http\Controllers\ParticuliersController::class, 'stored'])->name('confirms.stored');
Route::post('/confirms', [App\Http\Controllers\ParticuliersController::class, 'storeded'])->name('confirms.storeded');
Route::get('/particuliers/{particulier}', [App\Http\Controllers\ParticuliersController::class, 'show'])->name('particuliers.show');
Route::get('/particuliers/print/{particulier}', [App\Http\Controllers\ParticuliersController::class, 'print'])->name('particuliers.print');
Route::get('/particuliers/{particulier}/edit', [App\Http\Controllers\ParticuliersController::class, 'edit'])->name('particuliers.edit');
Route::patch('/particuliers/{particulier}', [App\Http\Controllers\ParticuliersController::class, 'update'])->name('particuliers.update');
Route::delete('/particuliers/{particulier}', [App\Http\Controllers\ParticuliersController::class, 'destroy'])->name('particuliers.destroy');
Route::put('/particuliers/{particulier}/restore', [App\Http\Controllers\ParticuliersController::class, 'restore'])->name('particuliers.restore');


// Route::resource('/entreprises', 'App\Http\Controllers\EntreprisesController');
Route::get('/entreprises', [App\Http\Controllers\EntreprisesController::class, 'index' ])->name('entreprises.index');
Route::get('/entreprises/create', [App\Http\Controllers\EntreprisesController::class, 'create'])->name('entreprises.create');
Route::post('/entreprises', [App\Http\Controllers\EntreprisesController::class, 'store'])->name('entreprises.store');
Route::get('/confirmers/{entreprise}/stored/', [App\Http\Controllers\EntreprisesController::class, 'stored'])->name('confirmers.stored');
Route::post('/confirmers', [App\Http\Controllers\EntreprisesController::class, 'storeded'])->name('confirmers.storeded');
Route::get('/entreprises/{entreprise}', [App\Http\Controllers\EntreprisesController::class, 'show'])->name('entreprises.show');
Route::get('/entreprises/print/{entreprise}', [App\Http\Controllers\EntreprisesController::class, 'print'])->name('entreprises.print');
Route::get('/entreprises/{entreprise}/edit', [App\Http\Controllers\EntreprisesController::class, 'edit'])->name('entreprises.edit');
Route::patch('/entreprises/{entreprise}', [App\Http\Controllers\EntreprisesController::class, 'update'])->name('entreprises.update');
Route::delete('/entreprises/{entreprise}', [App\Http\Controllers\EntreprisesController::class, 'destroy'])->name('entreprises.destroy');
Route::put('/entreprises/{entreprise}/restore', [App\Http\Controllers\EntreprisesController::class, 'restore'])->name('entreprises.restore');

// Route::resource('/clients', 'App\Http\Controllers\ClientsController');


Route::get('/clients', [App\Http\Controllers\ClientsController::class, 'index' ])->name('clients.index');
Route::get('/clients/create', [App\Http\Controllers\ClientsController::class, 'create'])->name('clients.create');
Route::post('/clients', [App\Http\Controllers\ClientsController::class, 'store'])->name('clients.store');
Route::get('/confirmes/{client}/stored/', [App\Http\Controllers\ClientsController::class, 'stored'])->name('confirmes.stored');
Route::post('/confirmes', [App\Http\Controllers\ClientsController::class, 'storeded'])->name('confirmes.storeded');
Route::get('/clients/{client}', [App\Http\Controllers\ClientsController::class, 'show'])->name('clients.show');
Route::get('/clients/print/{client}', [App\Http\Controllers\ClientsController::class, 'print'])->name('clients.print');
Route::get('/clients/{client}/edit', [App\Http\Controllers\ClientsController::class, 'edit'])->name('clients.edit');
Route::patch('/clients/{client}', [App\Http\Controllers\ClientsController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [App\Http\Controllers\ClientsController::class, 'destroy'])->name('clients.destroy');
Route::put('/clients/{client}/restore', [App\Http\Controllers\ClientsController::class, 'restore'])->name('clients.restore');







// Route::resource('/customers', 'App\Http\Controllers\CustomersController');
Route::get('/customers', [App\Http\Controllers\CustomersController::class, 'index' ])->name('customers.index');
Route::get('/customers/create', [App\Http\Controllers\CustomersController::class, 'create'])->name('customers.create');
Route::post('/customers', [App\Http\Controllers\CustomersController::class, 'store'])->name('customers.store');
Route::get('/confirmators/{customer}/stored/', [App\Http\Controllers\CustomersController::class, 'stored'])->name('confirmators.stored');
Route::post('/confirmators', [App\Http\Controllers\CustomersController::class, 'storeded'])->name('confirmators.storeded');
Route::get('/customers/{customer}', [App\Http\Controllers\CustomersController::class, 'show'])->name('customers.show');
Route::get('/customers/print/{customer}', [App\Http\Controllers\CustomersController::class, 'print'])->name('customers.print');
Route::get('/customers/{customer}/edit', [App\Http\Controllers\CustomersController::class, 'edit'])->name('customers.edit');
Route::patch('/customers/{customer}', [App\Http\Controllers\CustomersController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [App\Http\Controllers\CustomersController::class, 'destroy'])->name('customers.destroy');
Route::put('/customers/{customer}/restore', [App\Http\Controllers\CustomersController::class, 'restore'])->name('customers.restore');
// Route::resource('/societies', 'App\Http\Controllers\SocietysController');
Route::get('/societies', [App\Http\Controllers\SocietysController::class, 'index' ])->name('societies.index');
Route::get('/societies/create', [App\Http\Controllers\SocietysController::class, 'create'])->name('societies.create');
Route::post('/societies', [App\Http\Controllers\SocietysController::class, 'store'])->name('societies.store');
Route::get('/confirmeres/{society}/stored/', [App\Http\Controllers\SocietysController::class, 'stored'])->name('confirmeres.stored');
Route::post('/confirmeres', [App\Http\Controllers\SocietysController::class, 'storeded'])->name('confirmeres.storeded');
Route::get('/societies/{society}', [App\Http\Controllers\SocietysController::class, 'show'])->name('societies.show');
Route::get('/societies/print/{society}', [App\Http\Controllers\SocietysController::class, 'print'])->name('societies.print');
Route::get('/societies/{society}/edit', [App\Http\Controllers\SocietysController::class, 'edit'])->name('societies.edit');
Route::patch('/societies/{society}', [App\Http\Controllers\SocietysController::class, 'update'])->name('societies.update');
Route::delete('/societies/{society}', [App\Http\Controllers\SocietysController::class, 'destroy'])->name('societies.destroy');
Route::put('/societies/{society}/restore', [App\Http\Controllers\SocietysController::class, 'restore'])->name('societies.restore');

Route::resource('/parrains', 'App\Http\Controllers\ParrainagesController'); 
Route::resource('/valeurs', 'App\Http\Controllers\ValeursController');

//particulier
//depot
Route::prefix('depot')->name('depot.')->group(function() {
    // Route::resource('/depots', 'App\Http\Controllers\DepotsController');
Route::get('/depots', [App\Http\Controllers\DepotsController::class, 'index' ])->name('depots.index');
Route::post('/depots', [App\Http\Controllers\DepotsController::class, 'store'])->name('depots.store');
// Route::post('/retraits', [App\Http\Controllers\DepotsController::class, 'stored'])->name('depots.stored');
Route::get('/depots/create', [App\Http\Controllers\DepotsController::class, 'create'])->name('depots.create');
Route::get('/depots/{depot}', [App\Http\Controllers\DepotsController::class, 'show'])->name('depots.show');
Route::get('/prints/{depot}/print/', [App\Http\Controllers\DepotsController::class, 'print'])->name('prints.printer');
Route::get('/retraits/{depot}/stored/', [App\Http\Controllers\DepotsController::class, 'stored'])->name('depots.stored');
Route::post('/retraits', [App\Http\Controllers\DepotsController::class, 'storeded'])->name('depots.storeded');
Route::get('/depots/{depot}/edit/', [App\Http\Controllers\DepotsController::class, 'edit'])->name('depots.edit');
Route::patch('/depots/{depot}', [App\Http\Controllers\DepotsController::class, 'update'])->name('depots.update');
Route::delete('/depots/{depot}', [App\Http\Controllers\DepotsController::class, 'destroy'])->name('depots.destroy');
Route::put('/depots/{depot}/restore', [App\Http\Controllers\DepotsController::class, 'restore'])->name('depots.restore');
});

Route::prefix('retrait')->name('retrait.')->group(function() {
Route::get('/retraits/{retrait}', [App\Http\Controllers\RetraitsController::class, 'edit'])->name('retraits.edit');
Route::get('/prints/{retrait}/printer/', [App\Http\Controllers\RetraitsController::class, 'printer'])->name('printer.printer');
Route::delete('/retraits/{retrait}', [App\Http\Controllers\RetraitsController::class, 'destroy'])->name('retraits.destroy');
Route::patch('/retraits/{retrait}', [App\Http\Controllers\RetraitsController::class, 'update'])->name('retraits.update');
Route::put('/retraits/{retrait}/restore', [App\Http\Controllers\RetraitsController::class, 'restore'])->name('retraits.restore');
});

Route::prefix('depositary')->name('depositary.')->group(function() {
    // Route::resource('/depots', 'App\Http\Controllers\DepotsController');
Route::get('/depositarys', [App\Http\Controllers\DepositarysController::class, 'index' ])->name('depositarys.index');
Route::post('/depositarys', [App\Http\Controllers\DepositarysController::class, 'store'])->name('depositarys.store');
Route::post('/removes', [App\Http\Controllers\DepositarysController::class, 'stored'])->name('depositarys.stored');
Route::get('/depositarys/create', [App\Http\Controllers\DepositarysController::class, 'create'])->name('depositarys.create');
Route::get('/depositarys/{depositary}', [App\Http\Controllers\DepositarysController::class, 'show'])->name('depositarys.show');
Route::get('/prints/{depositary}/print/', [App\Http\Controllers\DepositarysController::class, 'print'])->name('prints.printer');
Route::get('/removes/{depositary}/stored/', [App\Http\Controllers\DepositarysController::class, 'stored'])->name('depositarys.stored');
Route::post('/removes', [App\Http\Controllers\DepositarysController::class, 'storeded'])->name('depositarys.storeded');
Route::get('/depositarys/{depositary}/edit/', [App\Http\Controllers\DepositarysController::class, 'edit'])->name('depositarys.edit');
Route::patch('/depositarys/{depositary}', [App\Http\Controllers\DepositarysController::class, 'update'])->name('depositarys.update');
Route::delete('/depositarys/{depositary}', [App\Http\Controllers\DepositarysController::class, 'destroy'])->name('depositarys.destroy');
Route::put('/depositarys/{depositary}/restore', [App\Http\Controllers\DepositarysController::class, 'restore'])->name('depositarys.restore');
});


Route::prefix('remove')->name('remove.')->group(function() {
    Route::get('/removes/{remove}', [App\Http\Controllers\RemovesController::class, 'edit'])->name('removes.edit');
    Route::delete('/removes/{remove}', [App\Http\Controllers\RemovesController::class, 'destroy'])->name('removes.destroy');
    Route::get('/prints/{remove}/printer/', [App\Http\Controllers\RemovesController::class, 'printer'])->name('printer.printer');
    Route::patch('/removes/{remove}', [App\Http\Controllers\RemovesController::class, 'update'])->name('removes.update');
    Route::put('/removes/{remove}/restore', [App\Http\Controllers\RemovesController::class, 'restore'])->name('removes.restore');
 });



//retrait
// Route::prefix('retrait')->name('retrait.')->group(function() {
//     Route::resource('/retraits', 'App\Http\Controllers\RetraitsController');
// });

//solde
Route::prefix('solde')->name('solde.')->group(function() {
    Route::resource('/soldes', 'App\Http\Controllers\SoldesController');
});
Route::prefix('sode')->name('sode.')->group(function() {
    Route::resource('/sodes', 'App\Http\Controllers\SodesController');
});


//entreprise
//depot
Route::prefix('deposit')->name('deposit.')->group(function() {
    // Route::resource('/deposits', 'App\Http\Controllers\DepositsController');
Route::get('/deposits', [App\Http\Controllers\DepositsController::class, 'index' ])->name('deposits.index');
Route::post('/deposits', [App\Http\Controllers\DepositsController::class, 'store'])->name('deposits.store');
// Route::post('/withadrals', [App\Http\Controllers\DepositsController::class, 'stored'])->name('deposits.stored');
Route::get('/deposits/create', [App\Http\Controllers\DepositsController::class, 'create'])->name('deposits.create');
Route::get('/deposits/{deposit}', [App\Http\Controllers\DepositsController::class, 'show'])->name('deposits.show');
Route::get('/prints/{deposit}/print/', [App\Http\Controllers\DepositsController::class, 'print'])->name('prints.printer');
Route::get('/withadrals/{deposit}/stored/', [App\Http\Controllers\DepositsController::class, 'stored'])->name('deposits.stored');
Route::post('/withadrals', [App\Http\Controllers\DepositsController::class, 'storeded'])->name('deposits.storeded');
Route::get('/deposits/{deposit}/edit/', [App\Http\Controllers\DepositsController::class, 'edit'])->name('deposits.edit');
Route::patch('/deposits/{deposit}', [App\Http\Controllers\DepositsController::class, 'update'])->name('deposits.update');
Route::delete('/deposits/{deposit}', [App\Http\Controllers\DepositsController::class, 'destroy'])->name('deposits.destroy');
Route::put('/deposits/{deposit}/restore', [App\Http\Controllers\DepositsController::class, 'restore'])->name('deposits.restore');
;
});

Route::prefix('withadral')->name('withadral.')->group(function() {
Route::get('/withadrals/{withadral}', [App\Http\Controllers\WithadralsController::class, 'edit'])->name('withadrals.edit');
Route::get('/prints/{withadral}/printer/', [App\Http\Controllers\WithadralsController::class, 'printer'])->name('printer.printer');
Route::delete('/withadrals/{withadral}', [App\Http\Controllers\WithadralsController::class, 'destroy'])->name('withadrals.destroy');
Route::patch('/withadrals/{withadral}', [App\Http\Controllers\WithadralsController::class, 'update'])->name('withadrals.update');
Route::put('/withadrals/{withadral}/restore', [App\Http\Controllers\WithadralsController::class, 'restore'])->name('withadrals.restore');
});



//depot
Route::prefix('depose')->name('depose.')->group(function() {
    // Route::resource('/deposits', 'App\Http\Controllers\DepositsController');
Route::get('/deposes', [App\Http\Controllers\DeposesController::class, 'index' ])->name('deposes.index');
Route::post('/deposes', [App\Http\Controllers\DeposesController::class, 'store'])->name('deposes.store');
// Route::post('/widraws', [App\Http\Controllers\DeposesController::class, 'stored'])->name('deposes.stored');
Route::get('/deposes/create', [App\Http\Controllers\DeposesController::class, 'create'])->name('deposes.create');
Route::get('/deposes/{depose}', [App\Http\Controllers\DeposesController::class, 'show'])->name('deposes.show');
Route::get('/prints/{depose}/print/', [App\Http\Controllers\DeposesController::class, 'print'])->name('prints.printer');
Route::get('/widraws/{depose}/stored/', [App\Http\Controllers\DeposesController::class, 'stored'])->name('deposes.stored');
Route::post('/widraws', [App\Http\Controllers\DeposesController::class, 'storeded'])->name('deposes.storeded');
Route::get('/deposes/{depose}/edit/', [App\Http\Controllers\DeposesController::class, 'edit'])->name('deposes.edit');
Route::patch('/deposes/{depose}', [App\Http\Controllers\DeposesController::class, 'update'])->name('deposes.update');
Route::delete('/deposes/{depose}', [App\Http\Controllers\DeposesController::class, 'destroy'])->name('deposes.destroy');
Route::put('/deposes/{depose}/restore', [App\Http\Controllers\DeposesController::class, 'restore'])->name('deposes.restore');
});


Route::prefix('widraw')->name('widraw.')->group(function() {
    // Route::resource('/widraws', 'App\Http\Controllers\WidrawsController');
    Route::get('/prints/{widraw}/printer/', [App\Http\Controllers\WidrawsController::class, 'printer'])->name('printer.printer');
    Route::get('/widraws/{widraw}', [App\Http\Controllers\WidrawsController::class, 'edit'])->name('widraws.edit');
    Route::delete('/widraws/{widraw}', [App\Http\Controllers\WidrawsController::class, 'destroy'])->name('widraws.destroy');
    Route::patch('/widraws/{widraw}', [App\Http\Controllers\WidrawsController::class, 'update'])->name('widraws.update');
    Route::put('/widraws/{widraw}/restore', [App\Http\Controllers\WidrawsController::class, 'restore'])->name('widraws.restore');
});


//retrait
// Route::prefix('withadral')->name('withadral.')->group(function() {
//     Route::resource('/withadrals', 'App\Http\Controllers\WithadralsController');
// });

//solde
Route::prefix('sold')->name('sold.')->group(function() {
    Route::resource('/solds', 'App\Http\Controllers\SoldsController');
});
Route::prefix('sod')->name('sod.')->group(function() {
    Route::resource('/sods', 'App\Http\Controllers\SodsController');
});

Route::prefix('somme')->name('somme.')->group(function() {
    Route::resource('/sommes', 'App\Http\Controllers\SommesController');
});




//investissement
//investir
Route::prefix('investir')->name('investir.')->group(function() {
    // Route::resource('/depots', 'App\Http\Controllers\DepotsController');
Route::get('/investis', [App\Http\Controllers\InvestissementsController::class, 'index' ])->name('investis.index');
Route::get('/bonus', [App\Http\Controllers\InvestissementsController::class, 'initial' ])->name('bonus.initial');
Route::get('/bonus/{investi}/edited/', [App\Http\Controllers\InvestissementsController::class, 'edited'])->name('bonus.edited');
Route::post('/bonus', [App\Http\Controllers\InvestissementsController::class, 'enregistre'])->name('bonus.enregistre');
Route::post('/investis', [App\Http\Controllers\InvestissementsController::class, 'store'])->name('investis.store');
// Route::post('/diminishes', [App\Http\Controllers\InvestissementsController::class, 'stored'])->name('diminishes.stored');

Route::get('/investis/create', [App\Http\Controllers\InvestissementsController::class, 'create'])->name('investis.create');
Route::get('/investis/{investi}', [App\Http\Controllers\InvestissementsController::class, 'show'])->name('investis.show');
Route::get('/investis/{investi}/edit/', [App\Http\Controllers\InvestissementsController::class, 'edit'])->name('investis.edit');
Route::get('/prints/{investi}/print/', [App\Http\Controllers\InvestissementsController::class, 'print'])->name('prints.printer');
Route::get('/diminishes/{investi}/stored/', [App\Http\Controllers\InvestissementsController::class, 'stored'])->name('diminishes.stored');
Route::post('/diminishes', [App\Http\Controllers\InvestissementsController::class, 'storeded'])->name('diminishes.storeded');
Route::patch('/investis/{investi}', [App\Http\Controllers\InvestissementsController::class, 'update'])->name('investis.update');
Route::delete('/investis/{investi}', [App\Http\Controllers\InvestissementsController::class, 'destroy'])->name('investis.destroy');
});


Route::prefix('diminish')->name('diminish.')->group(function() {
    Route::get('/diminishes/{diminish}', [App\Http\Controllers\DiminishesController::class, 'edit'])->name('diminishes.edit');
    Route::delete('/diminishes/{diminish}', [App\Http\Controllers\DiminishesController::class, 'destroy'])->name('diminishes.destroy');
    Route::patch('/diminishes/{diminish}', [App\Http\Controllers\DiminishesController::class, 'update'])->name('diminishes.update');
    });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
