<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Titre extends Model
{
    use HasFactory,SoftDeletes; 
 
    protected $table = 'titres';
     protected $fillable = [
        'nbr_part','description','valeurM','nbr_part1','description1',
        'valeurM1','nbr_part2','description2',
        'valeurM2','main_id'

    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}


