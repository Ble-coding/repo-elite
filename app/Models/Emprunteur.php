<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emprunteur extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'emprunteurs';
    
    protected $fillable = [
        'prof_emp','name_emp','addresse','date_deb','position',
        'emp_pre','date_fin','general_id',
        'autre_act', 'date_inst','proprio',
        'patente', 'nbr_pers',
        
    ];


        public function general(){
            return $this->belongsTo('App\Models\General');
            }
           
            
}
