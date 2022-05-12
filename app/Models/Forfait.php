<?php

namespace App\Models;

use App\Models\Investissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Forfait extends Model
{
    use HasFactory, SoftDeletes;

    
    protected $table = 'forfaits';

    protected $fillable = ['libelle_Forfait','duree','pourcentageM','pourcentageJ','montantMin','montantMax',
//  'investissement_id'
];

    
    // public function users(){
    //     return $this->belongsToMany('App\Models\User');
    // }

    public function diminishes(){
        return $this->hasMany('App\Models\Diminish');
    }
 
    public function sommes(){
        return $this->hasMany('App\Models\Somme');
    }

    public function investissements(){
        return $this->hasMany('App\Models\Investissement');
    }

    // public function investissements(){
    //     return $this->hasMany(Investissement::class);
    // }
    
}
