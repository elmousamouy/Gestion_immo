<?php

namespace App\Http\Controllers\Bien;
use App\Exports\BienExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Bien;
use App\Models\Entreprise;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Imports\BienImport;
use Illuminate\Support\Facades\DB;


class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $entreprises  = Entreprise::get();
        $categories  = Categorie::get();
        $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
            ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
            ->select('biens.*', 'nom_entreprises', 'nom_cat')
            ->paginate(20);
        return view('Bien.index', compact('biens', 'entreprises','categories'));
    }
    public function filiales()
    {
        return view('Bien.filiale');
    } 

    public function showfiliale($entreprise_id)
          

    {
        $entreprises  = Entreprise::get();
        $categories  = Categorie::get();
        $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
            ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
            ->select('biens.*', 'nom_entreprises', 'nom_cat')
            ->where('entreprise_id', '=',$entreprise_id)
            ->paginate(20);
        return view('Bien.index', compact('biens', 'entreprises','categories'));
        
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::get();
        $categories = Categorie::get();
        return view('Bien.create', compact('entreprises', 'categories')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'duree_ammortissement' => 'required|integer',
            'date_mise_enservice' => 'required',
            'sous_famille' => 'required',
            'fournisseur' => 'required',
            'description_famille' => 'required',
            'prix_achat' => 'required' ,
            'referance' => 'required',
            'site' => 'required', 
            'sous_site' => 'required',
            'quantitee' => 'required|integer',
            'compte_comptable' => 'required',
            'emplacement' => 'required',
            'affictation' => 'required',
            'designation' => 'required',
            'code_comptable' => 'required',
            'date_achat' => 'required',
            'n_factur' => 'required',
            'entreprise_id' => 'required',
            'categorie_id' => 'required',
            'n_serie' => 'required',
            'n_bc' => 'required',
            'code_barre' => 'required',
        ]);

        if ($request->hasFile('factur')) {
            $file = $request->factur;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('storage/image/', $new_file);
        }

        $result = Bien::create([
            "entreprise_id" => $request->entreprise_id,
            "categorie_id" => $request->categorie_id,
            "duree_ammortissement" => $request->duree_ammortissement,
            "date_mise_enservice" => $request->date_mise_enservice,
            "sous_famille" => $request->sous_famille,
            "description_famille" => $request->description_famille,
            "prix_achat" => $request->prix_achat,
            "referance"=> $request->referance,
            "site"=> $request->site,
            "sous_site"=> $request->sous_site,
            "quantitee"=> $request->quantitee,
            "compte_comptable"=> $request->compte_comptable,
            "emplacement"=> $request->emplacement,
            "n_factur"=> $request->n_factur,
            "code_comptable"=> $request->code_comptable,
            "code_barre"=> $request->code_barre,
            "n_bc"=> $request->n_bc,
            "designation"=> $request->designation,
            "date_achat"=> $request->date_achat,
            "affictation"=> $request->affictation,
            "n_serie"=> $request->n_serie,
            "fournisseur"=> $request->fournisseur,
            "factur" => '/storage/image/' . $new_file,
        ]);
        if($result){
            return redirect()->route('bien.index')->with("success","Bien bien ajouter");  
        }else{
            return redirect()->route('bien.create')->with("error","Bien bien ajouter");
        }
    
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biens = Bien::find($id);
        $entreprises = Entreprise::all();
        $categories = Categorie::all();

        return view('Bien.edit', compact('biens', 'entreprises', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $biens = Bien::find($id);

        if ($request->hasFile('factur')) {
            $file = $request->factur;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('storage/image/', $new_file);
            $biens->factur = '/storage/image/' . $new_file;
        }

        $biens->referance = $request->referance;
        $biens->affictation = $request->affictation;
        $biens->referance = $request->referance;
        $biens->site = $request->site;
        $biens->emplacement = $request->emplacement;
        $biens->code_barre = $request->code_barre;
        $biens->designation = $request->designation;
        $biens->date_achat = $request->date_achat;
        $biens->fournisseur = $request->fournisseur;
        $biens->n_serie = $request->n_serie;
        $biens->n_factur = $request->n_factur;
        $biens->quantitee = $request->quantitee;
        $biens->code_comptable = $request->code_comptable;
        $biens->compte_comptable = $request->compte_comptable;
        $biens->n_bc = $request->n_bc;
        $biens->sous_famille = $request->sous_famille;
        $biens->description_famille = $request->description_famille;
        $biens->duree_ammortissement = $request->duree_ammortissement;
        $biens->description_famille = $request->description_famille;
        $biens->prix_achat = $request->prix_achat;
        $biens->date_mise_enservice = $request->date_mise_enservice;
        $biens->update();
        return redirect()->route('bien.index')->with("success","Bien bien Modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biens = Bien::find($id);
        $biens->destroy($id);
        return redirect()->route('bien.index')->with("success","Bien bien Supprimer");
    }
    
    public function export()
    {
        return Excel::download(new BienExport, 'biens.xlsx');
    }

    public function recherche(Request $request){

        $recherche = trim($request->input('recherche'));

        $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
        ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
        ->where('code_barre', 'like', "%{$recherche}%")

        
        ->paginate(20);
        $table = view('Bien.table', compact('biens'))->render();
        return response()->json(compact('table'));
    }
    public function recherchevna(Request $request){

         $recherche = trim($request->input('vna'));

         $biens = Bien::select("*")
            ->Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
            ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
            ->where("(('prix_achat')-((100/('duree_ammortissement')*('prix_achat'))*('duree_ammortissement'))/100)", '=',$recherche)
            ->paginate(20);
            $table = view('Bien.table', compact('biens'))->render();
            return response()->json(compact('table'));

    }
    public function rechercheaffictation(Request $request){

        $recherche = trim($request->input('affictation'));
        $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
        ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
       ->where('affictation', '=',$recherche)
       ->paginate(20);
       $table = view('Bien.table', compact('biens'))->render();
       return response()->json(compact('table'));

   }
 
    public function rechercheparentreprise(Request $request){

        $entreprise = trim($request->input('entreprise'));
        $categorie = trim($request->input('categorie'));
        if(!empty($entreprise)  and empty($categorie)){
            $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
            ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
           ->where('entreprise_id', $entreprise)
            ->paginate(20);
            $table = view('Bien.table', compact('biens'))->render();
            return response()->json(compact('table'));
        }
        if(!empty($categorie) and empty($entreprise)){
            
            $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
            ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
            ->where('entreprise_id', '=',$categorie)
            ->paginate(20);
            $table = view('Bien.table', compact('biens'))->render();
            return response()->json(compact('table'));
        }
        if(!empty($categorie) and !empty($entreprise)){
            $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
            ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
            ->where('entreprise_id', '=',$entreprise)
            ->where('categorie_id', '=',$categorie)

            ->paginate(20);
            $table = view('Bien.table', compact('biens'))->render();
            return response()->json(compact('table'));
        }
        
       

    }
    public function fileImport(Request $request) 
    {
       
        try {

           Excel::import(new BienImport, $request->file('biens')->store('temp'));
           return redirect()->route('bien.index')->with("success","Implimantation reussite");
          
          } catch (\Exception $e) {
          
            return redirect()->route('bien.index')->with("error","Opiration non aboutie");
         // }
    }
}
}