<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envoie extends Model
{
    use HasFactory;


    protected $table = 'envoies';

    protected $fillable = [
        'name',
    ];


    public function generals(){
        return $this->hasMany('App\Models\General');
    }

    public function transferts(){
        return $this->hasMany('App\Models\Transfert');
    }

    public function bancaires(){
        return $this->hasMany('App\Models\Bancaire');
    }
}
