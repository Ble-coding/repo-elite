<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobiliere extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mobilieres';

    protected $fillable = [
        'typeM',
    'descriptionM',
    'valeurM',
    'typeM1',
    'descriptionM1',
    'valeurM1',
    'typeM2',
    'descriptionM2',
    'valeurM2',
    'general_id'
    ];

    public function general(){
        return $this->belongsTo('App\Models\General');
    }
}
