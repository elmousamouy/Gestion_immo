<div class="table-responsive">

  <table class="table table-striped table-sm ">
      <thead class="thead-light">
        <tr>
          <th class="text-right text-nowrap" style="  font-weight: bold;">#</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Entreprise</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Categorie</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Dure ammortissement</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Date de mise en service</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Description de famille</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Prix</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> Date d'ammortissement</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Factur</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Referance</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Site</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Sous-site</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Quantitee</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Compte comptable</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Code comptable</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Emplacemnt</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">N° facture</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Code barre</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">N° bc</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> Designation</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Date d'achat</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> N° serie </th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Fournisseur</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">TAUX D'AMMORTISSEMENT</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">AMMORTISSEMENT</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> CUMUL AMMORTISSEMENT</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;"> VNA</th>
          <th class="text-right text-nowrap" style="  font-weight: bold;">Action</th>

        
        </tr>
      </thead>
      <tbody id="class">
        @foreach ($biens as $bien)
        <tr id="sid {{$bien->id}} ">
          <td class="text-right text-nowrap pr-4font-weight: bold;" > {{$bien->id}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->nom_entreprises}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->nom_cat}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{($bien->duree_ammortissement)}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->date_mise_enservice}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->description_famille}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->prix_achat}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{date('Y-m-d',strtotime($bien->duree_ammortissement."year", strtotime($bien->date_mise_enservice)))}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;"><a href="{{url($bien->factur)}}">PDF</a></td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->referance}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->site}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{($bien->sous_site)}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->quantitee}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->compte_comptable}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->code_comptable}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->emplacement}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->n_factur}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{($bien->code_barre)}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->n_bc}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->designation}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->date_achat}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->n_serie}}</td>
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{$bien->fournisseur}}</td>

            @if($bien->duree_ammortissement>0)
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{100/($bien->duree_ammortissement)}}</td> 
            @else <td class="text-right text-nowrap pr-4font-weight: bold;">0</td>
            @endif
            <!--Amortissement--->
            @if($bien->duree_ammortissement>0)
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{((100/($bien->duree_ammortissement))*($bien->prix_achat)/100)}}</td>
            @else <td class="text-right text-nowrap pr-4font-weight: bold;">0</td>
            @endif

         
            <!--Cumul Amortissement--->
            @if($bien->duree_ammortissement>0)
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{((100/($bien->duree_ammortissement)*($bien->prix_achat))*($bien->duree_ammortissement))/100}}</td>
            @else <td class="text-right text-nowrap pr-4font-weight: bold;">0</td> 
            @endif
            <!--VNA--->
            @if($bien->duree_ammortissement>0)
            <td class="text-right text-nowrap pr-4font-weight: bold;">{{($bien->prix_achat)-((100/($bien->duree_ammortissement)*($bien->prix_achat))*($bien->duree_ammortissement))/100}}</td>
            @else <td class="text-right text-nowrap pr-4font-weight: bold;">0</td> 
            @endif

            
            <td class="text-right text-nowrap pr-4font-weight: bold;" class="text-right text-nowrap"><a href="{{route('bien.edit',['id'=>$bien->id])}}" class="btn btn-primary  btn-sm btnAction"><i class="fa fa-edit"></i></a>
              <button class="deleteRecord btn btn-danger btn-sm " data-id="{{ $bien->id }}"  ><i class="fa fa-trash"></button></td>
          </tr>
          @endforeach
          
        
      </tbody>
    </table>
</div>
@if ($biens instanceof \Illuminate\Pagination\LengthAwarePaginator)
<div class="d-flex justify-content-center mt-2">
    {!! $biens->links('pagination::bootstrap-4') !!}
</div>
@endif

<script>

$(".deleteRecord").click(function(){
  var id = $(this).data("id");
  var token = $("meta[name='csrf-token']").attr("content");
  $.confirm({
    title: 'Confirmée !',
    content: 'Êtes-vous sûr de vouloir supprimer ce bien',
    buttons: {
        confirm: function () {
          $.ajax({
            url: '{{url("immo/")}}/'+id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function (){
                console.log("it Works");
            }
          });
          $.alert('Confirmée la Suppression!');
        },
        cancel: function () {
            $.alert('Anuller!');
        },

    }
});
});

/*

 $.confirm({
    title: 'Confirm!',
    content: 'Simple confirm!',
    buttons: {
        confirm: function () {
            $.alert('Confirmed!');
        },
        cancel: function () {
            $.alert('Canceled!');
        },
        somethingElse: {
            text: 'Something else',
            btnClass: 'btn-blue',
            keys: ['enter', 'shift'],
            action: function(){
                $.alert('Something else?');
            }
        }
    }
});
      

*/


</script>
