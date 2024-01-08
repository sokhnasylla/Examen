
@extends('layouts.mylayout')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{session('success')}}
            </div>
        @endif
        
    <div class="col-md-10" style="margin-left: 20%"> 
        
            <h1>Creation d'une categorie</h1>

         <br>
                <form action="{{route('store.categorie')}} " method="post" class="w-50">
                    @csrf
                    <div class="form-group">
                        <label for="libelle">Libelle :</label>
                        <input type="text" name="libelle" id="" class="form-control">
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
