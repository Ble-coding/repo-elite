<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'personnels';
     protected $fillable = [
        'name_ref','prename_ref','adressRef','telRef',
        'name_ref1','prename_ref1','adressRef1','main_id',
        'telRef1'
        // ,'name_ref2','prename_ref2','adressRef2','telRef2'

    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
            }
}
