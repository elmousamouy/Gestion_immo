

@extends('layouts.main')

<style>
    th {
        font-size: 11px;
    }
    td {
        font-size: 13px;
    }
    .btnAction {
        font-size: 8px;
    }
    .div-upload {
      position: relative;
      overflow: hidden;
    }
    .input-upload {
      position: absolute;
      font-size: 10px;
      opacity: 0;
      right: 0;
      top: 0;
    }
  </style>




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
  <div class="card-header">{{ __('La liste des Utilisateurs') }}

     <a class="btn btn-success btn-sm float-right" href="{{url('/Users/create')}}">Ajouter un nouveau Utilisateur</a>
         
    </div>
  <div class="card-body">
    <div class="table-container">
      @include('user.table')
    </div>
  </div>
</div>
@endsection