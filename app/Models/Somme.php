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
        'choice_id',
    'envoie_id',
     'customer_id',
     'client_id',
     'intervenant_id',
     'particulier_id',
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


public function client(){
    return $this->belongsTo('App\Models\Client');
}
public function customer(){
    return $this->belongsTo('App\Models\Customer');
}
// public function transferts(){
//     return $this->hasMany('App\Models\Transfert');
// } 

// public function transfts(){
//     return $this->hasMany('App\Models\Transfert');
// } 
public function diminishes(){
    return $this->hasMany('App\Models\Diminish');
}
    public function particulier(){
        return $this->belongsTo('App\Models\Particulier');
    }

    public function intervenant(){
        return $this->belongsTo('App\Models\Customer');
    } 
   
 
    
}
