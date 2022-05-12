<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Somme extends Model
{
    use HasFactory;

    protected $table = 'sommes';

    protected $fillable = [
    //     'montant',
    // 'customer',
    //    'forfait_id', 'status',
    //     'jalon',

        'montant',
    'investiman',
     'customer_id',
       'forfait_id','status',
         'choix','bonus', 'jalon', 'compteur',
         'retire', 'total','soustract','date_termine',
    // 'user_id'
];


// protected static function booted() {

//     static::creating(function ($investi) {
//         $investi->user_id = auth()->id();
//     });
// }
public function forfait(){
    return $this->belongsTo('App\Models\Forfait');
}


public function suppleant(){
    return $this->belongsTo('App\Models\Suppleant');
}
public function customer(){
    return $this->belongsTo('App\Models\Customer');
}
// public function diminish(){
//     return $this->belongsTo('App\Models\Diminish');
// }

public function diminishes(){
    return $this->hasMany('App\Models\Diminish');
}
    public function investi(){
        return $this->belongsTo('App\Models\Investissement');
    }
}
