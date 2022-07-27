<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Protection extends Model 
{
    use HasFactory,SoftDeletes;

    protected $table = 'protections';
     protected $fillable = [
        'assu','montant_pro','typing',
        'assu1','montant_pro1','typing1',
        'assu2','main_id',
        'montant_pro2','typing2','assu3','montant_pro3','typing3',
        'assu4','montant_pro4','typing4'

    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}



