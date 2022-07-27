<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'relations';
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
    'general_id'
    ];

    public function general(){
        return $this->belongsTo('App\Models\General');
    }
}
