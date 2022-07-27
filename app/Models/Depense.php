<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Depense extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'depenses';

     protected $fillable = [
        'vers_hyp','loyers','impt_loc','prime','carte_credit',
        'rembourse','pret_conso','general_id',
        'pension','elect',
        'transport','frais',
        'nourritur','epargne_mens', 
        'autre_dep', 'tot_dep'
        
    ];


        public function general(){
            return $this->belongsTo('App\Models\General');
            }
}
