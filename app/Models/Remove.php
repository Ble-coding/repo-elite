<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Remove extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'removes';

    protected $fillable = ['montant',
    'name_retirant','prename_retirant','tel_retirant','piece_id',
    'sode_id','motif',
    'numpiece','reference','add_retirant',
    'user_id'

];


protected static function booted() {

    static::creating(function ($remove) {
        $remove->user_id = auth()->id();
    });
}


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function sode(){
        return $this->belongsTo('App\Models\Sode');
    }

}
