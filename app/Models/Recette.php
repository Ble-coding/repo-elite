<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recette extends Model
{
    use HasFactory,SoftDeletes;  

    protected $table = 'recettes';
     protected $fillable = [
        'rev_mens','comm','div_int','rev_loc','autre_rev1',
        'autre_rev2','rev_mens_conj','main_id','autre_rev3',
        'autre_rev4',
        'autre_rev_conj','tot_rev','tot_part'

    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}


