<?php

use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\DecouverteController;
use App\Http\Controllers\DevisTeamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

//****** Home *******//
Route::get('/', [HomeController::class, 'accueil'])->name('accueil');
Route::get('/a-propos', [HomeController::class, 'apropos'])->name('apropos');
Route::get('/location-vehicule', [HomeController::class, 'locationvehicule'])->name('locationvehicule');
Route::post('/reservation-vehicule', [HomeController::class, 'reservationvehicule_store'])->name('reservationvehicules.store');
Route::get('/team-building', [HomeController::class, 'teambuilding'])->name('teambuilding');
Route::post('/teambuilding_store', [HomeController::class, 'store_teambuilding'])->name('teambuilding.store');
Route::get('/decouverte', [HomeController::class, 'decouverte'])->name('decouverte');
Route::get('/decouverte/{slug}', [HomeController::class, 'decouverteshow'])->name('decouverteshow');
Route::get('/agence', [HomeController::class, 'agence'])->name('agence');
Route::post('/agence_store', [HomeController::class, 'store_agence'])->name('agence.store');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact_store', [HomeController::class, 'store_contact'])->name('contact.store');


//****** Dashboard *******//

Route::get('/dashboard', [DashController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/dashboard')->middleware('auth')->group(function () {

    //Reservation vehicule
    Route::get('reservation-vehicule', [VehiculeController::class, 'index'])->name('vehicule.index');
    Route::get('reservation-vehicule/{devisvehicule}', [VehiculeController::class, 'show'])->name('vehicule.show');
    Route::delete('reservation-vehicule/{devisvehicule}', [VehiculeController::class, 'destroy'])->name('vehicule.destroy');

    //Devis Team building
    Route::get('devisteam', [DevisTeamController::class, 'index'])->name('devisteam.index');
    Route::get('devisteam/{devisteam}', [DevisTeamController::class, 'show'])->name('devisteam.show');
    Route::delete('devisteam/{devisteam}', [DevisTeamController::class, 'destroy'])->name('devisteam.destroy');
    Route::get('teambuilding', [DevisTeamController::class, 'index_tb'])->name('teambuilding.liste');
    Route::get('teambuilding/create', [DevisTeamController::class, 'create_tb'])->name('teambuilding.ajouter');
    Route::post('teambuilding', [DevisTeamController::class, 'store_tb'])->name('team_building.store');


    //Decouverte
    Route::resource('decouverte', DecouverteController::class);

    //Reservation agence
    Route::get('liste-reservation', [AgenceController::class, 'index'])->name('agence.index');
    Route::get('view-reservation/{agence}', [AgenceController::class, 'show'])->name('agence.show');
    Route::delete('reservation/{agence}', [AgenceController::class, 'destroy'])->name('agence.destroy');

    // Contact //
    Route::get('liste-contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('view-contact/{contact}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');


    Route::group(['middleware' => ['role:superadmin|admin']], function() {

        // Utilisateurs //
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::get('users/{userId}/delete', [UserController::class, 'destroy'])->name('users.destroy');

    });

    Route::group(['middleware' => ['role:superadmin']], function() {
    
        // Roles //
        Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
        Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
        Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::put('roles/{role}', [RoleController::class, 'update'])->name('roles.update');
        Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy'])->name('roles.destroy');
        Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.addPermissionToRole');
        Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole'])->name('roles.givePermissionToRole');


        // Permissions //
        Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
        Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
        Route::post('permissions', [PermissionController::class, 'store'])->name('permissions.store');
        Route::get('permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
        Route::put('permissions/{permission}', [PermissionController::class, 'update'])->name('permissions.update');
        Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy'])->name('permissions.destroy');
    });

    

    // Profile //
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
