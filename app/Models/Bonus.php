<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;


    protected $table = 'bonuses';

    protected $fillable = [

        'montantB',
    'investiman',
     'customer_id',
       'bonus','total',
    // 'user_id'
];

public function customer(){
    return $this->belongsTo('App\Models\Customer');
}
}
