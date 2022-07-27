<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spent extends Model
{ 
    use HasFactory,SoftDeletes;

    protected $table = 'spents';
     protected $fillable = [
        'vers_hyp','impt_fon','impt_rev','prime','carte_credit',
        'rembourse','pension','main_id',
        'autre_dep','autre_dep1','autre_dep2','autre_dep3','tot_dep'

    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}
