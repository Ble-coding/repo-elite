<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    use HasFactory;

    protected $table = 'solds';


        protected $fillable = ['montantD','montantR',
        'entreprise_id','rendu','prename_deposant','tel_deposant','motif',
        'name_deposant','piece_id','numpiece','reference','timbre','add_deposant'
];

    public function withadrals(){
        return $this->hasMany('App\Models\Withadral');
    }
    
    public function entreprise(){
        return $this->belongsTo('App\Models\Entreprise');
    }
    // public function deposits(){
    //     return $this->hasMany('App\Models\Deposit');
    // }
}
