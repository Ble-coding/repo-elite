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
    // 'investiman',
    'client_id',
    'intervenant_id',
    'particulier_id',
     'customer_id',
       'bonus','total',
    // 'user_id'
];

public function customer(){
    return $this->belongsTo('App\Models\Customer');
}
public function intervenant(){
    return $this->belongsTo('App\Models\Customer');
}
public function client(){
    return $this->belongsTo('App\Models\Client');
}
public function investissement(){
    return $this->belongsTo('App\Models\Investissement');
}
public function particulier(){
    return $this->belongsTo('App\Models\Customer');
}
}
