@extends('layouts.main')

@section('content')
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('Modifier Categories') }}  
           
  </div>
  <div class="card-body">
    <div class="table-container">
    <form action="{{route('categorie.update',['id'=>$categorie->id])}}" method="POST" class="m-5">
      @csrf
    <div class="form-row">
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Nom Categorie') }}</label>
        <input type="text" class="form-control" name="nom_cat" value="{{$categorie->nom_cat}}">
        <span class="text-danger ">@error('nom_cat') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Description Categorie') }}</label>
        <input type="text" class="form-control"  name="descriprtion" value="{{$categorie->descriprtion}}">
        <span class="text-danger ">@error('') {{$message}} @enderror</span>
      </div>  
    </div>
    <center><button type="submit" class="btn btn-primary"> Enregistrer</button></center>
      </form>
    </div>
  </div>
@endsection