<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Somm extends Model
{
    use HasFactory;

    protected $table = 'somms';


    protected $fillable = ['visiteur_id',
    'immatricule',
     'carte_grise', 'montant',
       'payment','status',
         'duree',
          'compteur',
         'retire', 'total','soustract','date_termine',
];



public function rachats(){
    return $this->hasMany('App\Models\Rachat');
}
    // public function visiteur(){
    //     return $this->belongsTo('App\Models\Visiteur');
    // }

    public function decaisses(){
        return $this->hasMany('App\Models\Decaisse');
    }
}
