


<div class="table-responsive">

    <table class="table table-striped table-sm ">
        <thead class="thead-light">
          <tr>
            <th  class=" text-nowrap pr-4">#</th>
            <th  class=" text-nowrap pr-4">Entreprise</th>
            <th  class=" text-nowrap pr-4"> Description Entreprise</th>
           <th  class="text-right text-nowrap pr-4">Action</th>
           </tr>
        </thead>
        <tbody id="class">
          @foreach ($entreprises as $entreprise)
          <tr>
            <td>{{$entreprise->id}}</td>
              <td>{{$entreprise->nom_entreprises}}</td>
              <td>{{$entreprise->descriprtion}}</td>
              
              <td class="text-right text-nowrap"><a href="{{route('entreprise.edit',['id'=>$entreprise->id])}}" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
              <a href="{{route('entreprise.destroy',['id'=>$entreprise->id])}}" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
            </tr>
            @endforeach
            
          
        </tbody>
      </table>
  </div>