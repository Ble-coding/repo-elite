<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Retire extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'retires';

    protected $fillable = ['montant',
        //    'caisse_id',
           'name_debiteur','motif'
    

];

// public function caisse(){
//     return $this->belongsTo('App\Models\Caisse');
// }
   
}
