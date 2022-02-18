<?php
namespace App\Imports;
use App\Models\Bien;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Entreprise;
use App\Models\Categorie;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BienImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)

    {
        
        //$rowForDeff = $row;
        if(empty($row["code_barre"])){
            return null;
        }
        $row['date_mise_enservice']= date('Y-m-d', strtotime($row['date_mise_enservice']));
        $row['date_achat']=date('Y-m-d', strtotime($row['date_achat']));
        if (Bien::where('code_barre', '=', $row['code_barre'])->exists()) {
            
            $biens=Bien::where('code_barre', '=',$row['code_barre'])
            ->join("entreprises","biens.entreprise_id","=","entreprises.id")
            ->join("categories","biens.categorie_id","=","categories.id")
            ->select("biens.*","entreprises.nom_entreprises as entreprise","categories.nom_cat as categorie")
            ->first()
            ->toArray();

            //print_r($biens);
          //  dd($biens,$row);
            //  $biens["referance"] ="abidi";
            unset($biens["id"]);
            unset($biens["entreprise_id"]);
            unset($biens["categorie_id"]);        
            unset($biens["created_at"]);
            unset($biens["updated_at"]);
            unset($biens["deleted_at"]);
            unset($row["id"]);
            unset($row["taux_dammortissement"]);
            unset($row["date_dammortissement"]);
            unset($row["ammortissement"]);
            unset($row["cumul_dammortissement"]);
            unset($row["vna"]);
            //dd($biens,$row);

            if(!empty(array_diff_assoc($row,$biens))){
                $row["entreprise_id"] = Entreprise::where("nom_entreprises", "=", $row['entreprise'])->first()["id"];
                $row["categorie_id"] = Categorie::where("nom_cat", "=", $row['categorie'])->first()["id"];
                unset($row["entreprise"]);
                unset($row["categorie"]);


                $update = Bien::where('code_barre', $row['code_barre'])->update(array_diff_assoc($row,$biens));
                //echo $row['code_barre'];
                //dd(array_diff_assoc($row,$biens));
            }
            if($row["code_barre"] == $biens["code_barre"]){
                return;
            }
         }
             
        return new Bien([
            

            'entreprise_id'     => Entreprise::where("nom_entreprises", "=", $row['entreprise'])->first()["id"],

            'categorie_id'    => Categorie::where("nom_cat", "=", $row['categorie'])->first()["id"],

            'referance'     => $row['referance'],

            'duree_ammortissement'    =>  $row['duree_ammortissement'],

            'date_mise_enservice'     => date('Y-m-d', strtotime($row['date_mise_enservice'])),

            'prix_achat'    => $row['prix_achat'],

            'factur'    => $row['factur'],

            'site'     => $row['site'],

            'sous_site'    => $row['sous_site'],

            'emplacement'     => $row['emplacement'],

            'code_barre'     => $row['code_barre'],

            'designation'    => $row['designation'],

            'date_achat'    =>  date('Y-m-d', strtotime($row['date_achat'])),

            'fournisseur'     => $row['fournisseur'],

            'n_serie'    => $row['n_serie'],

            'n_factur'     => $row['n_factur'],

            'quantitee'     => $row['quantitee'],

            'code_comptable'    => $row['code_comptable'],

            'compte_comptable'    => $row['compte_comptable'],

            'n_bc'    => $row['n_bc'],

            'sous_famille'    => $row['sous_famille'],

            'affictation' => $row['affictation'],

            'description_famille'    => $row['description_famille']

        ]);
    }
  // return null;
//}
}
