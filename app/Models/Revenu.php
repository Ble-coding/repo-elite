<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Revenu extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'revenus';
     protected $fillable = [
        'rev_mens','comm','div_int','rev_loc','autre_rev1',
        'autre_rev2','rev_mens_conj','general_id',
        'autre_rev_conj','tot_rev'

    ];


        public function general(){
            return $this->belongsTo('App\Models\General');
            }
}
