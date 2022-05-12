<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Decaisse extends Model
{
    use HasFactory, SoftDeletes;

    
    protected $table = 'decaisses';

    protected $fillable = ['montant',
           'payment','vente_id',
    'user_id',

];

protected static function booted() {

    static::creating(function ($decaisse) {
        $decaisse->user_id = auth()->id();
    });
}




    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function vente(){
        return $this->belongsTo('App\Models\Vente');
    }


    public function somms(){
        return $this->hasMany('App\Models\Somm');
    }

}
