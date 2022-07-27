<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sod extends Model
{
    use HasFactory;

    
    protected $table = 'sods';

    protected $fillable = [
    'montantD','montantR',
    'society_id','rendu','prename_deposant','tel_deposant','motif',
    'name_deposant','piece_id','numpiece','reference','timbre','add_deposant',
    'actif'
];

    
    public function society(){
        return $this->belongsTo('App\Models\Society');
    }

    public function transferts(){
        return $this->hasMany('App\Models\Transfert');
    }
    public function validates(){
        return $this->hasMany('App\Models\Validate');
    }
    public function widraws(){
        return $this->hasMany('App\Models\Widraw');
    }
}
