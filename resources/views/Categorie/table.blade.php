<div class="table-responsive">

    <table class="table table-striped table-sm ">
        <thead class="thead-light">
          <tr>
            <th  class=" text-nowrap pr-4">#</th>
            <th  class=" text-nowrap pr-4">Categorie</th>
            <th  class=" text-nowrap pr-4"> Description Categorie</th>
            <th  class="text-right text-nowrap pr-4">Action</th>
           </tr>
        </thead>
        <tbody id="class">
          @foreach ($categories as $categorie)
          <tr>
            <td>{{$categorie->id}}</td>
              <td>{{$categorie->nom_cat}}</td>
              <td>{{$categorie->descriprtion}}</td>
              
              <td class="text-right text-nowrap"><a href="{{route('categorie.edit',['id'=>$categorie->id])}}" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
              <a href="{{route('categorie.destroy',['id'=>$categorie->id])}}" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
            </tr>
            @endforeach
            
          
        </tbody>
      </table>
  </div>