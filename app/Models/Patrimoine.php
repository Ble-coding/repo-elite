<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patrimoine extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'patrimoines';

    protected $fillable = [
        'type_pat',
    'description',
    'valeur',
    'type_pat1',
    'description1',
    'valeur1',
    'type_pat2',
    'description2',
    'valeur2',
    'general_id'
    ];

    public function general(){
        return $this->belongsTo('App\Models\General');
    }
}
