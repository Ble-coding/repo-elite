<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Withadral extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'withadrals';

    protected $fillable = ['montant',
    'name_retirant','prename_retirant','tel_retirant','piece_id',
    'sold_id','motif',
    'numpiece','reference','add_retirant',
    'user_id'

];


protected static function booted() {

    static::creating(function ($withadral) {
        $withadral->user_id = auth()->id();
    });
}


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function sold(){
        return $this->belongsTo('App\Models\Sold');
    }
}
