
@extends('layouts.main')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('Modifier Bien') }}          
  </div>
  <div class="card-body">
    <div class="table-container">
    <form action="{{route('bien.update',['id'=>$biens->id])}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-row">
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Categorie') }}</label>
          <select class="form-control" id="nom_entreprises" name="categorie_id">
            <option selected>Choose...</option>
            @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}" {{ ($categorie->id == $biens->categorie_id) ? "selected" : ""}}>{{ $categorie->nom_cat }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Entreprises') }}</label>
            <select class="form-control" id="entreprises" name="entreprise_id">
              <option selected>Choose...</option>
              @foreach ($entreprises as $entreprise)
              <option value="{{ $entreprise->id }}" {{ ($entreprise->id == $biens->entreprise_id) ? "selected" : ""}}>{{ $entreprise->nom_entreprises }}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Referance') }}</label>
          <input type="text" class="form-control" name="referance" value="{{ $biens->referance }}">
          <span class="text-danger ">@error('referance') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Duree') }}</label>
          <input type="text" class="form-control"  name="duree_ammortissement"  value="{{ $biens->duree_ammortissement }}">
          <span class="text-danger ">@error('site') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Site') }}</label>
          <input type="text" class="form-control" name="site"  value="{{ $biens->site }}">
          <span class="text-danger ">@error('site') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Sous Site') }}</label>
          <input type="text" class="form-control" name="sous_site"  value="{{ $biens->sous_site }}">
          <span class="text-danger ">@error('sous_site') {{$message}} @enderror</span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Emplacement') }}</label>
          <input type="text" class="form-control" name="emplacement"  value="{{ $biens->emplacement }}">
          <span class="text-danger ">@error('emplacement') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Code Barre') }}</label>
          <input type="text" class="form-control" name="code_barre"  value="{{ $biens->code_barre }}">
          <span class="text-danger ">@error('code_barre') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Designation') }}</label>
          <input type="text" class="form-control" name="designation"  value="{{ $biens->designation }}">
          <span class="text-danger ">@error('designation') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __("Date d'achat") }}</label>
          <input type="date" class="form-control" name="date_achat"  value="{{ $biens->date_achat }}">
          <span class="text-danger ">@error('date_achat') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Fournisseur') }}</label>
          <input type="text" class="form-control" name="fournisseur"  value="{{ $biens->fournisseur }}">
          <span class="text-danger ">@error('fournisseur') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('N° serie') }}</label>
          <input type="text" class="form-control" name="n_serie"  value="{{ $biens->n_serie }}">
          <span class="text-danger ">@error('n_serie') {{$message}} @enderror</span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('N° facture') }}</label>
          <input type="text" class="form-control"  name="n_factur"  value="{{ $biens->n_factur }}">
          <span class="text-danger ">@error('n_serie') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Prix acht') }}</label>
          <input type="text" class="form-control" name="prix_achat"  value="{{ $biens->prix_achat }}">
          <span class="text-danger ">@error('prix_acht') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Date mise enservice') }}</label>
          <input type="date" class="form-control" placeholder="date" name="date_mise_enservice"   value="{{ $biens->date_mise_enservice }}">
          <span class="text-danger ">@error('n_serie') {{$message}} @enderror</span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Quantitee') }}</label>
          <input type="text" class="form-control" placeholder="duree" name="quantitee"   value="{{ $biens->quantitee }}">
          <span class="text-danger ">@error('n_serie') {{$message}} @enderror</span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Factur') }}</label>
          <input type="file" class="form-control"  name="factur"  value="{{ $biens->date_mise_enservice }}">
          <span class="text-danger ">@error('factur') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Code comptable') }}</label>
          <input type="text" class="form-control"  name="code_comptable"   value="{{ $biens->code_comptable }}">
          <span class="text-danger ">@error('code_comptable') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Compte comptable') }}</label>
          <input type="text" class="form-control"  name="compte_comptable"  value="{{ $biens->compte_comptable }}">
          <span class="text-danger ">@error('code_comptable') {{$message}} @enderror</span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Sous fammille') }}</label>
          <input type="text" class="form-control" name="sous_famille"  value="{{ $biens->sous_famille }}">
          <span class="text-danger ">@error('sous_famille') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Description famille') }}</label>
          <input type="text" class="form-control" name="description_famille"  value="{{ $biens->description_famille }}">
          <span class="text-danger ">@error('description_famille') {{$message}} @enderror</span>
        </div>

        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('N° BC') }}</label>
          <input type="text" class="form-control"  name="n_bc" value="{{ $biens->n_bc }}">
          <span class="text-danger ">@error('n_bc') {{$message}} @enderror</span>
        </div>
        <div class="form-group input-group-sm col-md-2">
          <label for="name">{{ __('Affictation') }}</label>
          <select class="form-control" id="affictation" name="affictation">
            <option >Choose...</option>
            <option value="1" {{ (1 == $biens->affictation) ? "selected" : ""}}>AFFICTER</option>
            <option value="0" {{ (0 == $biens->affictation) ? "selected" : ""}}>NON AFFICTER </option>
          </select>
        </div>
      </div>
      <center>
        
       <a href="{{route('bien.index')}}"  class="btn btn-danger display: inline;"> Annuler</a>
       <button type="submit"  class="btn btn-primary  display: inline;">Enregestrer</button>
      </center>
        
    </form>
  </div>
</div>
@endsection