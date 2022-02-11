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

        ]);
    }
}
