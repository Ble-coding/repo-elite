<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diminish extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'diminishes';

    protected $fillable = ['montant',
    // 'date_create',
    // 'customer',
    //  'code_inv',
    //    'forfait_id',
    //     'jalon',
    //     'montant',
        'investiman',
        //  'suppleant',
           'forfait_id',
        //    'status',
            //  'choix',
            //  'bonus', 
             'jalon',
        'code_inv',
    'user_id'

];

protected static function booted() {

    static::creating(function ($diminish) {
        $diminish->user_id = auth()->id();
    });
}




    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function investissement(){
        return $this->belongsTo('App\Models\Investissement');
    }
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }

    // public function suppleant(){
    //     return $this->belongsTo('App\Models\Suppleant');
    // }


    public function sommes(){
        return $this->hasMany('App\Models\Somme');
    }


    public function forfait(){
        return $this->belongsTo('App\Models\Forfait');
    }

}
