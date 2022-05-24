<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valeur extends Model
{
    use HasFactory;

    protected $table = 'valeurs';
    protected $fillable = [
   'pourcentage',
//    'typing',
   'user_id'
];


protected static function booted() {

    static::creating(function ($valeur) {
        $valeur->user_id = auth()->id();
    });
}

public function user(){
    return $this->belongsTo('App\Models\User');
}
}
