<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Admin\ServicesDevController;
use App\Http\Controllers\Admin\CatServiceController;

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

// ROUTE FOR FRONT-END

// route::get('/test', function(){
//     $cats = CatService::find(2);
//     return $cats->services;
// });

// ROUTE FOR FRONT-END
Route::get('/',[FrontEndController::class, 'index'])->name("index");
Route::get('/a-propos-de-nous',[FrontEndController::class, 'about'])->name("a-propos-de-nous");
Route::get('/pourqoui-nous-choisir',[FrontEndController::class, 'choix'])->name("pourqoui-nous-choisir");
Route::get('/notre-equipe',[FrontEndController::class, 'team'])->name("notre-equipe");
Route::get('/services/{slug}',[FrontEndController::class, 'services'])->name("services");
Route::get('/gestion-reseaux',[FrontEndController::class, 'gestion'])->name("gestion.reseaux");
Route::get('/formation-coatching',[FrontEndController::class, 'coatching'])->name("formation.coatching");


// ROUTE FOR FRONT-END VERSION MOBILE
Route::get('/conception-de-site-web/developpement-web-et-mobile',[FrontEndController::class, 'developpement'])->name('developpement-web-et-mobile');
Route::get('/conception-de-site-web/realisation-de-chatbot',[FrontEndController::class, 'chatbot'])->name('chatbot');
Route::get('/conception-de-site-web/referencement-naturel-et-payant',[FrontEndController::class, 'referencement'])->name('referencement');
Route::get('/evenementiel/realisation-de-film-institutionel',[FrontEndController::class, 'realisation'])->name('realisation');
Route::get('/gestion-des-reseaux-sociaux/couverture-media-evenement',[FrontEndController::class, 'couverture'])->name('couverture-media');
Route::get('/gestion-des-reseaux-sociaux/publicite-en-ligne',[FrontEndController::class, 'publicite'])->name('publicite');
Route::get('/gestion-des-reseaux-sociaux/recuperation-de-compte',[FrontEndController::class, 'recuperation'])->name('recuperation-compte');
Route::get('/elaboration-strategie-digitale',[FrontEndController::class, 'elaboration'])->name('elaboration-strategie');
Route::get('/creation-identite-visuelle',[FrontEndController::class, 'identite'])->name('identite-visuelle');
Route::get('/campagne-de-lancement-produit',[FrontEndController::class, 'campagne'])->name('lancement-produit');
Route::get('/contactez-nous',[FrontEndController::class, 'contact'])->name('contactez-nous');
Route::post('contactez-nous', [FrontEndController::class,'store'])->name('contact.store');


// ROUTE FOR ADMIN
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('services', ServicesDevController::class);
    Route::resource('cat-services', CatServiceController::class);
});


Route::get('/dashboard',[ServicesDevController::class, 'index'] )->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
