<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;

use App\Models\Bien;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Arr;

use Maatwebsite\Excel\Concerns\FromCollection;

class BienExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {


        $entreprises  = Entreprise::get();
        $biens = Bien::Join('entreprises', 'entreprises.id', '=', 'biens.entreprise_id')
            ->Join('categories', 'categories.id', '=', 'biens.categorie_id')
            ->select('biens.*', 'nom_entreprises', 'nom_cat')
            ->get();

        $biens->transform(function ($i) {
            //$nom_entreprises = $i->nom_entreprises;

            /*unset($i->nom_entreprises);
            unset($i->nom_cat);*/
            unset($i->categorie_id);
            unset($i->entreprise_id);
            unset($i->created_at);
            unset($i->updated_at);
            //dd($i->toArray());
            //$arr = $i->toArray();
            //array_unshift($arr,["nom_entreprises" => $nom_entreprises]);
            //$i = $arr;
            return $i;
        });



        //dd($biens);
        foreach ($biens as &$row) {
            $row->date_ammortssement = date('Y-m-d', strtotime($row->duree_ammortissement . "year", strtotime($row->date_mise_enservice))); 
            ($row->duree_ammortissement > 0) ? $row->taux_ammortissement = 100 / ($row->duree_ammortissement) : $row->taux_ammortissement = "0";
            ($row->duree_ammortissement > 0) ?  $row->ammortissement = (100 / ($row->duree_ammortissement)) * ($row->prix_achat) : $row->ammortissement = "0";
            ($row->duree_ammortissement > 0) ? $row->cumul_ammortissement = ($row->ammortissement) * ($row->duree_ammortissement) / 100 :  $row->cumul_ammortissement = "0";
            ($row->duree_ammortissement > 0) ? $row->vna = ($row->prix_achat) - ($row->cumul_ammortissement) :  $row->vna = "0";
            ($row->vna == 0) ? $row->vna = "0" :  $row->vna = $row->vna;
            //dd($row);
        }
        //dd($biens);
        $newBiens = array();
        $oldBiens = $biens->toArray();
        foreach($oldBiens as $bien){
            $newBien = array();
            $newBien = Arr::add($newBien,'id',$bien["id"]);
            $newBien = Arr::add($newBien,'entreprise',$bien["nom_entreprises"]);
            $newBien = Arr::add($newBien,'categorie',$bien["nom_cat"]);
            foreach($bien as $key => $value){
                if($key == "nom_entreprises" || $key == "nom_cat" || $key == "id") continue;
                $newBien = Arr::add($newBien,$key,$value);
            }   
            array_push($newBiens,$newBien);
        }
       // dd($newBiens);

        return collect($newBiens);
    }

    public function headings(): array
    {

        $column = Schema::getColumnListing("biens");
        unset($column[0]);
        unset($column[1]);
        unset($column[2]);
        unset($column[24]);
        unset($column[25]);
        array_unshift($column,"id","entreprise","categorie");
        
      /*  array_push($column, "entreprise");
        array_push($column, "categorie");*/
        array_push($column, "Date d'ammortissement");
        array_push($column, "taux d'ammortissement");
        array_push($column, "'ammortissement");
        array_push($column, "cumul d'ammortissement");
        array_push($column, "VNA");


        return $column;
    }
}
