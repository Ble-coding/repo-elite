<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responsable extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'responsables';
             protected $fillable = [
        'nameResp','prenameResp',  'addressResp',
        'ville','daexp',
        'depuisResp','datenaiss','prof',
        'nationnalite',
        'nbr_dependantResp','tel_residence','bureau','piece_id',
        'etat_id','date_mariage','regime_id','nom_conjoint','emprunt',
        'anterieur','where_emprunt','where_anterieur',
    'main_id'
    ];

    public function main(){
        return $this->belongsTo('App\Models\Main');
    }


}
