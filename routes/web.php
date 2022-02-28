<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Bien\BienController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => false, 'password.request' => false, 'reset' => false]);

  Route::group(['middleware' => ['auth']], function() {

    Route::group(['middleware' => ['is_admin']], function() {

      Route::get('/Users', [UserController::class, 'index'])->name('user.index');
      Route::get('/Users/create', [UserController::class ,'create'])->name('/Users/create');
      Route::post('/Users/store', [UserController::class ,'store'])->name('/Users/store');
      Route::post('/Users/update/{id}', [UserController::class ,'update'])->name('user.update');
      Route::get('/Users/delete/{id}', [UserController::class ,'destroy'])->name('user.destroy');
      Route::get('/Users/edit/{id}', [UserController::class ,'edit'])->name('user.edit');

    });

    
    

    Route::namespace('Bien')->group(function(){
      Route::group(['middleware' => ['verifie']], function() {
        Route::get('/Bien/filiale/{entreprise_id}', [BienController::class ,'showfiliale'])->name('bien.filiale');
      });
        Route::get('/', [BienController::class ,'filiales'])->name('show.filiale');
        Route::post('/Bien/search/', [BienController::class, 'recherche']);
       // Route::post('/Bien/search/vna', [BienController::class, 'recherchevna']);
        //Route::post('/Bien/search/affictation', [BienController::class, 'rechercheaffictation']);
        //Route::post('/Bien/search/categorie/', [BienController::class, 'rechercheparcategorie']);
        //Route::post('/Bien/search/entreprise', [BienController::class, 'rechercheparentreprise']);
        Route::get('Bien/create', [BienController::class ,'create'])->name('bien.create');
        Route::post('/Bien/store', [BienController::class ,'store'])->name('bien.store');
        Route::get('/Biens', [BienController::class ,'index'])->name('bien.index');
        Route::get('/Biens/edit/{id}', [BienController::class ,'edit'])->name('bien.edit');
        Route::post('/Biens/update/{id}', [BienController::class ,'update'])->name('bien.update');
     
        Route::delete('immo/{id}', [BienController::class ,'destroy']);
        
        Route::get('/Biens/export', [BienController::class, 'export']);
        Route::post('/Biens/import', [BienController::class, 'fileImport']);
      

    });
  ///////////
    Route::get('/Entreprise/create', [EntrepriseController::class ,'create'])->name('/Entreprise/create');
    Route::post('/Entreprise/store', [EntrepriseController::class, 'store'])->name('/Entreprise/store');
    Route::get('/Entreprise', [EntrepriseController::class, 'index'])->name('entreprise.index');
    Route::post('/Entreprise/update/{id}', [EntrepriseController::class ,'update'])->name('entreprise.update');
    Route::get('/Entreprise/delete/{id}', [EntrepriseController::class ,'destroy'])->name('entreprise.destroy');
    Route::get('/Entreprise/edit/{id}', [EntrepriseController::class ,'edit'])->name('entreprise.edit');

    ///////////////////////////

    Route::get('/Categorie/create', [CategorieController::class ,'create'])->name('/Categorie/create');
    Route::post('/Categorie/store', [CategorieController::class, 'store'])->name('/Categorie/store');
    Route::get('/Categorie', [CategorieController::class, 'index'])->name('categorie.index');
    Route::post('/Categorie/update/{id}', [CategorieController::class ,'update'])->name('categorie.update');
    Route::get('/Categorie/delete/{id}', [CategorieController::class ,'destroy'])->name('categorie.destroy');
    Route::get('/Categorie/edit/{id}', [CategorieController::class ,'edit'])->name('categorie.edit');

 });  


   