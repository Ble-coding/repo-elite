<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Widraw extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'widraws';

    protected $fillable = ['montant',
    'name_retirant','prename_retirant','tel_retirant','piece_id',
    'sod_id','motif',
    'numpiece','reference','add_retirant',
    'user_id'
];


protected static function booted() {

    static::creating(function ($widraw) {
        $widraw->user_id = auth()->id();
    });
}


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function sod(){
        return $this->belongsTo('App\Models\Sod');
    }
}
