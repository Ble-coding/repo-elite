<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bancaire extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bancaires';

    protected $fillable = [
        'banque',
        'type',
    'montantBank',
    'num_compte',
    'balance',

    'banque1',
    'type1',
'montantBank1',
'num_compte1',
'balance1',

'banque2',
'type2',
'montantBank2',
'num_compte2',
'balance2',

'banque3',
'type3',
'montantBank3',
'num_compte3',
'balance3',

'banque4',
'type4',
'montantBank4',
'num_compte4',
'balance4',

    'general_id'
    ];

    // protected $guarded = array();

        public function user(){
            return $this->belongsTo('App\Models\User');
        }


        public function general(){
            return $this->belongsTo('App\Models\General');
        }


}
