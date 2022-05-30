<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Caisse extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'caisses';

    protected $fillable = [
        'name',
        'montant',
];


    
    public function recharges(){
        return $this->hasMany('App\Models\Recharge');
    }

    // public function retires(){
    //     return $this->hasMany('App\Models\Retire');
    // }
}
