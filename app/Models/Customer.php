<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    
    protected $table = 'customers';
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
  'address',
  'tel_ent',
  'date_deb',
   'type_id',
   'user_id'

];


protected static function booted() {

    static::creating(function ($customer) {
        $customer->user_id = auth()->id();
    });
}

public function user(){
    return $this->belongsTo('App\Models\User');
}




public function type(){
    return $this->belongsTo('App\Models\Type');
}

public function sommes(){
    return $this->hasMany('App\Models\Somme');
}

public function tracs(){
    return $this->hasMany('App\Models\Trac');
}
public function bonuses(){
    return $this->hasMany('App\Models\Bonus');
}

public function investissements(){
    return $this->hasMany('App\Models\Investissement');
}

// public function forfaits(){
//     return $this->hasMany('App\Models\Forfait');
// }

public function diminishes(){
    return $this->hasMany('App\Models\Diminish');
}
public function piece(){
    return $this->belongsTo('App\Models\Piece');
    }

}
