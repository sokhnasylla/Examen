<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;
use App\Models\categorie;
class ProduitController extends Controller
{
    public function indexProd(){

    $produit = produit::all();
    return view('produit.liste',compact('produit'));

}
public function addProd()
{
  
    $mycategories = categorie::all();
    return view('produit.create', compact('mycategories'));
}

public function storeProd(Request $request){
    //dd($request);
    $produit = new produit();
    $produit ->code =$request ->code;
    $produit ->designation =$request ->designation;
    $produit ->prixunitaire =$request ->prixunitaire;
    $produit ->quantite =$request ->quantite;
    $produit ->id_cat=$request ->id_cat;
    $produit->save();

    return redirect()->back()->with('success','Produit ajouté');

}

public function editProd($id){

    $produit = produit::find($id);
    $mycategories = categorie::all();

    return view('produit.edit',compact('produit','mycategories'));

}

public function updateProd(Request $request){

    $produit = produit::find($request->id);
    if(!$produit) {
        
        return redirect()->back()->with('error', 'Produit non trouvé.');
    }

    $produit->code = $request->code;
    $produit ->designation =$request ->designation;
    $produit ->prixunitaire =$request ->prixunitaire;
    $produit ->quantite =$request ->quantite;
    $produit ->id_cat=$request ->id_cat;
    $produit->save();
   
    return redirect()->route('indexProd')->with('success', 'Produit modifié');
 

}
public function supprimerProd($id){

    $produit = produit::find($id);
    $produit->delete();
    return redirect()->route('indexProd');
    
}

}
