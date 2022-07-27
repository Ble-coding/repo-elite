<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bancarisation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bancarisations';

    protected $fillable = [
        'banque',
        'type',
    'montantBank',
    'date_compte',
    'balance',

    'banque1',
    'type1',
'montantBank1',
'date_compte1',
'balance1',

'banque2',
'type2',
'montantBank2',
'date_compte2',
'balance2',

'banque3',
'type3',
'montantBank3',
'date_compte3',
'balance3',

'banque4',
'type4',
'montantBank4',
'date_compte4',
'balance4',


'banque5',
'type5',
'montantBank5',
'date_compte5',
'balance5',



'banque6',
'type6',
'montantBank6',
'date_compte6',
'balance6',


    'main_id'
    ];


        public function main(){
            return $this->belongsTo('App\Models\Main');
        }

}
