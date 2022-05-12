<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rachat extends Model
{
    use HasFactory, SoftDeletes;

    
    protected $table = 'rachats';

    protected $fillable = ['montant',
           'payment','vente_id',
        //    , 'visiteur_id',
    'user_id',

];

protected static function booted() {

    static::creating(function ($rachat) {
        $rachat->user_id = auth()->id();
    });
}




    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function visiteur(){
        return $this->belongsTo('App\Models\Visiteur');
    }
    public function vente(){
        return $this->belongsTo('App\Models\Vente');
    }


    public function somms(){
        return $this->hasMany('App\Models\Somm');
    }


}
