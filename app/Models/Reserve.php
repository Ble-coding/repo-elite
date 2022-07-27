<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reserve extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'reserves';

     protected $fillable = [
        'dispo','amor','new_dispo','taux','general_id',
    ];


        public function general(){
            return $this->belongsTo('App\Models\General');
            }
}
   