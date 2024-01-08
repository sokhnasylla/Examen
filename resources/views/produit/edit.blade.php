@extends('layouts.mylayout')

@section('content')

    <div class="container">
        @if(session('candSuccess'))
            <div class="alert alert-info mt-3">
                {{session('candSuccess')}}
            </div>
        @endif
        
        <div class="col-md-10" style="margin-left: 20%"> 
            <h1>Modification d'un produit</h1>
           <br>
                <form action="{{route('updateProd.produit', $produit->id)}}"  method="post" class="w-50"> 

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="code">Code : </label>
                        <input class="form-control" value="{{$produit->code}}" id="" name="code">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation : </label>
                        <input class="form-control" value="{{$produit->designation}}" id="" name="designation">
                    </div>
                    <div class="form-group">
                        <label for="prixunitaire">Prix Unitaire : </label>
                        <input class="form-control" value="{{$produit->prixunitaire}}" id="" name="prixunitaire">
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantite : </label>
                        <input class="form-control" value="{{$produit->quantite}}" id="" name="quantite">
                    </div>
                    <div class="form-group">
                        <label for="id_cat">Catégorie :</label>
                        <select name="id_cat" id="id_cat" class="form-control">
                            @foreach($mycategories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                   




                    <div class="form-group">
                        <br>
                        <button  type="submit" class="btn btn-success">Mettre à jour</button>
                    </div>
                </form>
            </div>
@endsection
