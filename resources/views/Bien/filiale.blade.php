
@extends('layouts.main')
@section('content')
<div class="form-row "  style="margin:150px; ">
<div class="card" style="width: 10rem ; margin:20px !important"><a href="{{route('bien.filiale',['entreprise_id'=>1])}}"><img class="card-img-top"  height="150px" style="width: 10rem20px" src="{{ asset('img/LOGO-EV_FR.png') }}">
    <div class="card-body">
      <h5 class="card-title">EV Maroc</h5>
    </div></a>
  </div>
  <div class="card" style="width: 10rem ; margin:20px !important"><a href="{{route('bien.filiale',['entreprise_id'=>2])}}"><img class="card-img-top"  height="150px" style="width: 10rem20px" src="{{ asset('img/ameo.png') }}">
    <div class="card-body">
      <h5 class="card-title">AMEO</h5>
    </div></a>
  </div>
  <div class="card" style="width: 10rem ; margin:20px !important"><a href="{{route('bien.filiale',['entreprise_id'=>5])}}"><img class="card-img-top" height="150px" style="width: 10rem20px" src="{{ asset('img/LOGO-EV_FR.png') }}">
    <div class="card-body">
      <h5 class="card-title">GB</h5>
    </div></a>
  </div>

  <div class="card" style="width: 10rem ; margin:20px !important"><a href="{{route('bien.filiale',['entreprise_id'=>3])}}"><img class="card-img-top" height="150px" style="width: 10rem20px" src="{{ asset('img/bics.png') }}">
    <div class="card-body">
      <h5 class="card-title">BICS</h5>
    </div></a>
  </div>

  <div class="card" style="width: 10rem ; margin:20px !important"><a href="{{route('bien.filiale',['entreprise_id'=>4])}}"><img class="card-img-top"  height="150px" style="width: 10rem20px" src="{{ asset('img/LOGO-EV_FR.png') }}">
    <div class="card-body">
      <h5 class="card-title">CDP</h5>
    </div></a>
  </div>
  <div class="card" style="width: 10rem ; margin: 20px 0 20px 20px   !important"><a href="{{route('bien.filiale',['entreprise_id'=>6])}}"><img class="card-img-top"   height="150px" style="width: 10rem20px" src="{{ asset('img/LacqLogo.jpg') }}">
    <div class="card-body">
      <h5 class="card-title">LACQ</h5>
    </div></a>
  </div>
</div>
  @endsection