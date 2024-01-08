
@extends('layouts.mylayout')



@section('content')

        <div class="col-md-9" style="margin-left: 20%"> 
            <h1>Liste des categories</h1>
            <table class="table table-striped" class="w-50">
                <thead>
                <tr>
                    <th scope="col">Libelle</th>
                    <th scope="col">Created-at</th>
                    <th scope="col">Updated-at</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($categorie as $mycategories)
                        <tr>
                            <th scope="row">{{$mycategories->libelle}} </th>
                            <td>{{$mycategories->created_at}}</td>
                            <td>{{$mycategories->updated_at}}</td>
                           
                            <td>
                                <a class="btn btn-primary " href="edit/{{ $mycategories->id}}"> Modifier</a>
                                <a class="btn btn-danger " href="supprimer/{{ $mycategories->id}}"> Supprimer</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

            </div>
      
   

@endsection
