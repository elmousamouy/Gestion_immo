<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

    public function index()
    {
        $roles  = Role::get();
        $users = User::Join('roles', 'roles.id', '=', 'users.role_id')
            ->select('users.*', 'role')
            ->paginate(20);
        return view('user.index', compact('users', 'roles'));
    }
    public function create()
    {
        $roles= Role::get();
        return view('user.create', compact('roles')); 
    }

    public function store(Request $request)
    {
        User::create([

            "role_id" => $request->role_id,
            "name" => $request->name,
            "fname" => $request->fname,
            "email" => $request->email,
            "password" =>  Hash::make($request->password),
              
        ]);
        return redirect()->route('user.index')->with("success","utilisateur bien ajouter");
       
    }   
    public function edit($id)
    {
        $users = User::find($id);
        $roles  = Role::get();
        return view('user.edit', compact('users','roles'));
    }

    public function update(Request $request, $id)
    {
        if($request->input("password")!=$request->input("password1")){

            return redirect()->back()->with("error","password not conform");
        }
        $users = User::find($id);
        $users->role_id = $request->role_id;
        $users->name = $request->name;
        $users->fname = $request->fname;
        $users->email = $request->email;

        if(!empty($request->input("password"))){

            $users->password =  Hash::make($request->password);

        }
        
        $users->update();
        return redirect()->route('user.index')->with("success","utilisateur bien Modifier");
    }   

    public function destroy($id)
    {
        $users = User::find($id);
        $users->destroy($id);
        return redirect()->route('user.index')->with("success","utilisateur bien Supprimer");
    }
 

}
