<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vente extends Model
{
    use HasFactory, SoftDeletes;



    protected $table = 'ventes';

 
    protected $fillable = [
        'name', 'prename','nationnalite','adresse',
    'tel','email','sexe',
    'code','piece_id','numpiece','dateexp',
   'immatricule',
   'carte_grise', 'marque','model','couleur',
   'circulation', 'montant','payment','status',
   'duree',
 'contrat',
    'compteur','duree','date_termine',
   'user_id'
//    , 'visiteur_id'
];


    protected static function booted() {

        static::creating(function ($vente) {
            $vente->user_id = auth()->id();
        });
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function decaisses(){
        return $this->hasMany('App\Models\Decaisse');
    }

    public function rachats(){
        return $this->hasMany('App\Models\Decaisse');
    }
    public function piece(){
        return $this->belongsTo('App\Models\Piece');
    }

}
