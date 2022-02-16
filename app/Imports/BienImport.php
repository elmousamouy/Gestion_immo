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

        return new Bien([

            'id' => $row['id'],

            'entreprise_id'     => Entreprise::where("nom_entreprises","=",$row['entreprise'])->first()["id"],

            'categorie_id'    => Categorie::where("nom_cat","=",$row['categorie'])->first()["id"],//$row['categorie_id'],

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

            'date_achat'    =>  date('Y-m-d', strtotime($row['date_mise_enservice'])),

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
}
