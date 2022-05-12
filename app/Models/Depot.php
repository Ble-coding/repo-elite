<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Depot extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'depots';

 

    protected $fillable = ['montantD','montantR',
    'particulier_id','rendu','prename_deposant','tel_deposant','motif',
    'name_deposant','piece_id','numpiece','reference','timbre','add_deposant',
    'user_id'

];


protected static function booted() {

    static::creating(function ($depot) {
        $depot->user_id = auth()->id();
    });
}
// public function getMontantAttribute($depot){
//     return number_format($depot, 0, ',', ' ') ;
    
// }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function particulier(){
        return $this->belongsTo('App\Models\Particulier');
    }

    public function piece(){
        return $this->belongsTo('App\Models\Piece');
    }

    // public function solde(){
    //     return $this->belongsTo('App\Models\Solde');
    // }
  
    
    
}
