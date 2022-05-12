<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Depose extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'deposes';

    protected $fillable = ['montantD','montantR',
    'society_id','rendu','prename_deposant','tel_deposant','motif',
    'name_deposant','piece_id','numpiece','reference','timbre','add_deposant',
    'user_id'
 
];


protected static function booted() {

    static::creating(function ($depose) {
        $depose->user_id = auth()->id();
    });
}
public function piece(){
    return $this->belongsTo('App\Models\Piece');
}
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function society(){
        return $this->belongsTo('App\Models\Society');
    }

    public function sod(){
        return $this->belongsTo('App\Models\Sold');
    }
}
