<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Depositary extends Model
{
    use HasFactory,SoftDeletes;

    
    protected $table = 'depositaries';

    protected $fillable = ['montantD','montantR',
    'client_id','rendu','prename_deposant','tel_deposant','motif',
    'name_deposant','piece_id','numpiece','reference','timbre','add_deposant',
    'user_id'

];


protected static function booted() {

    static::creating(function ($depositary) {
        $depositary->user_id = auth()->id();
    });
}


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    // public function particulier(){
    //     return $this->belongsTo('App\Models\Particulier');
    // }

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function sode(){
        return $this->belongsTo('App\Models\Sode');
    }
}
