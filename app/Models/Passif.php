<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passif extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'passifs'; 
             protected $fillable = [
        'pretB','biens',  'carteCredit',
        'carteCredit1',

        'carteCredit2','autres','autres1',
        'passife',
        'valeur','diverses','cosigne','nature', 'mt',

    'main_id'
    ];

    public function main(){
        return $this->belongsTo('App\Models\Main');
    }

}
