<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pret extends Model
{
    use HasFactory;

    protected $table = 'prets';
    protected $fillable = [
        'name'
    ];
    public function besoins(){
        return $this->hasMany('App\Models\Besoin');
}

public function needs(){
    return $this->hasMany('App\Models\Need');
}
}
