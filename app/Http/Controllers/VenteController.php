<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vente;
use App\Models\produit;
use Illuminate\Support\Facades\DB;

class VenteController extends Controller
{
    public function indexVen(){

        $vente = vente::all();
           return view('vente.liste',compact('vente'));
    
    }
    public function storeVen(Request $request){
        $vente = new vente();
        $vente ->   montant =$request ->montant;
        $vente ->   date =$request ->date;
        $vente->save();
    
        return redirect()->route('indexVen');
    
    }
    public function editVen($id){
    
        $vente = vente::find($id);
    
        return view('vente.edit',compact('vente'));
    
    }
    
    public function updateVen(Request $request){
    
        $vente = vente::find($request->id);
        $vente->montant = $request->montant;
        $vente ->date =$request ->date;
        $vente->save();
    
        return redirect()->route('indexVen');
    
    }
    public function supprimerVen($id){
    
    
        $vente = vente::find($id);
        $vente->delete();
        return redirect()->route('indexVen');
        
    }
    public function SommeVente(){

        $sumMontant = vente::sum('montant');
        return view('sommeVente', ['sumMontant' => $sumMontant]);
    }
    
    public function produitLePlusVendu()
     {
    $produit = new Produit();
    $produitLePlusVendu = $produit->select('produits.*', DB::raw('SUM(ligne_ventes.quantite) as total_quantite'))
        ->leftJoin('ligne_ventes', 'produits.id', '=', 'ligne_ventes.id_prod')
        ->groupBy('produits.id', 'produits.code', 'produits.designation', 'produits.prixunitaire', 'produits.quantite','produits.created_at','produits.updated_at', 'produits.id_cat')
        ->orderByDesc('total_quantite')
        ->first();
    
    return view('produit.produitLePlusVendu', compact('produitLePlusVendu'));
}
}
