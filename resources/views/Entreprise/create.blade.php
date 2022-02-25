@extends('layouts.main')

@section('content')
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('CREE Filiale') }}  
           
  </div>
  <div class="card-body">
    <div class="table-container">
    <form action="{{route('/Entreprise/store')}}" method="POST" class="m-5">
      @csrf
    <div class="form-row">
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Entreprise') }}</label>
        <input type="text" class="form-control" name="nom_entreprises">
        <span class="text-danger ">@error('nom_entreprises') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Description entreprise') }}</label>
        <input type="text" class="form-control"  name="descriprtion"  >
        <span class="text-danger ">@error('') {{$message}} @enderror</span>
      </div>  
    </div>
    <center>
      <a href="{{route('entreprise.index')}}"  class="btn btn-danger display: inline;" style="margin-left:8px"> Annuler</a>
      <button type="submit" class="btn btn-primary"> Enregistrer</button>
    </center>
      </form>
    </div>
  </div>
@endsection