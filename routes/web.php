<?php

use App\Http\Controllers\acceueilarrondissementController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\delitlisteController;
use App\Http\Controllers\DelitsController;
use App\Http\Controllers\InterventionsController;
use App\Http\Controllers\perdreController;
use App\Http\Controllers\PertesController;
use App\Http\Controllers\UrgenceController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'login'])->name('home');
Route::get('/dashboardarrondissement', [App\Http\Controllers\arrondissementcontroller::class, 'dashboardarrondissement'])->name('arrondissement.dashboard');
Route::get('/dashboardarrondissement/pertearrondissement', [App\Http\Controllers\pertearrondissementController::class, 'pertearrondissement'])->name('arrondissement.perte');
Route::get('/dashboardarrondissement/arrondissementintervention', [App\Http\Controllers\intervearrondissementController::class, 'arrondissementintervention'])->name('arrondissement.intervention');
Route::get('/arrondissement-register', [App\Http\Controllers\arrondissementcontroller::class, 'affichageformulaire'])->name('arrondissement');
Route::post('/arrondissement-create', [App\Http\Controllers\arrondissementcontroller::class, 'creerarrondissement'])->name('arrondissement.create');


Route::get('/dashboardcivil', [App\Http\Controllers\civilcontroller::class, 'dashboardcivil'])->name('civil.dashboard');
Route::get('/civil-register', [App\Http\Controllers\civilcontroller::class, 'affichageformulaire'])->name('civil');
Route::post('/civil-create', [App\Http\Controllers\civilcontroller::class, 'creercivil'])->name('civil.create');



Route::get('/dashboardpolice', [App\Http\Controllers\policecontroller::class, 'dashboardpolice'])->name('police.dashboard');
Route::get('/dashboardpolice/pertepolice', [App\Http\Controllers\pertepoliceController::class, 'pertecelipo'])->name('police.perte');
Route::get('/dashboardpolice/policeintervention', [App\Http\Controllers\intervepoliceController::class, 'policeintervention'])->name('police.intervention');
Route::get('/police-register', [App\Http\Controllers\policecontroller::class, 'affichageformulaire'])->name('police');
Route::post('/police-create', [App\Http\Controllers\policecontroller::class, 'creerpolice'])->name('police.create');



Route::get('/formulairedelit', [App\Http\Controllers\delitcontroller::class, 'formulairedelit'])->name('delit.dashboard');
Route::get('/delit-register', [App\Http\Controllers\delitcontroller::class, 'formulairedelit'])->name('delit');
Route::post('/delit-create', [App\Http\Controllers\delitcontroller::class, 'creerdelit'])->name('delit.create');

Route::get('/formulaireintervention', [App\Http\Controllers\interventioncontroller::class, 'formulaireintervention'])->name('intervention.dashboard');
Route::get('/intervention-register', [App\Http\Controllers\interventioncontroller::class, 'formulaireintervention'])->name('intervention');
Route::post('/intervention-create', [App\Http\Controllers\interventioncontroller::class, 'creerintervention'])->name('intervention.create');
Route::resource('/Urgence', UrgenceController::class);
Route::resource('/Pertes', PertesController::class);
Route::resource('Interventions', InterventionsController::class);
Route::resource('/Delits', DelitsController::class);
Route::resource('/Accueil', AccueilController::class);


Route::get('/formulaireperdre', [App\Http\Controllers\delitcontroller::class, 'formulaireperdre'])->name('perte.dashboard');
Route::get('/perte-register', [App\Http\Controllers\pertecontroller::class, 'formulaireperdre'])->name('perte');
Route::post('/perte-create', [App\Http\Controllers\pertecontroller::class, 'creerperte'])->name('perte.create');
Route::resource('/perdre', perdreController::class);
Route::get('/Listedelit', [delitlisteController::class, 'index'])->name('liste.delit');
Route::get('/arrondissementdelit', [App\Http\Controllers\delitlistearrondissementController::class, 'index'])->name('list.deli');