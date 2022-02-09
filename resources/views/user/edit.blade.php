

@extends('Layouts.main')

@section('content')
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="container">
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('Modifier un Utilisateur') }}  
           
  </div>
  
  <div class="card-body ">
    <div class="table-container">
    <form action="{{route('user.update',['id'=>$users->id])}}" method="POST" class="m-5">
      @csrf
    <div class="form-row">
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Role') }}</label>
        <select class="form-control" id="role" name="role_id">
          <option selected>Choose...</option>
          @foreach ($roles as $role)
          <option value="{{ $role->id }}" {{ ($role->id == $users->role_id) ? "selected" : ""}}>{{ $role->role }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Nom') }}</label>
        <input type="text" class="form-control" name="name" value="{{$users->name}}">
        <span class="text-danger ">@error('name') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Prenom') }}</label>
        <input type="text" class="form-control"  name="fname"  value="{{$users->fname}}">
        <span class="text-danger ">@error('fname') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Email') }}</label>
        <input type="email" class="form-control"  name="email" value="{{$users->email}}">
        <span class="text-danger ">@error('email') {{$message}} @enderror</span>
      </div>
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Mot de Passe') }}</label>
        <input type="password" class="form-control"  name="password"  >
        <span class="text-danger ">@error('password') {{$message}} @enderror</span>
      </div> 
      <div class="form-group input-group-sm col-md-4">
        <label for="name">{{ __('Mot de Passe') }}</label>
        <input type="password" class="form-control"  name="password1">
        <span class="text-danger ">@error('password1') {{$message}} @enderror</span>
      </div> 
     

    </div>
    <center><button type="submit" class="btn btn-primary">Enregestrer</button></center>
      </form>
    </div>
  </div>
</div>
@endsection