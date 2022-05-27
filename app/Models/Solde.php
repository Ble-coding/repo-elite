<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solde extends Model
{
    use HasFactory;

    protected $table = 'soldes';
    protected $fillable = ['montantD','montantR',
    'particulier_id','rendu','prename_deposant','tel_deposant','motif',
    'name_deposant','piece_id','numpiece','reference','timbre','add_deposant',
    // 'user_id'
];


public function retraits(){
    return $this->hasMany('App\Models\Retrait');
}

public function transferts(){
    return $this->hasMany('App\Models\Transfert');
}
    public function particulier(){
        return $this->belongsTo('App\Models\Particulier');
    }

    public function validates(){
        return $this->hasMany('App\Models\Validate');
    }
}
