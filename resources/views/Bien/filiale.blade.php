
@extends('layouts.main')
@section('content')
<div class="container text-center">
<div class="form-row "  style="margin-top:100px;">
 @if (Auth::user()->entreprise_id == 1 ||Auth::user()->role_id == 1 )
  <div class="card" style="width: 10rem ; margin:10px !important"><a href="{{route('bien.filiale',['entreprise_id'=>1])}}"><img class="card-img-top"  height="150px" style="width: 10rem10px" src="{{ asset('img/LOGO-EV_FR.png') }}">
  <div class="card-body">
    <h5 class="card-title">EV Maroc</h5>
  </div></a>
</div>
@endif
@if (Auth::user()->entreprise_id == 2 ||Auth::user()->role_id == 1 )
  <div class="card" style="width: 10rem ; margin:10px !important"><a href="{{route('bien.filiale',['entreprise_id'=>2])}}"><img class="card-img-top"  height="150px" style="width: 10rem10px" src="{{ asset('img/ameo.png') }}">
    <div class="card-body">
      <h5 class="card-title">AMEO</h5>
    </div></a>
  </div>
  @endif
  @if (Auth::user()->entreprise_id == 5 ||Auth::user()->role_id == 1 )
  <div class="card" style="width: 10rem ; margin:10px !important"><a href="{{route('bien.filiale',['entreprise_id'=>5])}}"><img class="card-img-top" height="150px" style="width: 10rem10px" src="{{ asset('img/LOGO-EV_GB.png') }}">
    <div class="card-body">
      <h5 class="card-title">GREEN BIZ</h5>
    </div></a>
  </div>
  @endif

  @if (Auth::user()->entreprise_id == 4 ||Auth::user()->role_id == 1 )
  <div class="card" style="width: 10rem ; margin:10px !important"><a href="{{route('bien.filiale',['entreprise_id'=>4])}}"><img class="card-img-top" height="150px" style="width: 10rem10px" src="{{ asset('img/bics.png') }}">
    <div class="card-body">
      <h5 class="card-title">BICS</h5>
    </div></a>
  </div>
  @endif
  @if (Auth::user()->entreprise_id == 3 ||Auth::user()->role_id == 1 )
  <div class="card" style="width: 10rem ; margin:10px !important"><a href="{{route('bien.filiale',['entreprise_id'=>3])}}"><img class="card-img-top"  height="150px" style="width: 10rem10px" src="{{ asset('img/LOGO-EV_FR.png') }}">
    <div class="card-body">
      <h5 class="card-title">CDP</h5>
    </div></a>
  </div>
  @endif
  @if (Auth::user()->entreprise_id == 6 ||Auth::user()->role_id == 1 )
  <div class="card" style="width: 10rem ; margin: 10px 0 10px 10px   !important"><a href="{{route('bien.filiale',['entreprise_id'=>6])}}"><img class="card-img-top"   height="150px" style="width: 10rem10px" src="{{ asset('img/LacqLogo.jpg') }}">
    <div class="card-body">
      <h5 class="card-title">LACQ</h5>
    </div></a>
  </div>
  @endif
</div>
</div>
  @endsection