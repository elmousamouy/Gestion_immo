<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function index(){

        $entreprises = Entreprise::all();
        //dd($entreprises);
        return view('Entreprise.index',compact('entreprises')); 


    }
    
    public function create()
    {
        
        return view('Entreprise.create'); 
    }

    public function store(Request $request)
    {
        Entreprise::create([

            "nom_entreprises" => $request->nom_entreprises,
            "descriprtion"=> $request->descriprtion, 
        ]);
        return redirect()->route('entreprise.index')->with("success","Filiale  Ajouter");
    }

    public function edit($id)
    {
        $entreprises = Entreprise::find($id);
        return view('Entreprise.edit', compact('entreprises'));
    }

    public function update(Request $request, $id)
    {
        $entreprises = Entreprise::find($id);
        $entreprises->nom_entreprises = $request->nom_entreprises;
        $entreprises->descriprtion = $request->descriprtion;
        
        $entreprises->update();
        return redirect()->route('entreprise.index')->with("success","Filiale  Modifier");
    }   




    public function destroy($id)
    {
        $entreprises = Entreprise::find($id);
        $entreprises->destroy($id);
        return redirect()->route('entreprise.index')->with("success","Filiale Supprimer");
    }

}
