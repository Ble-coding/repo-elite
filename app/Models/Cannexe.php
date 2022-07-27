<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cannexe extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cannexes';
        protected $fillable = [

        'nom_preteur',
    'monnaie',
    'montant_origine',
    'objet_pret',
    'solde',
    'tauxR',
    'echeance',

    'nom_preteur1',
    'monnaie1',
    'montant_origine1',
    'objet_pret1',
    'solde1',
    'tauxR1',
    'echeance1',

    'nom_preteur2',
    'monnaie2',
    'montant_origine2',
    'objet_pret2',
    'solde2',
    'tauxR2',
    'echeance2',

    'nom_preteur3',
    'monnaie3',
    'montant_origine3',
    'objet_pret3',
    'solde3',
    'tauxR3',
    'echeance3',


    'main_id'
    ];

    public function main(){
        return $this->belongsTo('App\Models\Main');
    }
}

