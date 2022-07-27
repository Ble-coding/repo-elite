<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conjoint extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'conjoints';

    protected $fillable = [
        'sexeC','nameC','prenameC','name_naissanceC','nbr_dependantC',
        'datenaissC','piece_idC','general_id',
        'communeC', 'commune_residenceC',

    ];

    public function piece(){
        return $this->belongsTo('App\Models\Piece');
        }

        public function general(){
            return $this->belongsTo('App\Models\General');
            }
}
