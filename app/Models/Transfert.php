<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transfert extends Model
{
    use HasFactory,SoftDeletes;


    protected $table = 'transferts';


    protected $fillable = ['solde_id',
    'sode_id',
     'somme_id','olde_id',
     'ode_id',
      'omme_id', 'montant', 'code',
       'reception_id','envoie_id',
         'user_id',
];


protected static function booted() {

    static::creating(function ($transfert) {
        $transfert->user_id = auth()->id();
    });
}



public function user(){
    return $this->belongsTo('App\Models\User');
}


public function solde(){
    return $this->belongsTo('App\Models\Solde');
}


public function sode(){
    return $this->belongsTo('App\Models\Sode');
}
public function somme(){
    return $this->belongsTo('App\Models\Somme');
}


public function olde(){
    return $this->belongsTo('App\Models\Solde');
}


public function ode(){
    return $this->belongsTo('App\Models\Sode');
}
public function omme(){
    return $this->belongsTo('App\Models\Somme');
}

public function reception(){
    return $this->belongsTo('App\Models\Reception');
}
public function envoie(){
    return $this->belongsTo('App\Models\Envoie');
}


}
