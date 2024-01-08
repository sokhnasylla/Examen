
@extends('layouts.mylayout')



@section('content')
<div class="col-md-9" style="margin-left: 20%"> 
            <h1>Liste des Produits</h1>
            <table class="table table-striped" class="w-50">
                <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Prix Unitaire</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Created-at</th>
                    <th scope="col">Updated-at</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($produit as $myproduits)
                        <tr>
                            <th scope="row">{{$myproduits->code}} </th>
                            <th scope="row">{{$myproduits->designation}} </th>
                            <th scope="row">{{$myproduits->prixunitaire}} </th>
                            <th scope="row">{{$myproduits->quantite}} </th>
                            <td>{{$myproduits->created_at}}</td>
                            <td>{{$myproduits->updated_at}}</td>
                           
                            <td>
                                <a class="btn btn-primary " href="editProd/{{ $myproduits->id}}"> Modifier</a>
                                <a class="btn btn-danger " href="supprimerProd/{{ $myproduits->id}}"> Supprimer</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

            </div>
        

@endsection
