<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spouse extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'spouses';
    
    protected $fillable = [
        'prof_empS','name_empS','addresseS','date_debS','positionS',
        'emp_preS','date_finS','general_id',
        'autre_actS', 'date_instS','proprioS',
        'patenteS', 'nbr_persS',
        
    ];


        public function general(){
            return $this->belongsTo('App\Models\General');
            }
}
