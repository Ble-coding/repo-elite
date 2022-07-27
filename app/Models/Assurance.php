<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assurance extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'assurances';
     protected $fillable = [
        'compagnie','benef','nominal','compagnie1','benef1',
        'nominal1','benef2','nominal2',
        'compagnie2','main_id'

    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}
