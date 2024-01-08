<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VenteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
     return view('layouts.mylayout');
}); 
//categorie
Route::get('/listeCat', [CategorieController::class,'index'])->name('index');
Route::get('/createCat', function () {
    return view('categorie.create');
});
Route::post('createCat',[CategorieController::class,'store'])->name('store.categorie');
Route::get('edit/{id}', [CategorieController::class, 'edit'])->name('edit.categorie');
Route::put('update/{id}', [CategorieController::class, 'update'])->name('update.categorie');
Route::get('supprimer/{id}', [CategorieController::class, 'supprimer'])->name('supprimer.categorie');

//produit
Route::get('/listeProd', [ProduitController::class,'indexProd'])->name('indexProd');
Route::get('/createProd', [ProduitController::class,'addProd'])->name('indexProd');
Route::post('createProd',[ProduitController::class,'storeProd'])->name('storeProd.produit');
Route::get('editProd/{id}', [ProduitController::class,'editProd'])->name('editProd.produit');
Route::put('updateProd/{id}', [ProduitController::class,'updateProd'])->name('updateProd.produit');;
Route::get('supprimerProd/{id}', [ProduitController::class,'supprimerProd'])->name('supprimerProd.produit');

//vente
Route::get('/listeVen', [VenteController::class,'indexVen'])->name('indexVen');
Route::get('/createVen', function () {
    return view('vente.create');
});
Route::post('createVen',[VenteController::class,'storeVen'])->name('storeVen.vente');
Route::get('editVen/{id}', [VenteController::class,'editVen'])->name('editVen.vente');
Route::put('updateVen/{id}', [VenteController::class,'updateVen'])->name('updateVen.vente');;
Route::get('supprimerVen/{id}', [VenteController::class,'supprimerVen'])->name('supprimerVen.vente');
Route::get('sommeMontant', [VenteController::class,'SommeVente'])->name('SommeVente.vente');
Route::get('produitLePlusVendu', [VenteController::class,'produitLePlusVendu'])->name('produitLePlusVendu.vente');


