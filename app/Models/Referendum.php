<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Referendum extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'referendums';
             protected $fillable = [
        'nameref','prenameref',  'adress_ref',
        'tel_ref',

        'name1','prename1','adress_ref1','tel_ref1',
        'name2','prename2','adress_ref2','tel_ref2',
        'name3','prename3','adress_ref3','tel_ref3',
    'main_id'
    ];

    public function main(){
        return $this->belongsTo('App\Models\Main');
    }

}
