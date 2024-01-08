@extends('layouts.mylayout')

@section('content')

    <div class="container">
        @if(session('candSuccess'))
            <div class="alert alert-info mt-3">
                {{session('candSuccess')}}
            </div>
        @endif
     
        <div class="col-md-10" style="margin-left: 20%"> 
            <h1>Modification d'une vente</h1>
            <br>
                <form action="{{route('updateVen.vente', $vente->id)}}"  method="post" class="w-50"> 

                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="montant">Montant : </label>
                        <input class="form-control" value="{{$vente->montant}}" id="" name="montant">
                    </div>
                    <div class="form-group">
                        <label for="date">Date : </label>
                        <input class="form-control" value="{{$vente->date}}" id="" name="date">
                    </div>
                    <div class="form-group">
                        <br>
                        <button  type="submit" class="btn btn-success">Mettre à jour</button>
                    </div>
                </form>
           </div>
@endsection
