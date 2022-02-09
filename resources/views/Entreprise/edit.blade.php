

@extends('Layouts.main')

@section('content')
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('Modifier Entreprise') }}  
           
  </div>
  <div class="card-body">
    <div class="table-container">
        <form action="{{route('entreprise.update',['id'=>$entreprises->id])}}"  class=" " method="POST">
      @csrf
    <div class="form-row">
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Entreprise') }}</label>
        <input type="text" class="form-control" name="nom_entreprises" value="{{$entreprises->nom_entreprises}}">
        <span class="text-danger ">@error('nom_entreprises') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Description entreprise') }}</label>
        <input type="text" class="form-control"  name="descriprtion" value="{{$entreprises->descriprtion}}">
        <span class="text-danger ">@error('') {{$message}} @enderror</span>
      </div>  
    </div>
    <center><button type="submit" class="btn btn-primary">Enregestrer</button></center>
      </form>
    </div>
  </div>
@endsection