
@extends('layouts.main')
@section('content')
<div class="form-row "  style="margin-top:20%; margin:30px; ">

<div class="card" style="width: 18rem ; margin:0px !important">
    <img class="card-img-top"  style="width: 100px" src="{{ asset('img/LOGO-EV_FR.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">EV Maroc</h5>
      <p class="card-text"></p>
      <a href="{{route('bien.filiale',['entreprise_id'=>1])}}" class="btn btn-primary">Aller quelque part</a>
    </div>
  </div>
  <div class="card" style="width: 18rem; margin-left:10px;">
    <img class="card-img-top"  style="width: 100px" src="{{ asset('img/LOGO-EV_FR.png') }}" alt="Card image cap"> 
    <div class="card-body">
      <h5 class="card-title">AMEO</h5>
      <p class="card-text"></p>
      <a href="{{route('bien.filiale',['entreprise_id'=>2])}}" class="btn btn-primary">Aller quelque part</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;  margin-left:10px;">
    <img class="card-img-top"    style="width: 100px" src="{{ asset('img/LOGO-EV_FR.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> Bics</h5>
      <p class="card-text"></p>
      <a href="{{route('bien.filiale',['entreprise_id'=>3])}}" class="btn btn-primary">Aller quelque part</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;  margin-left:10px;">
    <img class="card-img-top"  style="width: 100px" src="{{ asset('img/LOGO-EV_FR.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">CDP</h5>
      <p class="card-text"></p>
      <a href="{{route('bien.filiale',['entreprise_id'=>4])}}" class="btn btn-primary">Aller quelque part</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;  margin-left:10px;">
    <img class="card-img-top"  style="width: 100px" src="{{ asset('img/LOGO-EV_FR.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">GB</h5>
      <p class="card-text"></p>
      <a href="{{route('bien.filiale',['entreprise_id'=>5])}}" class="btn btn-primary">Aller quelque part</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;  margin-left:10px;">
    <img class="card-img-top"   style="width: 100px" src="{{ asset('img/LOGO-EV_FR.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">LACQ</h5>
      <p class="card-text"></p>
      <a href="{{route('bien.filiale',['entreprise_id'=>6])}}" class="btn btn-primary">Aller quelque part</a>
    </div>
  </div>
</div>
</div>
</div>
  @endsection