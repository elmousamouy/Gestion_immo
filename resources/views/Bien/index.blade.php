@extends('Layouts.main')
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
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="card" style="background-color: rgb(255, 255, 255)">
  <div class="card-header">{{ __('La liste des Biens') }}
          <a class="btn btn-success btn-sm float-right" href="{{url('/Bien/create')}}">Ajouter un Bien</a>
          <a class="btn btn-primary btn-sm float-right px-2 mr-2" style="padding: 8px 0px; " href="{{url('/Biens/export')}}" ><i class="fa fa-download" aria-hidden="true"></i></a>
        
          <form action="{{url('/Biens/import')}}" method="POST" enctype="multipart/form-data" class="d-inline form-upload float-right">
            @csrf
            <div class="d-inline div-upload">
              <i class="fa fa-upload btn btn-success btn-sm px-2 mr-2" style="padding: 7px 0px; " aria-hidden="true"></i>
              <input type="file" class="input-upload" placeholder="factur" name="biens" >
            </div>
          </form>
          

          <input type="text" name="user_name" id="recherche" class="ml-3 d-inline  form-control form-control-sm col-1" >
          
           

          <select name="" id="categorie"  class="ml-3 d-inline  form-control form-control-sm col-2 searchSelect" >
            <option  value="" selected>PAR CATEGORIE...</option>
            @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->nom_cat }}</option>
            @endforeach
          </select>
          <select name="" id="entreprise" class="ml-3 d-inline  form-control form-control-sm col-2 searchSelect">
            <option value="" selected>PAR ENTREPRISE...</option>
            @foreach ($entreprises as $entreprise)
            <option value="{{ $entreprise->id }}">{{ $entreprise->nom_entreprises }}</option>
            @endforeach
          </select>
          <!--
          <select name="" id="vna" class="ml-3 d-inline  form-control form-control-sm col-2 ">
            <option  value="" selected>PAR VNA...</option>
            <option value="0">VNA</option>
            <option value="2">AUTRE</option>
          </select>
        -->
          
            <select class="ml-3 d-inline  form-control form-control-sm col-1 " id="affictation" name="">
              <option selected>PAR AFFICTAION...</option>
              <option  value="1">AFFICTER</option>
              <option value="0" >NON AFFICTER</option>
            </select>        
    </div>
  <div class="card-body">
    <div class="table-container">
      @include('Bien.table')
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.input-upload').on("change", function(){ 
      $('.form-upload').submit();
    });
    
 
    $(document).on('keyup','#recherche',function(){
      if(recherche!=''){

        $.ajax({

          url:'{{ url("/Bien/search") }}',
          method : 'post',
          data:{
            "_token" : "{{ csrf_token() }}",
            "recherche" : $(this).val(),
          },
          success:function(data){
            $('.table-container').html(data.table);
            console.log(data);
          }

        });

      }

    })
   
    $( ".searchSelect" ).change(function(){
      entreprise = $("#entreprise").val();
      categorie = $("#categorie").val();
      

      if(entreprise!='' || categorie!=''){

        $.ajax({

          url:'{{ url("/Bien/search/entreprise/") }}',
          method : 'post',
          data:{
            "_token" : "{{ csrf_token() }}",
            "entreprise" : entreprise,
            "categorie" : categorie,
          },
          success:function(data){
            $('.table-container').html(data.table);
            console.log(data);
          }

        });

      }

    })
    $("#vna" ).change(function(){
      vna = $("#vna").val();
    
      

      if(vna!=''){

        $.ajax({

          url:'{{ url("/Bien/search/vna") }}',
          method : 'post',
          data:{
            "_token" : "{{ csrf_token() }}",
            "vna" : vna,
            
          },
          success:function(data){
            $('.table-container').html(data.table);
            console.log(data);
          }

        });

      }

    })

  $("#affictation" ).change(function(){
    affictation = $("#affictation").val();
    
        if(affictation!=''){
        $.ajax({
        url:'{{ url("/Bien/search/affictation") }}',
        method : 'post',
        data:{
        "_token" : "{{ csrf_token() }}",
        "affictation" : affictation,
        },
        success:function(data){
        $('.table-container').html(data.table);
        console.log(data);
        }
         });
        }
    })



  });


</script>


@endsection