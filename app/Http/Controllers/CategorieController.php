<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;

class CategorieController extends Controller
{
    public function index(){

        $categorie = categorie::all();
           return view('categorie.liste',compact('categorie'));

    }
    
    public function store(Request $request){
        $categorie = new categorie();
        $categorie ->   libelle =$request ->libelle;
        $categorie->save();
        return redirect()->route('index');
       // return redirect()->back()->with('success','Categorie crée avec succes');
       

    }
    public function edit($id){

        $categorie = categorie::find($id);
    
        return view('categorie.edit',compact('categorie'));
    
    }
    
    public function update(Request $resquest){
    
        $categorie = categorie::find($resquest->id);
        $categorie->libelle = $resquest->libelle;
         $categorie->save();
        return redirect()->route('index');
    
    }
    public function supprimer($id){

    
        $categorie = categorie::find($id);
        $categorie->delete();
        return redirect()->route('index');
        
    }
}
