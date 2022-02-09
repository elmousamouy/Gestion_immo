


<div class="table-responsive">

    <table class="table table-striped table-sm ">
        <thead class="thead-light">
          <tr>
            <th  class=" text-nowrap pr-4">#</th>
            <th  class=" text-nowrap pr-4">NOM</th>
            <th  class=" text-nowrap pr-4">PRENOM</th>
            <th  class=" text-nowrap pr-4">EMAIL</th>
            <th  class=" text-nowrap pr-4">ROLE</th>
            <th  class="text-right text-nowrap pr-4">Action</th>
           </tr>
        </thead>
        <tbody id="class">
          @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->fname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
              <td class="text-right text-nowrap"><a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-primary btn-sm btnAction"><i class="fa fa-edit"></i></a>
              <a href="{{route('user.destroy',['id'=>$user->id])}}" class="btn btn-danger btn-sm btnAction"> <i class="fa fa-trash" aria-hidden="true"></a></td>
            </tr>
            @endforeach
            
          
        </tbody>
      </table>
  </div>