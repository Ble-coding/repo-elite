<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visiteur extends Model
{
    use HasFactory,SoftDeletes;

    
    protected $table = 'visiteurs';

    // protected $fillable = ['name'];
//     protected $fillable = ['name', 'prename','nationnalite','adresse',
//     'tel','email','sexe',
//     'code','piece_id','numpiece','dateexp',
//    'user_id'
// ];




protected static function booted() {

    static::creating(function ($visiteur) {
        $visiteur->user_id = auth()->id();
    });
}

public function user(){
    return $this->belongsTo('App\Models\User');
}

public function ventes(){
    return $this->hasMany('App\Models\Vente');
}

public function somms(){
    return $this->hasMany('App\Models\Somm');
}
// public function type(){
//     return $this->belongsTo('App\Models\Type');
// }

// public function sodes(){
//     return $this->hasMany('App\Models\Sode');
// }
// // public function retraits(){
// //     return $this->hasMany('App\Models\Retrait');
// // }  

 public function rachats(){
   return $this->hasMany('App\Models\Rachat');
}
public function piece(){
    return $this->belongsTo('App\Models\Piece');
    }
}
