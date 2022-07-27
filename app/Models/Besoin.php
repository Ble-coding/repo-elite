<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Besoin extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $table = 'besoins';

    protected $fillable = [
        'montant','objet', 'auto','elite',
        'cout','general_id','pret_id'
    ];

    public function pret(){
        return $this->belongsTo('App\Models\Pret');
        }

        public function general(){
            return $this->belongsTo('App\Models\General');
            }

}
