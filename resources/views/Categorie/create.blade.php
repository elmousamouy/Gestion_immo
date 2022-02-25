@extends('layouts.main')

@section('content')
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('CREE CATEGORIE') }}  
           
  </div>
  <div class="card-body">
    <div class="table-container">
    <form action="{{route('/Categorie/store')}}" method="POST" class="m-5">
      @csrf
    <div class="form-row">
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __(' Nom Categorie') }}</label>
        <input type="text" class="form-control" name="nom_cat" required>
        <span class="text-danger ">@error('nom_cat') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Description Categorie') }}</label>
        <input type="text" class="form-control"  name="descriprtion"  >
        <span class="text-danger ">@error('descriprtion') {{$message}} @enderror</span>
      </div>  
    </div>
    <center>
      <a href="{{route('categorie.index')}}"  class="btn btn-danger display: inline;" style="margin-left:8px"> Annuler</a>
      <button type="submit" class="btn btn-primary"> Enregistrer</button>
    </center>
      </form>
    </div>
  </div>
@endsection