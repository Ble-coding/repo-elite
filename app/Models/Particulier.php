<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Haruncpi\LaravelIdGenerator\IdGenerator;

class Particulier extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'particuliers';
    protected $fillable = ['name', 'prename', 'datenaiss','nationnalite','lieu_habitation',
     'lieu','tel','email',
    'sexe',
     'code','personne_name','personne_prename','personne_tel','piece_id','numpiece','dateexp','image',


    'situation',
    'successeur_name',
    'successeur_prename',
    'successeur_tel',

    'prof',
    'nom_ent',
    'status',
   'address',
   'tel_ent',
   'date_deb',
    'type_id',
    'user_id'

];


protected static function booted() {

    static::creating(function ($particulier) {
        $particulier->user_id = auth()->id();
    });
}



public function user(){
    return $this->belongsTo('App\Models\User');
}
public function depots(){
    return $this->hasMany('App\Models\Depot');
}

public function confirmations(){
    return $this->hasMany('App\Models\Confirmation');
}

public function investissements(){
    return $this->hasMany('App\Models\Investissement');
}

public function soldes(){
    return $this->hasMany('App\Models\Solde');
}
public function retraits(){
    return $this->hasMany('App\Models\Retrait');
}
public function tracs(){
    return $this->hasMany('App\Models\Trac');
}
public function bonuses(){
    return $this->hasMany('App\Models\Bonus');
}

public function piece(){
    return $this->belongsTo('App\Models\Piece');
}
public function type(){
    return $this->belongsTo('App\Models\Type');
}

public function diminishes(){
    return $this->hasMany('App\Models\Diminish');
}
public function generals(){
    return $this->hasMany('App\Models\General');
}


}
