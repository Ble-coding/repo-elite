<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propo extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'propos';
     protected $fillable = [
        'garanties','amount','place','dateE',
        'garanties1','amount1','place1','main_id',
        'dateE1','garanties2','amount2','place2','dateE2'

    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}



