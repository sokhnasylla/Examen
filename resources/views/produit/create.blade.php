
@extends('layouts.mylayout')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{session('success')}}
            </div>
        @endif
        <div class="col-md-10" style="margin-left: 20%">  
            <h1>Creation d'un produit</h1>

            <br>
                <form action="{{route('storeProd.produit')}} " method="post" class="w-50">
                    @csrf
                    <div class="form-group">
                        <label for="code">Code :</label>
                        <input type="text" name="code" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation :</label>
                        <input type="text" name="designation" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="prixunitaire">Prix Unitaire :</label>
                        <input type="text" name="prixunitaire" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantite :</label>
                        <input type="text" name="quantite" id="" class="form-control">
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
                        <button type="submit" class="btn btn-success">Terminer</button>
                        <button type="reset" class="btn btn-light">Annuler</button>
                    </div>
                </form>
            </div>
        


</div>
@endsection
