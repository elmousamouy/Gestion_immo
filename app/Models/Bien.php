<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    protected $fillable = [
        'referance',
        'site',
        'sous_site',
        'emplacement',
        'code_barre',
        'designation',
        'date_achat',
        'fournisseur',
        'n_serie',
        'n_factur',
        'quantitee',
        'code_comptable',
        'compte_comptable',
        'n_bc',
        'sous_famille',
        'description_famille',
        'duree_ammortissement',
        'prix_achat',
        'factur',
        'entreprise_id',
        'categorie_id',
        'affictation',
        'date_mise_enservice',
    ];
    
}





//TAUX D'AMMORTISSEMENT
//AMMORTISSEMENT
//CUMULE
//VNA
