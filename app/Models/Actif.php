<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Actif extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'actifs';
             protected $fillable = [
        'sgbk','institutions',  'assurance',
        'compte',

        'negociable','sommes','sommes1','auto',
        'immo','int','element','element1',
        'element2','actif_tot',
    'main_id'
    ];

    public function main(){
        return $this->belongsTo('App\Models\Main');
    }
}


