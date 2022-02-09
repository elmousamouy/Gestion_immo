<?php

namespace App\Http\Controllers;
use App\Models\Categorie;

use Illuminate\Http\Request;

class CategorieController extends Controller 
{
    public function index(){

        $categories = Categorie::all();
        
        return view('Categorie.index',compact('categories')); 


    }

    
    public function create()
    {
        
        return view('Categorie.create'); 
    }

    public function store(Request $request)
    {  
        
    $this->validate($request, [
     'nom_cat' => 'required',
     ]);
        Categorie::create([
        

            "nom_cat" => $request->nom_cat, 
            "descriprtion"=> $request->descriprtion, 
        ]);
        return redirect()->route('categorie.index')->with("success","Categorie bien ajouter");
    }

    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('Categorie.edit', compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $entreprises = Categorie::find($id);
        $entreprises->nom_cat = $request->nom_cat;
        $entreprises->descriprtion = $request->descriprtion; 
        $entreprises->update();
        return redirect()->route('categorie.index')->with("success","Categorie Modifier");
    }   




    public function destroy($id)
    {
        $entreprises = Categorie::find($id);
        $entreprises->destroy($id);
        return redirect()->route('Categorie.index')->with("success","Categorie Supprimer");

    }
    
}
