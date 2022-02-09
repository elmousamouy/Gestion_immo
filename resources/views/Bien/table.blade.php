<div class="table-responsive">

  <table class="table table-striped table-sm ">
      <thead class="thead-light">
        <tr>
          <th  class="text-right text-nowrap pr-4">#</th>
          <th  class="text-right text-nowrap pr-4">Entreprise</th>
          <th  class="text-right text-nowrap pr-4">Categorie</th>
          <th  class="text-right text-nowrap pr-4">Dure ammortissement</th>
          <th  class="text-right text-nowrap pr-4">Date de mise en service</th>
          <th  class="text-right text-nowrap pr-4">Description de famille</th>
          <th  class="text-right text-nowrap pr-4">Prix</th>
          <th  class="text-right text-nowrap pr-4"> Date d'ammortissement</th>
          <th  class="text-right text-nowrap pr-4">File</th>
          <th  class="text-right text-nowrap pr-4">Referance</th>
          <th  class="text-right text-nowrap pr-4">Site</th>
          <th  class="text-right text-nowrap pr-4">Sous-site</th>
          <th  class="text-right text-nowrap pr-4">Quantitee</th>
          <th  class="text-right text-nowrap pr-4">Compte comptable</th>
          <th  class="text-right text-nowrap pr-4">Code comptable</th>
          <th  class="text-right text-nowrap pr-4">Emplacemnt</th>
          <th  class="text-right text-nowrap pr-4">N° facture</th>
          <th  class="text-right text-nowrap pr-4">Code barre</th>
          <th  class="text-right text-nowrap pr-4">N° bc</th>
          <th  class="text-right text-nowrap pr-4"> Designation</th>
          <th  class="text-right text-nowrap pr-4">Date d'achat</th>
          <th  class="text-right text-nowrap pr-4"> N° serie </th>
          <th  class="text-right text-nowrap pr-4">Fournisseur</th>
          <th  class="text-right text-nowrap pr-4">TAUX D'AMMORTISSEMENT</th>
          <th  class="text-right text-nowrap pr-4">AMMORTISSEMENT</th>
          <th  class="text-right text-nowrap pr-4"> CUMUL AMMORTISSEMENT</th>
          <th  class="text-right text-nowrap pr-4"> VNA</th>
          <th  class="text-right text-nowrap pr-4">Action</th>

        
        </tr>
      </thead>
      <tbody id="class">
        @foreach ($biens as $bien)
        <tr>
          <td>{{$bien->id}}</td>
            <td>{{$bien->nom_entreprises}}</td>
            <td>{{$bien->nom_cat}}</td>
            <td>{{($bien->duree_ammortissement)}}</td>
            <td>{{$bien->date_mise_enservice}}</td>
            <td>{{$bien->description_famille}}</td>
            <td>{{$bien->prix_achat}}</td>
            <td>{{date('Y-m-d',strtotime($bien->duree_ammortissement."year", strtotime($bien->date_mise_enservice)))}}</td>
            <td><a href="{{url($bien->factur)}}">PDF</a></td>
            <td>{{$bien->referance}}</td>
            <td>{{$bien->site}}</td>
            <td>{{($bien->sous_site)}}</td>
            <td>{{$bien->quantitee}}</td>
            <td>{{$bien->compte_comptable}}</td>
            <td>{{$bien->code_comptable}}</td>
            <td>{{$bien->emplacement}}</td>
            <td>{{$bien->n_factur}}</td>
            <td>{{($bien->code_barre)}}</td>
            <td>{{$bien->n_bc}}</td>
            <td>{{$bien->designation}}</td>
            <td>{{$bien->date_achat}}</td>
            <td>{{$bien->n_serie}}</td>
            <td>{{$bien->fournisseur}}</td>

            @if($bien->duree_ammortissement>0)
            <td>{{100/($bien->duree_ammortissement)}}</td> 
            @else <td>0</td>
            @endif

            @if($bien->duree_ammortissement>0)
            <td>{{((100/($bien->duree_ammortissement))*($bien->prix_achat))}}</td>
            @else <td>0</td>
            @endif

         

            @if($bien->duree_ammortissement>0)
            <td>{{((100/($bien->duree_ammortissement)*($bien->prix_achat))*($bien->duree_ammortissement))/100}}</td>
            @else <td>0</td> 
            @endif
            
            @if($bien->duree_ammortissement>0)
            <td>{{($bien->prix_achat)-((100/($bien->duree_ammortissement)*($bien->prix_achat))*($bien->duree_ammortissement))/100}}</td>
            @else <td>0</td> 
            @endif

            
            <td class="text-right text-nowrap"><a href="{{route('bien.edit',['id'=>$bien->id])}}" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
            <a href="{{route('bien.destroy',['id'=>$bien->id])}}" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
          </tr>
          @endforeach
          
        
      </tbody>
    </table>
</div>

  <div class="d-flex justify-content-center mt-2">
    {!! $biens->links('pagination::bootstrap-4') !!}
  </div>