<?php

use App\Http\Controllers\Admin\AgenceAdminController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DecouverteAdminController;
use App\Http\Controllers\Admin\DevisTeamAdminController;
use App\Http\Controllers\Admin\VehiculeAdminController;
use App\Http\Controllers\Admin\CategorieVehiculeController;
use App\Http\Controllers\Admin\ParcVehiculeController;
use App\Http\Controllers\Front\AccueilController;
use App\Http\Controllers\Front\AgenceReservationController;
use App\Http\Controllers\Front\ContactFrontController;
use App\Http\Controllers\Front\DecouverteFrontController;
use App\Http\Controllers\Front\TeamBuildingController;
use App\Http\Controllers\Front\VehiculeReservationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ============================================================
// ROUTES FRONT (publiques)
// ============================================================

// Accueil & Pages statiques
Route::get('/', [AccueilController::class, 'accueil'])->name('accueil');
Route::get('/a-propos', [AccueilController::class, 'apropos'])->name('apropos');

// Location de véhicule
Route::get('/location-vehicule', [VehiculeReservationController::class, 'create'])->name('locationvehicule');
Route::get('/reservation-vehicule/{vehicule:slug}', [VehiculeReservationController::class, 'createReservation'])->name('reservation.vehicule');
Route::post('/reservation-vehicule', [VehiculeReservationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('reservationvehicules.store');

// Team Building
Route::get('/team-building', [TeamBuildingController::class, 'index'])->name('teambuilding');
Route::post('/teambuilding_store', [TeamBuildingController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('teambuilding.store');

// Découvertes
Route::get('/decouverte', [DecouverteFrontController::class, 'index'])->name('decouverte');
Route::get('/decouverte/{slug}', [DecouverteFrontController::class, 'show'])->name('decouverteshow');

// Agence
Route::get('/agence', [AgenceReservationController::class, 'create'])->name('agence');
Route::post('/agence_store', [AgenceReservationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('agence.store');

// Contact
Route::get('/contact', [ContactFrontController::class, 'create'])->name('contact');
Route::post('/contact_store', [ContactFrontController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('contact.store');




// ============================================================
// ROUTES DASHBOARD (authentifiées)
// ============================================================

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/dashboard')->middleware('auth')->group(function () {

    // --- Réservations véhicule ---
    Route::get('reservation-vehicule', [VehiculeAdminController::class, 'index'])->name('vehicule.index');
    Route::get('reservation-vehicule/{devisvehicule}', [VehiculeAdminController::class, 'show'])->name('vehicule.show');
    Route::patch('reservation-vehicule/{devisvehicule}/status', [VehiculeAdminController::class, 'updateStatus'])->name('vehicule.updateStatus');
    Route::delete('reservation-vehicule/{devisvehicule}', [VehiculeAdminController::class, 'destroy'])->name('vehicule.destroy');

    // --- Devis Team building ---
    Route::get('devisteam', [DevisTeamAdminController::class, 'index'])->name('devisteam.index');
    Route::get('devisteam/{devisteam}', [DevisTeamAdminController::class, 'show'])->name('devisteam.show');
    Route::delete('devisteam/{devisteam}', [DevisTeamAdminController::class, 'destroy'])->name('devisteam.destroy');
    Route::get('teambuilding', [DevisTeamAdminController::class, 'index_tb'])->name('teambuilding.liste');
    Route::get('teambuilding/create', [DevisTeamAdminController::class, 'create_tb'])->name('teambuilding.ajouter');
    Route::post('teambuilding', [DevisTeamAdminController::class, 'store_tb'])->name('team_building.store');

    // --- Découvertes ---
    Route::resource('decouverte', DecouverteAdminController::class);

    // --- Réservations agence ---
    Route::get('liste-reservation', [AgenceAdminController::class, 'index'])->name('agence.index');
    Route::get('view-reservation/{agence}', [AgenceAdminController::class, 'show'])->name('agence.show');
    Route::delete('reservation/{agence}', [AgenceAdminController::class, 'destroy'])->name('agence.destroy');

    // --- Contact ---
    Route::get('liste-contact', [ContactAdminController::class, 'index'])->name('contact.index');
    Route::get('view-contact/{contact}', [ContactAdminController::class, 'show'])->name('contact.show');
    Route::delete('contact/{contact}', [ContactAdminController::class, 'destroy'])->name('contact.destroy');

    // --- Parc Automobile (Véhicules et Catégories) ---
    Route::resource('categories_vehicules', CategorieVehiculeController::class);
    Route::resource('parc_vehicules', ParcVehiculeController::class);

    // --- Gestion des utilisateurs (admin + superadmin) ---
    Route::group(['middleware' => ['admin']], function() {

        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::get('users/{userId}/delete', [UserController::class, 'destroy'])->name('users.destroy');

    });

    // --- Rôles & Permissions (superadmin uniquement) ---
    Route::group(['middleware' => ['role:superadmin']], function() {

        // Roles
        Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
        Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
        Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::put('roles/{role}', [RoleController::class, 'update'])->name('roles.update');
        Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy'])->name('roles.destroy');
        Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.addPermissionToRole');
        Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole'])->name('roles.givePermissionToRole');

        // Permissions
        Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
        Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
        Route::post('permissions', [PermissionController::class, 'store'])->name('permissions.store');
        Route::get('permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
        Route::put('permissions/{permission}', [PermissionController::class, 'update'])->name('permissions.update');
        Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy'])->name('permissions.destroy');
    });


    // --- Profil ---
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::get('/test', function () {
        return view('test');
    })->name('test');
});

require __DIR__.'/auth.php';
