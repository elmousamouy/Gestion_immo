


@extends('layouts.main')

@section('content')
<div class="container">
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('Ajouter un Utilisateur') }}  
           
  </div>
  
  <div class="card-body ">
    <div class="table-container">
    <form action="{{route('/Users/store')}}" method="POST" class="m-5">
      @csrf
    <div class="form-row">
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Role') }}</label>
        <select class="form-control" id="nom_entreprises" name="role_id">
          <option selected>Choose...</option>
          @foreach ($roles as $role)
          <option value="{{ $role->id }}">{{ $role->role }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group input-group-sm col-md-5">
        <label for="name">{{ __('Entreprise') }}</label>
        <select class="form-control" id="nom_entreprises" name="entreprise_id">
          <option selected>Choose...</option>
          @foreach ($entreprises as $entreprise)
          <option value="{{ $entreprise->id }}">{{ $entreprise->nom_entreprises }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Nom') }}</label>
        <input type="text" class="form-control" name="name">
        <span class="text-danger ">@error('name') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Prenom') }}</label>
        <input type="text" class="form-control"  name="fname"  value="">
        <span class="text-danger ">@error('fname') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Email') }}</label>
        <input type="email" class="form-control"  name="email"  value="">
        <span class="text-danger ">@error('email') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Mot de Passe') }}</label>
        <input type="password" class="form-control"  name="password"  value="">
        <span class="text-danger ">@error('password') {{$message}} @enderror</span>
      </div> 
      <div class="form-group input-group-sm col-md-6">
        <label for="name">{{ __('Confirmer le Mot de Passe') }}</label>
        <input type="password" class="form-control"  name="password2"  value="">
        <span class="text-danger ">@error('password2') {{$message}} @enderror</span>
      </div>  

    </div>
    <center>
      <a href="{{route('user.index')}}"  class="btn btn-danger display: inline;" style="margin-left:8px"> Annuler</a>
      <button type="submit" class="btn btn-primary"> Enregistrer</button>
    </center>
      </form>
    </div>
  </div>
</div>
@endsection