
@extends('layouts.mylayout')
@section('content')

<div class="col-md-9" style="margin-left: 20%"> 
            <h1>Liste des ventes</h1>
            <table class="table table-striped" class="w-50">
                <thead>
                <tr>
                    <th scope="col">Montant</th>
                    <th scope="col">Created-at</th>
                    <th scope="col">Updated-at</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($vente as $myventes)
                        <tr>
                            <th scope="row">{{$myventes->montant}} </th>
                            <td>{{$myventes->created_at}}</td>
                            <td>{{$myventes->updated_at}}</td>
                           
                            <td>
                                <a class="btn btn-primary " href="editVen/{{ $myventes->id}}"> Modifier</a>
                                <a class="btn btn-danger " href="supprimerVen/{{ $myventes->id}}"> Supprimer</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
    </div>

@endsection
