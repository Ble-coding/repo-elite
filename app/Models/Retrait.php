<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Retrait extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'retraits';
  
        protected $fillable = ['montant',
    'name_retirant','prename_retirant','tel_retirant','piece_id',
    'solde_id', 
    'numpiece','reference','add_retirant', 'motif',
    'user_id'

];


protected static function booted() {

    static::creating(function ($retrait) {
        $retrait->user_id = auth()->id();
    });
}


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function particulier(){
        return $this->belongsTo('App\Models\Particulier');
    }
    public function solde(){
        return $this->belongsTo('App\Models\Solde');
    }

    
}
