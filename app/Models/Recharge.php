<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recharge extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'recharges';

    protected $fillable = [
 'credit_id', 'caisse_id',
 'montant', 
 'code',

];


    public function credit(){
        return $this->belongsTo('App\Models\Credit');
    }

    public function caisse(){
        return $this->belongsTo('App\Models\Caisse');
    }
}
