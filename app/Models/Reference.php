<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reference extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'references';
             protected $fillable = [
        'nameref','prenameref','name1','prename1',
    'adress_ref',
    'tel_ref',
    'adress_ref1',
    'tel_ref1',
    'general_id'
    ];

    public function general(){
        return $this->belongsTo('App\Models\General');
    }
}
