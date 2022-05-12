<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    use HasFactory;

    protected $table = 'recepts';

    protected $fillable = [

        'montant',
     'customer_id', 'code_bonus',
    'user_id'
];


protected static function booted() {

    static::creating(function ($recept) {
        $recept->user_id = auth()->id();
    });
}



public function user(){
    return $this->belongsTo('App\Models\User');
}

public function customer(){
    return $this->belongsTo('App\Models\Customer');
}
}
