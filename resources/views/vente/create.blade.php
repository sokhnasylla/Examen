
@extends('layouts.mylayout')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{session('success')}}
            </div>
        @endif
       
        <div class="col-md-10" style="margin-left: 20%"> 
        
            <h1>Creation d'une vente</h1>

            <br>
                <form action="{{route('storeVen.vente')}} " method="post" class="w-50">
                    @csrf
                    <div class="form-group">
                        <label for="montant">Montant :</label>
                        <input type="text" name="montant" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date">Date :</label>
                        <input type="date" name="date" id="" class="form-control">
                    </div>

                   

                    <div class="form-group">
                       <br>
                        <button type="submit" class="btn btn-success">Terminer</button>
                        <button type="reset" class="btn btn-light">Annuler</button>
                    </div>
                </form>
            </div>
       
@endsection
