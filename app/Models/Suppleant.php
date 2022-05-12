<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppleant extends Model
{
    use HasFactory;

    protected $table = 'suppleants';
    protected $fillable = ['name',
    'prename',
    'email',
    'tel',      
    'prof',
    'code_parrain'

];

public function diminishes(){
    return $this->hasMany('App\Models\Diminish');
}
public function sommes(){
    return $this->hasMany('App\Models\Somme');
}
public function investissements(){
    return $this->hasMany('App\Models\Investissement');
}
     
}
